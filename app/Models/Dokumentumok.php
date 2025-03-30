<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentumok extends Model
{
    use HasFactory;

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

}
