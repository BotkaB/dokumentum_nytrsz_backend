<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MegvalositasiHelyszinRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->user() && auth()->user()->role < 2; 
    }

    public function rules()
    {
        return [
            'nev' => 'required|string|max:255',
            'intezet' => 'nullable|exists:megvalositasi_helyszins,megvalositasi_helyszin_id',
            'agglomeracio' => 'nullable|integer|min:0|max:1',
            'regio' => 'nullable|string|max:255',
            'tipus' => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nev.required' => 'A név mező kötelező.',
            'intezet.exists' => 'A megadott intézet nem létezik.',
            'agglomeracio.integer' => 'Az agglomeráció csak 0 vagy 1 lehet.',
            'regio.max' => 'A régió neve legfeljebb 255 karakter lehet.',
        ];
    }
}
