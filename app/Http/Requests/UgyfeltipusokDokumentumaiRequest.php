<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UgyfeltipusokDokumentumaiRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->user() && auth()->user()->role < 2; 
    }

    public function rules()
    {
        return [
            'ugyfel_tipus_id' => 'required|exists:ugyfel_tipuses,ugyfel_tipus_id',
            'dokumentum_tipus_id' => 'required|exists:dokumentum_tipuses,dokumentum_tipus_id',
        ];
    }

    public function messages()
    {
        return [
            'ugyfel_tipus_id.required' => 'Az ügyféltípus megadása kötelező.',
            'ugyfel_tipus_id.exists' => 'A megadott ügyféltípus nem létezik.',
            'dokumentum_tipus_id.required' => 'A dokumentumtípus megadása kötelező.',
            'dokumentum_tipus_id.exists' => 'A megadott dokumentumtípus nem létezik.',
        ];
    }
}
