<?php



namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Elszamolas;

class ElszamolasRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->user() && auth()->user()->role < 2;  
    }

    public function rules()
    {
        return [
            'megvalositashelyszin_azon' => 'required|exists:megvalositasi_helyszins,megvalositasi_helyszin_id',  
            'ugyfel_id' => 'required|exists:ugyfels,ugyfel_id',  
            'elszamolas_tipus_id' => 'required|exists:elszamolas_tipuses,elszamolas_tipus_id',  
            'ugyfel_tipus_id' => 'required|exists:ugyfel_tipuses,ugyfel_tipus_id',  
            'bevonas_datum' => 'required|date|after_or_equal:2024-09-15|before_or_equal:2045-01-01',  
            'elszamolhatosag_allapota' => 'required|in:nem elszámolható,korábban elszámolt,elszámolható',  
            'elszamolhatosag_datum' => 'nullable|date|after_or_equal:2024-09-15|before_or_equal:2045-01-01',  
            'elszamolas_datum' => 'nullable|date|after_or_equal:2024-09-15|before_or_equal:2045-01-01', 
        ];
    }

    public function messages()
    {
        return [
            'megvalositashelyszin_azon.required' => 'A megvalósítási helyszín azonosító kötelező.',
            'megvalositashelyszin_azon.exists' => 'A megadott megvalósítási helyszín nem található.',
            'ugyfel_id.required' => 'Az ügyfél azonosító kötelező.',
            'ugyfel_id.exists' => 'Az ügyfél nem található.',
            'elszamolas_tipus_id.required' => 'Az elszámolás típus azonosító kötelező.',
            'elszamolas_tipus_id.exists' => 'Az elszámolás típus nem található.',
            'ugyfel_tipus_id.required' => 'Az ügyféltípus azonosító kötelező.',
            'ugyfel_tipus_id.exists' => 'Az ügyféltípus nem található.',
            'bevonas_datum.required' => 'A bevonás dátuma kötelező.',
            'bevonas_datum.date' => 'A bevonás dátuma érvényes dátumnak kell lennie.',
            'bevonas_datum.after_or_equal' => 'A bevonás dátuma 2024-09-15 után kell legyen.',
            'bevonas_datum.before_or_equal' => 'A bevonás dátuma nem lehet később, mint 2045-01-01.',
            'elszamolhatosag_allapota.required' => 'Az elszámolhatóság állapota kötelező.',
            'elszamolhatosag_allapota.in' => 'Az elszámolhatóság állapota nem megfelelő.',
            'elszamolhatosag_datum.date' => 'Az elszámolhatóság dátuma érvényes dátumnak kell lennie.',
            'elszamolhatosag_datum.after_or_equal' => 'Az elszámolhatóság dátuma 2024-09-15 után kell legyen.',
            'elszamolhatosag_datum.before_or_equal' => 'Az elszámolhatóság dátuma nem lehet később, mint 2045-01-01.',
            'elszamolas_datum.date' => 'Az elszámolás dátuma érvényes dátumnak kell lennie.',
            'elszamolas_datum.after_or_equal' => 'Az elszámolás dátuma 2024-09-15 után kell legyen.',
            'elszamolas_datum.before_or_equal' => 'Az elszámolás dátuma nem lehet később, mint 2045-01-01.',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $ugyfel_id = $this->input('ugyfel_id');
            $elszamolhatosag_allapota = $this->input('elszamolhatosag_allapota');
            $elszamolas_tipus_id = $this->input('elszamolas_tipus_id');
            
            // Ha az új elszámolás 'elszámolható', akkor ellenőrizzük, hogy az ügyfélnek van-e már 'bevonás' típusú elszámolása, amely 'elszámolható' állapotú.
            if ($elszamolhatosag_allapota === 'elszámolható') {
                $existingElszamolas = Elszamolas::where('ugyfel_id', $ugyfel_id)
                    ->whereHas('elszamolasTipus', function ($query) {
                        $query->where('elnevezes', 'bevonás');
                    })
                    ->where('elszamolhatosag_allapota', 'elszámolható')
                    ->exists();

                // Ha nincs ilyen rekord, hibaüzenetet adunk hozzá a validációhoz
                if (!$existingElszamolas) {
                    $validator->errors()->add('elszamolhatosag_allapota', 'Az ügyfélnek először egy "bevonás" típusú, "elszámolható" állapotú elszámolás szükséges.');
                }
            }
        });
    }
}
