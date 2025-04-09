<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumentumTipus extends Model
{
    use HasFactory;

   
    protected $primaryKey = 'dokumentum_tipus_id';
    protected $fillable = [
        'elszamolas_tipus_id',
        'dokumentum_neve',

    ];

    public function ugyfelTipusok()
    {
        return $this->belongsToMany(UgyfelTipus::class, 'ugyfel_tipusok_dokumentumai', 'dokumentum_tipus_id', 'ugyfel_tipus_id');
    }

    public function dokumentumTipusok()
    {
        return $this->hasMany(Dokumentumok::class, 'dokumentum_tipus_id');
    }

    public function elszamolasTipus()
    {
        return $this->belongsTo(ElszamolasTipus::class, 'elszamolas_tipus_id');
    }
}
