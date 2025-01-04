<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumentumTipus extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'ügyfél_főtípus',
        'elnevezés',
        'opcionalis_e'
            
    ];

    public function ugyfeltipus() { 
        return $this->belongsTo(Ugyfeltipus::class, 'id', 'ügyfél_főtípus'); }
}
