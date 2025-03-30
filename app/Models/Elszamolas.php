<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elszamolas extends Model
{
    use HasFactory;



    protected $primaryKey = 'elszamolas_id';
    protected $fillable = [
        'megvalositashelyszin_id',
        'elszamolas_tipus_id',
        'ugyfel_tipus_id',
        'bevonas_datum',
        'kotelezo_dokumentumok_szama',
        'elszamolhatosag_datuma',
        'elszamolas_allapota',
        'elszamolas_datuma'
    ];

    public function megvalositasiHelyszin()
    {
        return $this->belongsTo(MegvalositasiHelyszin::class, 'megvalositasi_helyszin_id');
    }
 
    public function Ugyfel()
    {
        return $this->belongsTo(Ugyfel::class, 'uygfel_id');
    }

    public function dokumentum()
    {
        return $this->hasMany(Dokumentumok::class, 'elszamolas_tipus_id');
    }

    public function elszamolasTipus()
    {
        return $this->belongsTo(ElszamolasTipus::class, 'elszamolas_tipus_id');
    }

    public function ugyfelTipus()
    {
        return $this->belongsTo(UgyfelTipus::class, 'ugyfel_tipus_id');
    }

}
