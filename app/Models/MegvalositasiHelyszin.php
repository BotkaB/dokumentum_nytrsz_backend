<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MegvalositasiHelyszin extends Model
{
    use HasFactory;

    protected $primaryKey = 'megvalositasi_helyszin_id';
    protected $fillable = [
        'intezet',
        'nev',
        'agglomeracio',
        'regio',
        'tipus',

    ];

    public function parent()
{
    return $this->belongsTo(MegvalositasiHelyszin::class, 'intezet');
}

public function children()
{
    return $this->hasMany(MegvalositasiHelyszin::class, 'intezet');
}

    public function elszamolas()
    {
        return $this->hasMany(Elszamolas::class, 'megvalositasi_helyszin_id');
    }

    public function dokumentum()
    {
        return $this->hasMany(Dokumentumok::class, 'megvalositasi_helyszin_id');
    }

 
}
