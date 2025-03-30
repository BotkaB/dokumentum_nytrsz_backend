<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UgyfelTipus extends Model
{
    use HasFactory;

    protected $primaryKey = 'ugyfel_tipus_id';
    protected $fillable = [
        'ugyfel_fotipus',
        'elnevezes',

    ];

   public function parent()
    {
        return $this->belongsTo(UgyfelTipus::class, 'ugyfel_fotipus');
    }

    public function children()
    {
        return $this->hasMany(UgyfelTipus::class, 'ugyfel_fotipus');
    }

    public function elszamolas()
    {
        return $this->hasMany(Elszamolas::class, 'ugyfel_tipus_id');
    }
    public function ugyfel()
    {
        return $this->hasMany(Ugyfel::class, 'ugyfel_tipus_id');
    }

}