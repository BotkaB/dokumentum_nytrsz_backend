<?php

namespace App\Http\Controllers;

use App\Models\Dokumentumok;
use App\Http\Requests\DokumentumokRequest;  
use Illuminate\Http\Request;

class DokumentumokController extends Controller
{
    
    public function store(DokumentumokRequest $request)
    {

        $dokumentum = Dokumentumok::create($request->validated());

        return response()->json($dokumentum, 201); 
    } 

    public function index()
    {
        $dokumentumok = Dokumentumok::all(); 
        return response()->json($dokumentumok);
    }

  
    public function show($id)
    {
        $dokumentum = Dokumentumok::find($id);

        if (!$dokumentum) {
            return response()->json(['message' => 'Dokumentum nem található'], 404);
        }

        return response()->json($dokumentum);
    }

  
    public function update(DokumentumokRequest $request, $id)
    {
        $dokumentum = Dokumentumok::find($id);

        if (!$dokumentum) {
            return response()->json(['message' => 'Dokumentum nem található'], 404);
        }

    
        $dokumentum->update($request->validated());

        return response()->json($dokumentum);
    }
}
