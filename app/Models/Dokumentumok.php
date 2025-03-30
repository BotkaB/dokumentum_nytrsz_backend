<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentumok extends Model
{
    use HasFactory;

    protected $primaryKey = 'elszamolas_tipus_id';
    protected $fillable = [
        'megvalositashelyszin_id',
        'elszamolas_id',
        'dokumentum_tipus_id',
        'eleresi_ut',
        'kitoltes_datuma',
        'feltoltes_idopontja',
        'ellenorzes statusza',
        'ellenorzes_datuma',
        'rogzites_datua',
        'ESZA+_azonosito'
    ];

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

}
