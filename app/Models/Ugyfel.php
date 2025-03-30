<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ugyfel extends Model
{
    use HasFactory;

    protected $primaryKey = 'ugyfel_id';
    protected $fillable = [
        'nev',
        'szuletesi_nev',
        'anyja_neve',
        'szuletesi_hely',
        'szuletesi_ido',
        'telepules',
        'neme',
        'ugyfelkod'

    ];

    public function elszamolas()
    {
        return $this->hasMany(Elszamolas::class, 'ugyfel_id');
    }   
}
