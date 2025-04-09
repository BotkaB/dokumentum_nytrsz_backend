<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UgyfeltipusokDokumentumai extends Model
{
    use HasFactory;
    protected $table = 'ugyfel_tipusok_dokumentumai';
    protected $fillable = [
        'ugyfel_tipus_id',
        'dokumentum_tipus_id',

    ];

    public function dokumentumTipus()
    {
        return $this->belongsTo(DokumentumTipus::class, 'dokumentum_tipus_id');
    }

    public function ugyfelTipus()
    {
        return $this->belongsTo(UgyfelTipus::class, 'ugyfel_tipus_id');
    }   
}
