<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElszamolasTipus extends Model
{
    use HasFactory;

    protected $primaryKey = 'elszamolas_tipus_id';
    protected $fillable = [
      'elszamolas_elnevezese'
      

    ];

 public function elszamolas()
    {
        return $this->hasMany(Elszamolas::class, 'elszamolas_tipus_id');
    }

    public function dokumentumTipus()
    {
        return $this->hasMany(DokumentumTipus::class, 'elszamolas_tipus_id');
    }  
}
