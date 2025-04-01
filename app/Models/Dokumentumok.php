<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class Dokumentumok extends Model
{
    use HasFactory;

    protected $primaryKey = 'dokumentumok_id';
    protected $fillable = [
        'megvalositashelyszin_id',
        'elszamolas_id',
        'dokumentum_tipus_id',
        'eleresi_ut',
        'kitoltes_datuma',
        'feltoltes_idopontja',
        'ellenorzes_statusza',
        'ellenorzes_datuma',
        'rogzites_datuma',
        'ESZA+_azonosito'
    ];

    // Kapcsolatok
    public function megvalositasiHelyszin()
    {
        return $this->belongsTo(MegvalositasiHelyszin::class, 'megvalositashelyszin_id');
    }

    public function elszamolas()
    {
        return $this->belongsTo(Elszamolas::class, 'elszamolas_id');
    }

    public function dokumentumTipus()
    {
        return $this->belongsTo(DokumentumTipus::class, 'dokumentum_tipus_id');
    }

    // Boot esemény a validáláshoz
    protected static function booted()
    {
        parent::boot();

        // Saving esemény, hogy ellenőrizzük az elszamolas_tipus_id-k megegyezését
        static::saving(function ($dokumentum) {
            // Az elszamolas_id alapján lekérdezzük az elszamolas tipust és annak id-ját
            $elszamolasTipusId = $dokumentum->elszamolas->elszamolas_tipus_id;
            $dokumentumTipusId = $dokumentum->dokumentum_tipus_id;

            // Ellenőrizzük, hogy az elszamolas típus id-ja megegyezik-e a dokumentum típus id-jával
            $dokumentumTipusElszamolasTipusId = DB::table('dokumentum_tipuses')
                ->where('dokumentum_tipus_id', $dokumentumTipusId)
                ->value('elszamolas_tipus_id');
            
            if ($elszamolasTipusId !== $dokumentumTipusElszamolasTipusId) {
                throw new ValidationException('Az elszámolás típus nem egyezik a dokumentum típusával.');
            }

            // Az ügyféltípus és dokumentum típus összhangjának ellenőrzése
            $ugyfelTipusId = $dokumentum->elszamolas->ugyfel_tipus_id;
            $validDokumentumTipus = DB::table('ugyfeltipusok_dokumentumais')
                ->where('ugyfel_tipus_id', $ugyfelTipusId)
                ->where('dokumentum_tipus_id', $dokumentumTipusId)
                ->exists();

            // Ha nincs érvényes kapcsolat, hibát dobunk
            if (!$validDokumentumTipus) {
                throw new ValidationException('Ez a dokumentum típus nem érvényes ehhez az ügyféltípushoz.');
            }
        });
    }
}
