<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    // Bejelentkezett felhasznalo adatainak lekerdezese
    public function getUser(Request $request)
    {
        return response()->json([
            'id'    => $request->user()->id,
            'name'  => $request->user()->name,
            'email' => $request->user()->email,
            'role'  => $request->user()->role,
        ]);
    }

    // osszes felhasznalo lekerdezese
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    // Egy felhasznalo lekerdezese az ID alapjan
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    // uj felhasznalo letrehozasa
    public function store(Request $request)
    {
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role'     => ['required', 'integer', 'between:0,3'],
        ]);

        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->role     = $request->role;
        $user->save();

        return response()->json([
            'user' => $user
        ], 201);
    }

    // Meglevo felhasznalo modositasa
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'role'     => ['required', 'string'],
        ]);

        $user = User::findOrFail($id);
        $user->name     = $request->name;
        $user->email    = $request->email;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->role     = $request->role;
        $user->save();

        return response()->json([
            'user' => $user
        ]);
    }

    // Felhasznalo logikai torlese az ID alapjan
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        // A felhasznalo role erteket 3-ra allitjuk a logikai torleshez
        $user->role = 3;
        $user->save();

        return response()->json([
            'message' => 'Felhasznalo logikai torlese megvalosult. Jogosultsagi szintje: 4.'
        ]);
    }
}
