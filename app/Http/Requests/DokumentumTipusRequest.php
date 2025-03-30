<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DokumentumTipusRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user() && auth()->user()->role < 2;  
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'elszamolas_tipus_id' => 'required|exists:elszamolas_tipuses,elszamolas_tipus_id', // Ellenőrizzük, hogy az elszamolas_tipus_id létezik a megfelelő táblában
            'dokumentum_neve' => 'required|string|max:255|unique:dokumentum_tipusok,dokumentum_neve', // Egyedi dokumentum név a táblában
        ];
    }

    /**
     * Get the custom validation messages.
     */
    public function messages()
    {
        return [
            'elszamolas_tipus_id.required' => 'Az elszámolás típus azonosítója kötelező.',
            'elszamolas_tipus_id.exists' => 'Az elszámolás típus azonosítója érvénytelen.',
            'dokumentum_neve.required' => 'A dokumentum neve kötelező.',
            'dokumentum_neve.string' => 'A dokumentum neve érvényes szöveges érték kell legyen.',
            'dokumentum_neve.max' => 'A dokumentum neve nem haladhatja meg a 255 karaktert.',
            'dokumentum_neve.unique' => 'Ez a dokumentum név már létezik az adatbázisban.',
        ];
    }
}
