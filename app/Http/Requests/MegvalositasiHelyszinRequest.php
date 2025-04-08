<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MegvalositasiHelyszinRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->user() && auth()->user()->role < 1; 
    }

    public function rules()
    {
        return [
            'nev' => 'required|string|max:255',
            'intezet' => 'nullable|string|max:255',  // Csak karakterláncot várunk
            'agglomeracio' => 'nullable|integer|min:1|max:9',
            'regio' => 'nullable|string|max:255',
            'tipus' => 'nullable|string|max:255',
        ];
    }
    
    public function messages()
    {
        return [
            'nev.required' => 'A név mező kötelező.',
            'agglomeracio.integer' => 'Az agglomeráció csak 0 és 9 között lehet.',
            'regio.max' => 'A régió neve legfeljebb 255 karakter lehet.',
            'tipus.max' => 'A típus neve legfeljebb 255 karakter lehet.',
        ];
    }
}    