<?php

namespace App\Http\Controllers;

use App\Models\DokumentumTipus; 
use App\Http\Requests\DokumentumTipusRequest; 

class DokumentumTipusController extends Controller
{

  
    public function index()
    {
        
        $dokumentumTipusok = DokumentumTipus::with(['elszamolasTipus', 'ugyfelTipusok'])->get();

        return response()->json($dokumentumTipusok);
    }

    
  
    public function store(DokumentumTipusRequest $request)
    {
        $dokumentumTipus = DokumentumTipus::create($request->validated());

        
        return response()->json($dokumentumTipus->load(['elszamolasTipus', 'ugyfelTipusok']), 201);
    }

    public function show($id)
    {
        $dokumentumTipus = DokumentumTipus::with(['elszamolasTipus', 'ugyfelTipusok'])->find($id);

        if (!$dokumentumTipus) {
            return response()->json(['message' => 'Dokumentum típus nem található'], 404);
        }

        return response()->json($dokumentumTipus);
    }

  
    public function update(DokumentumTipusRequest $request, $id)
    {
        $dokumentumTipus = DokumentumTipus::find($id);

     
        if (!$dokumentumTipus) {
            return response()->json(['message' => 'Dokumentum típus nem található'], 404);
        }

     
        $dokumentumTipus->update($request->validated());

        return response()->json($dokumentumTipus->load(['elszamolasTipus', 'ugyfelTipusok']));
    }
}
