<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UgyfeltipusokDokumentumai extends Model
{
    use HasFactory;
    protected $fillable = [
        'ugyfel_tipus_id',
        'dokumentum_tipus_id',

    ];

    
}
