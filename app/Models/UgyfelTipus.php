<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UgyfelTipus extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'főtípus',
        'elnevezés',
            
    ];

    public function dokumentumTipusok() {
     return $this->hasMany(DokumentumTipus::class, 'id', 'főtípus'); }

    
}
