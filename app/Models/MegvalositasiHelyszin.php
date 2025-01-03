<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MegvalositasiHelyszin extends Model
{
    use HasFactory;
    protected $primaryKey = 'azon';
    protected $fillable = [
        'intézet',
        'név',
        'agglomeráció',
        'régió',
        'típus',
      
    ];
}
