<?php

namespace App\Http\Controllers;

use App\Models\ElszamolasTipus;
use App\Http\Requests\ElszamolasTipusRequest;
use Illuminate\Http\Request;

class ElszamolasTipusController extends Controller
{
    // Összes elszámolás típus listázása
    public function index()
    {
        return response()->json(ElszamolasTipus::all());
    }

    // Egy konkrét elszámolás típus lekérdezése
    public function show($id)
    {
        $tipus = ElszamolasTipus::findOrFail($id);
        return response()->json($tipus);
    }

    public function store(ElszamolasTipusRequest $request)
    {
        $data = $request->validated();
    
        // Új ElszamolasTipus rekord létrehozása
        $elszamolasTipus = ElszamolasTipus::create([
            'elszamolas_elnevezese' => $data['elszamolas_elnevezese'],
        ]);
    
        return response()->json([
            'message' => 'Új elszámolás típus sikeresen létrehozva.',
            'data' => $elszamolasTipus,
        ], 201);
    }
    
    public function update(ElszamolasTipusRequest $request, $id)
    {
        $data = $request->validated();
    
        // Meglévő ElszamolasTipus rekord keresése
        $elszamolasTipus = ElszamolasTipus::findOrFail($id);
    
        // Rekord frissítése
        $elszamolasTipus->update([
            'elszamolas_elnevezese' => $data['elszamolas_elnevezese'],
        ]);
    
        return response()->json([
            'message' => 'Elszámolás típus sikeresen frissítve.',
            'data' => $elszamolasTipus,
        ]);
    }
}   
