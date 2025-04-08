<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UgyfelTipusRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->user() && auth()->user()->role < 1; 
    }

    public function rules()
    {
        return [
            'elnevezes' => 'required|string|max:255',
            'ugyfel_fotipus' => 'nullable|string|max:255', // Csak karakterláncot várunk
        ];
    }

    public function messages()
    {
        return [
            'elnevezes.required' => 'Az elnevezés mező kötelező.',
        ];
    }
}
