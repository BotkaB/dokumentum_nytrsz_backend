<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumentumTipus extends Model
{
    use HasFactory;

   
    protected $primaryKey = 'dokumentum_tipus_id';
    protected $fillable = [
        'ugyfel_fotipus,
        elszamolas_tipus_id',
        'dokumentum_neve',

    ];

    public function ugyfelTipusok()
    {
        return $this->belongsToMany(UgyfelTipus::class, 'ugyfel_tipusok_dokumentumai', 'dokumentum_tipus_id', 'ugyfel_tipus_id');
    }
}
