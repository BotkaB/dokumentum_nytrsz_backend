<?php

namespace App\Http\Controllers;

use App\Models\MegvalositasiHelyszin;
use App\Http\Requests\MegvalositasiHelyszinRequest;
use App\Http\Resources\MegvalositasiHelyszinResource;
use Illuminate\Http\Request;

class MegvalositasiHelyszinController extends Controller
{
    public function index()
    {
        try {
            $helyszinek = MegvalositasiHelyszin::with('parent')->get();

            if ($helyszinek->isEmpty()) {
                return response()->json(['message' => 'Nincs elérhető adat.'], 404);
            }

            return MegvalositasiHelyszinResource::collection($helyszinek);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function store(MegvalositasiHelyszinRequest $request)
    {
        $data = $request->validated();
    
        // Ha megadtak egy intézetet szövegesen
        if (!empty($data['intezet'])) {
            $intezet = MegvalositasiHelyszin::where('megvalositasi_helyszin_id', $data['intezet'])
                                            ->whereNull('intezet') // Csak valódi fő intézet lehet
                                            ->first();
    
            // Ha nincs ilyen intézet, hiba
            if (!$intezet) {
                return response()->json([
                    'errors' =>[
                    'intezet' =>['A megadott intézet nem létezik.']
                    ]
                ], 422);
            }
    
            $data['intezet'] = $intezet->megvalositasi_helyszin_id;
        }
    
        // MegvalositasiHelyszin létrehozása
        $helyszin = MegvalositasiHelyszin::create([
            'nev' => $data['nev'],
            'intezet' => $data['intezet'] ?? null,
            'agglomeracio' => $data['agglomeracio'] ?? null,
            'regio' => $data['regio'] ?? null,
            'tipus' => $data['tipus'] ?? null,
        ]);
    
        // Válasz: Megvalósítási helyszín adatainak visszaadása
        return (new MegvalositasiHelyszinResource($helyszin->load('parent')))
            ->response()
            ->setStatusCode(201);
    }
    

    public function update(MegvalositasiHelyszinRequest $request, $id)
    {
        $data = $request->validated();
    
        // MegvalositasiHelyszin megtalálása
        $helyszin = MegvalositasiHelyszin::findOrFail($id);
    
        // Ha megadtak egy intézetet szövegesen
        if (!empty($data['intezet'])) {
            $intezet = MegvalositasiHelyszin::where('megvalositasi_helyszin_id', $data['intezet'])
                                            ->whereNull('intezet') // Csak valódi fő intézet lehet
                                            ->first();
    
            // Ha nincs ilyen intézet, hiba
            if (!$intezet) {
                return response()->json([
                    'errors' =>[
                    'intezet' =>['A megadott intézet nem létezik.']
                    ]
                ], 422);
            }
    
            $data['intezet'] = $intezet->megvalositasi_helyszin_id;
        }
    
        // MegvalositasiHelyszin adatainak frissítése
        $helyszin->update([
            'nev' => $data['nev'],
            'intezet' => $data['intezet'] ?? null,
            'agglomeracio' => $data['agglomeracio'] ?? null,
            'regio' => $data['regio'] ?? null,
            'tipus' => $data['tipus'] ?? null,
        ]);
    
        return new MegvalositasiHelyszinResource($helyszin->load('parent'));
    }
    
}

