<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
        $felhasznalo = User::find($id);
        $felhasznalo->name = $request->name;
        $felhasznalo->email = $request->email;
        $felhasznalo->password = Hash::make($request->password);
        $felhasznalo->role = $request->role;

        $felhasznalo->save();
    }
   
}

