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
}
