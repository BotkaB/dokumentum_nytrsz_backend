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

    // Új elszámolás típus létrehozása
    public function store(ElszamolasTipusRequest $request)
    {
        $tipus = ElszamolasTipus::create($request->validated());
        return response()->json($tipus, 201);
    }

    // Elszámolás típus frissítése
    public function update(ElszamolasTipusRequest $request, $id)
    {
        $tipus = ElszamolasTipus::findOrFail($id);
        $tipus->update($request->validated());
        return response()->json($tipus);
    }

    // Elszámolás típus törlése
    public function destroy($id)
    {
        ElszamolasTipus::destroy($id);
        return response()->json(['message' => 'Elszámolás típus törölve.']);
    }
}
