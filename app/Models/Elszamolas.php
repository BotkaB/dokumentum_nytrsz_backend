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

    
}
