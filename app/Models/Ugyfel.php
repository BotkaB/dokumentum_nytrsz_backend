<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ugyfel extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'belso_kod';
    protected $fillable = [
        'név',
        'születési név',
        'anyja neve',
        'Születési hely',
        'születési idő',
        'lakcím',
        'neme',
        'ügyfélkód'
            
    ];
}
