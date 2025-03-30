<?php

namespace App\Http\Controllers;

use App\Models\Ugyfel;
use App\Http\Requests\UgyfelRequest; 
use Illuminate\Http\Request;

class UgyfelController extends Controller
{
    public function index()
    {
        $ugyfelek = Ugyfel::all();
        return response()->json($ugyfelek);
    }

    public function show($id)
    {
        $ugyfel = Ugyfel::find($id);

        if (!$ugyfel) {
            return response()->json(['message' => 'Ugyfel nem talaltato'], 404);
        }

        return response()->json($ugyfel);
    }

    public function update(UgyfelRequest $request, $id)
    {
       
        $ugyfel = Ugyfel::find($id);
        if (!$ugyfel) {
            return response()->json(['message' => 'Ugyfel nem talaltato'], 404);
        }

        $ugyfel->update($request->validated());  
        return response()->json($ugyfel);
    }

    public function store(UgyfelRequest $request)
    {
     
        $ugyfel = Ugyfel::create($request->validated());
        return response()->json($ugyfel, 201);
    }
}
