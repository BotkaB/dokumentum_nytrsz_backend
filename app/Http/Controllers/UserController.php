<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rules;
use App\Http\Requests\UserRequest;

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
    public function store(UserRequest $request)
    {

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
public function updateSelf(UserRequest $request)
    {
       
        $user = $request->user(); // A jelenlegi bejelentkezett felhasználó
        $user->name     = $request->name;
        $user->email    = $request->email;
        
        // Ha van új jelszó, frissítjük azt
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        // A szerepkör nem változik, mert azt nem küldjük el a kérésben
        // Tehát a szerepkör változatlan marad
        $user->role = $user->role;
        $user->save();
    
        return response()->json([
            'user' => $user
        ]);
    }

    public function updateByAdmin(UserRequest $request, $id)
{
    
    $user = User::findOrFail($id); // Keresés ID alapján

    //Szuper admin szerepkör védelme
    if ($user->id === 1 && $request->has('role')) {
        return response()->json([
            'message' => 'A szuperadmin szerepkör nem módosítható.'
        ], 403);
    }


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
