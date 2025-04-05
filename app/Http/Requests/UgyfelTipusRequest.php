<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UgyfelTipusRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user() && auth()->user()->role < 2; 
    }

    public function rules()
    {
        return [
            'elnevezes' => 'required|string|max:255',  
            'ugyfel_fotipus' => 'nullable|exists:ugyfel_tipuses,ugyfel_tipus_id', 
        ];
    }

    public function messages()
    {
        return [
            'elnevezés.required' => 'Az elnevezés mező kötelező.',
            'ugyfel_fotipus.exists' => 'A megadott ügyfél fő típus nem létezik.',
        ];
    }
}
