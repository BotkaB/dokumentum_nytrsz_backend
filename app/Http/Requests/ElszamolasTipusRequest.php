<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElszamolasTipusRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->user() && auth()->user()->role < 2; 
    }

    public function rules()
    {
        return [
            'elszamolas_elnevezese' => 'required|in:bevonás,max.alapfokú végzettségű,képzettséget szerzett',
        ];
    }

    public function messages()
    {
        return [
            'elszamolas_elnevezese.required' => 'Az elszámolás elnevezése kötelező.',
            'elszamolas_elnevezese.in' => 'Az elszámolás elnevezése csak az alábbi lehet: bevonás, max.alapfokú végzettségű, képzettséget szerzett.',
        ];
    }
}
