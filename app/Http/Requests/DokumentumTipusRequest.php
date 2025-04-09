<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DokumentumTipusRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user() && auth()->user()->role < 1;  
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        $dokumentumId = $this->route('id'); 
        return [
            'elszamolas_tipus_id' => 'required|exists:elszamolas_tipuses,elszamolas_tipus_id', 
            'dokumentum_neve' => 'required|string|max:255|unique:dokumentum_tipusok,dokumentum_neve,' .$dokumentumId.'dokumentum_tipus_id',
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
