<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    // Bejelentkezett felhasználó adatainak lekérdezése
    public function getUser(Request $request)
    {
        // A bejelentkezett felhasználó adatai
        return response()->json([
            'id'=> $request->user()->id,
            'name' => $request->user()->name,
            'email' => $request->user()->email,
            'role' => $request->user()->role,  
        ]);
    }

    public function updateUser(Request $request, $id)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $felhasznalo = User::find($id);
        $felhasznalo->name = $request->name;
        $felhasznalo->email = $request->email;
        $felhasznalo->password = Hash::make($request->password);
        $felhasznalo->role = $request->role;

        $felhasznalo->save();
    }

    public function index()
    {
        $users = response()->json(User::all());
        return $users;
    }

    public function show($id)
    {
        $user = response()->json(User::find($id));
        return $user;
    }
   
}

