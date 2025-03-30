<?php

namespace App\Http\Controllers;

use App\Models\Ugyfel;
use Illuminate\Http\Request;

class UgyfelController extends Controller
{
    public function index()
    {
        $ugyfelek = response()->json(Ugyfel::all());
        return $ugyfelek;
    }

    public function show($id)
    {
        $ugyfel = response()->json(Ugyfel::find($id));
        return $ugyfel;
    }

    public function update(Request $request, $id)
    {
        $ugyfel = Ugyfel::find($id);
        if ($ugyfel) {
            $ugyfel->update($request->all());
            return response()->json($ugyfel);
        } else {
            return response()->json(['message' => 'Ugyfel nem talaltato'], 404);
        }
    }
}
