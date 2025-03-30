<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UgyfelRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user() && auth()->user()->role < 2; 
    }

   
    public function rules()
{
    return [
        'nev' => 'required|string|max:255',
        'szuletesi_nev' => 'required|string|max:255',
        'anyja_neve' => 'required|string|max:255',
        'szuletesi_hely' => 'required|string|max:255',
        'szuletesi_ido' => 'required|date|after_or_equal:1900-01-01|before_or_equal:2025-01-01',
        'telepules' => 'required|string|max:255',
        'neme' => 'required|in:férfi,nő',
        'ugyfelkod' => 'required|integer',

        // Egyediségellenőrzés a 'szuletesi_nev', 'anyja_neve', 'szuletesi_hely', 'szuletesi_ido' mezők kombinációjára
        'szuletesi_nev' => [
            'required',
            'string',
            'max:255',
            function ($attribute, $value, $fail) {
                $exists = \App\Models\Ugyfel::where('szuletesi_nev', $value)
                    ->where('anyja_neve', $this->anyja_neve)
                    ->where('szuletesi_hely', $this->szuletesi_hely)
                    ->where('szuletesi_ido', $this->szuletesi_ido)
                    ->exists();

                if ($exists) {
                    $fail('Ez a születési név, anyja neve, születési hely és idő kombináció már létezik.');
                }
            },
        ],
    ];
}

    public function messages()
    {
        return [
            'nev.required' => 'A név mező kötelező.',
            'szuletesi_nev.required' => 'A születési név mező kötelező.',
            'anyja_neve.required' => 'Az anyja neve mező kötelező.',
            'szuletesi_hely.required' => 'A születési hely mező kötelező.',
            'szuletesi_ido.required' => 'A születési idő mező kötelező.',
            'szuletesi_ido.date' => 'A születési idő érvényes dátumnak kell lennie.',
            'telepules.required' => 'A település mező kötelező.',
            'neme.required' => 'A neme mező kötelező.',
            'ugyfelkod.required' => 'Az ügyfélkód mező kötelező.',
            'ugyfelkod.unique' => 'Ez az ügyfélkód már létezik.',
        ];
    }
}
