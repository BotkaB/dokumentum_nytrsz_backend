<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DokumentumokRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Alapértelmezetten engedélyezve van
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'megvalositasi_helyszin_id' => 'required|exists:megvalositasi_helyszins,megvalositasi_helyszin_id',
            'elszamolas_id' => 'required|exists:elszamolas,elszamolas_id',
            'dokumentum_tipus_id' => 'required|exists:dokumentum_tipuses,dokumentum_tipus_id',
            'eleresi_ut' => 'required|string|max:255',
            'kitoltes_datuma' => 'required|date|after_or_equal:2024-09-15|before_or_equal:2045-01-01',
            'feltoltes_idopontja' => 'required|date',
            'ellenorzes_statusza' => 'required|in:nincs ellenőrizve,hiánypótlás,elfogadva',
            'ellenorzes_datuma' => 'nullable|date|after_or_equal:2024-09-15|before_or_equal:2045-01-01',
            'rogzites_datuma' => 'nullable|date|after_or_equal:2024-09-15|before_or_equal:2045-01-01',
            'ESZA+_azonosito' => 'nullable|string|max:255',
        ];
    }

    /**
     * Get the custom validation messages.
     */
    public function messages()
    {
        return [
            'megvalositasi_helyszin_id.required' => 'A megvalósítási helyszín azonosítója kötelező.',
            'elszamolas_id.required' => 'Az elszámolás azonosítója kötelező.',
            'dokumentum_tipus_id.required' => 'A dokumentum típus azonosítója kötelező.',
            'eleresi_ut.required' => 'Az elérési út mező kötelező.',
            'kitoltes_datuma.required' => 'A kitöltés dátuma kötelező.',
            'kitoltes_datuma.date' => 'A kitöltés dátuma érvényes dátumnak kell lennie.',
            'kitoltes_datuma.after_or_equal' => 'A kitöltés dátuma nem lehet korábbi, mint 2024-09-15.',
            'kitoltes_datuma.before_or_equal' => 'A kitöltés dátuma nem lehet későbbi, mint 2045-01-01.',
            'feltoltes_idopontja.required' => 'A feltöltés időpontja kötelező.',
            'feltoltes_idopontja.date' => 'A feltöltés időpontja érvényes dátumnak kell lennie.',
            'ellenorzes_statusza.required' => 'Az ellenőrzés státusza kötelező.',
            'ellenorzes_statusza.in' => 'Az ellenőrzés státusza csak a következő értékeket vehet fel: nincs ellenőrizve, hiánypótlás, elfogadva.',
            'ellenorzes_datuma.date' => 'Az ellenőrzés dátuma érvényes dátumnak kell lennie.',
            'ellenorzes_datuma.after_or_equal' => 'Az ellenőrzés dátuma nem lehet korábbi, mint 2024-09-15.',
            'ellenorzes_datuma.before_or_equal' => 'Az ellenőrzés dátuma nem lehet későbbi, mint 2045-01-01.',
            'rogzites_datuma.date' => 'A rögzítés dátuma érvényes dátumnak kell lennie.',
            'rogzites_datuma.after_or_equal' => 'A rögzítés dátuma nem lehet korábbi, mint 2024-09-15.',
            'rogzites_datuma.before_or_equal' => 'A rögzítés dátuma nem lehet későbbi, mint 2045-01-01.',
            'ESZA+_azonosito.string' => 'Az ESZA+ azonosítónak szöveges típusúnak kell lennie.',
            'ESZA+_azonosito.max' => 'Az ESZA+ azonosító hossza nem haladhatja meg a 255 karaktert.',
        ];
    }
}
