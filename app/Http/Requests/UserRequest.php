<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Log;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->user() && auth()->user()->role < 3; 
    }

    public function rules(): array
    {
        Log::info('Aktuális user ID:', ['id' => auth()->id()]);
        Log::info('Kérés email mezője:', ['email' => $this->input('email')]);
        Log::info('Ignore ID a szabályban:', ['id' => $this->user()->id]);

        $rules = [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ];

        // Ha új felhasználót hozunk létre, jelszó kötelező, és email egyedi
        if ($this->isMethod('post') && !$this->routeIs('user.updateSelf')) {
            $rules['password'][0] = 'required'; // nullable → required
            $rules['email'][] = 'unique:users,email';
            $rules['role'] = ['required', 'integer', 'between:0,3'];
        }

        if ($this->routeIs('users.updateByAdmin')) {
            $rules['email'][] = 'unique:users,email,' . $this->route('id'); // <- hozzáadva
            $rules['role'] = ['required', 'integer', 'between:0,3'];
        }
    
        // Felhasználó saját profilját módosítja
        if ($this->routeIs('user.updateSelf')) {
            $rules['email'][] = Rule::unique('users', 'email')->ignore($this->user()->id, 'id');
        }
        

        return $rules;
    }

    public function messages()
{
    return [
        'name.required'     => 'A név megadása kötelező.',
        'name.string'       => 'A név szöveg típusú kell legyen.',
        'name.max'          => 'A név legfeljebb 255 karakter lehet.',

        'email.required'    => 'Az email megadása kötelező.',
        'email.string'      => 'Az email szöveg típusú kell legyen.',
        'email.lowercase'   => 'Az email csak kisbetűs lehet.',
        'email.email'       => 'Az email formátuma érvénytelen.',
        'email.max'         => 'Az email legfeljebb 255 karakter lehet.',
        'email.unique'      => 'Ez az email cím már használatban van.',

        'password.required' => 'A jelszó megadása kötelező.',
        'password.confirmed'=> 'A jelszónak meg kell egyeznie a megerősítéssel.',
        'password.min'      => 'A jelszónak legalább minimum 8 karakter hosszúnak kell lennie.',

        'role.required'     => 'A szerepkör megadása kötelező.',
        'role.integer'      => 'A szerepkör csak egész szám lehet.',
        'role.between'      => 'A szerepkör csak 0 és 3 közötti szám lehet.',
    ];
}

}
