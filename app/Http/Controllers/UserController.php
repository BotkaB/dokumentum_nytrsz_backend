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
        return response()->json(Auth::user());
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
    public function updateSelf(Request $request)
    {
        // A validációban nem szerepel a role
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);
    
        $user = $request->user(); // A jelenlegi bejelentkezett felhasználó
        $user->name     = $request->name;
        $user->email    = $request->email;
        
        // Ha van új jelszó, frissítjük azt
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        // A szerepkör nem változik, mert azt nem küldjük el a kérésben
        // Tehát a szerepkör változatlan marad
    
        $user->save();
    
        return response()->json([
            'user' => $user
        ]);
    }

    public function updateByAdmin(Request $request, $id)
{
    
    $user = User::findOrFail($id); // Keresés ID alapján

    //Szuper admin szerepkör védelme
    if ($user->id === 1 && $request->has('role')) {
        return response()->json([
            'message' => 'A szuperadmin szerepkör nem módosítható.'
        ], 403);
    }

    // Az admin által végzett validáció
    $request->validate([
        'name'     => ['required', 'string', 'max:255'],
        'email'    => ['required', 'string', 'lowercase', 'email', 'max:255'],
        'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        'role'     => ['required', 'integer', 'between:0,3'], // A role is validálva lesz
    ]);

    $user->name     = $request->name;
    $user->email    = $request->email;
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }
    if ($user->id !== 1) {
        $user->role = $request->role;
    } // Az admin módosíthatja a szerepkört, de a szuper adminét nem
    $user->save();

    return response()->json([
        'user' => $user
    ]);
}

   
}
