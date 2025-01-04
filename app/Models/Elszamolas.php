<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elszamolas extends Model
{
    use HasFactory;
  
 

    // Mass assignable mezők
    protected $fillable = [
        'megvalositashelyszin_azon', 
        'ugyfel_belsokod', 
        'ugyfeltipus_azon', 
        'bevonas_datum', 
        'kotelezo_dokumentumok_szama', 
        'opcionalis_dokumentumok_szama', 
        'elszamolhatosag_allapota', 
        'elszamolhatosag_datum', 
        'elszamolas_datum'
    ];

    // Kapcsolatok megadása
    public function megvalositasHelyszin()
    {
        return $this->belongsTo(MegvalositasiHelyszin::class,'azon', 'megvalositashelyszin_azon');
    }

    public function ugyfel()
    {
        return $this->belongsTo(Ugyfel::class, 'belso_kod','ugyfel_belsokod');
    }

    public function ugyfelTipus()
    {
        return $this->belongsTo(UgyfelTipus::class,"id", 'ugyfeltipus_azon');
    }
}


