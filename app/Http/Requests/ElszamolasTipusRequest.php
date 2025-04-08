<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElszamolasTipusRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->user() && auth()->user()->role < 1; 
    }

    public function rules()
    {
        $rule = 'required|string|max:255|unique:elszamolas_tipuses,elszamolas_elnevezese'; // Az egyediség ellenőrzés
    
        // Ha PUT kérés (update), akkor figyelmen kívül hagyjuk az aktuális rekordot
        if ($this->isMethod('put')) {
            $rule = 'required|string|max:255|unique:elszamolas_tipuses,elszamolas_elnevezese,' . $this->route('id') . ',elszamolas_tipus_id';
        }
    
        return [
            'elszamolas_elnevezese' => $rule,
        ];
    }
    
    public function messages()
    {
        return [
            'elszamolas_elnevezese.required' => 'Az elszámolás elnevezése kötelező.',
           
        ];
    }
}
