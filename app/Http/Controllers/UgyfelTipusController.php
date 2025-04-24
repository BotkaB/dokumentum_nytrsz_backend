<?php

namespace App\Http\Controllers;

use App\Models\UgyfelTipus;
use App\Http\Requests\UgyfelTipusRequest;
use App\Http\Resources\UgyfelTipusResource;

use Illuminate\Http\Request;

class UgyfelTipusController extends Controller
{
    public function index()
    {
        try {
            $ugyfeltipusok = UgyfelTipus::with('parent')->get();
    
            if ($ugyfeltipusok->isEmpty()) {
                return response()->json(['message' => 'Nincs elérhető adat.'], 404);
            }
    
            return UgyfelTipusResource::collection($ugyfeltipusok);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    

    public function store(UgyfelTipusRequest $request)
    {
        $data = $request->validated();
    
        $insertData = [
            'elnevezes' => $data['elnevezes'],
        ];
    
        // Ha megadtak egy főtípust szövegesen
        if (!empty($data['ugyfel_fotipus'])) {
            $szulo = UgyfelTipus::where('ugyfel_tipus_id', $data['ugyfel_fotipus'])
                                ->whereNull('ugyfel_fotipus') // Csak valódi főtípus lehet
                                ->first();
    
            // Ha nincs ilyen főtípus, hiba
            if (!$szulo) {
                return response()->json([
                    'errors' => [
                        'ugyfel_fotipus' => ['A megadott főtípus nem létezik.']
                    ]
                ], 422);
            }
    
            $insertData['ugyfel_fotipus'] = $szulo->ugyfel_tipus_id;
        }
    
        // Új rekord mentése
        $ujUgyfelTipus = UgyfelTipus::create($insertData);
    
        return new UgyfelTipusResource($ujUgyfelTipus->fresh('parent'));
    }
     
    
    public function update(UgyfelTipusRequest $request, $id)
    {
        $data = $request->validated();
    
        $ugyfelTipus = UgyfelTipus::findOrFail($id);
    
        // Alapadatok frissítése
        $updateData = [
            'elnevezes' => $data['elnevezes'],
        ];
    
        // Csak akkor módosítjuk a főtípust, ha küldtek be új értéket (akár null is lehet)
        if (array_key_exists('ugyfel_fotipus', $data)) {
            if (!empty($data['ugyfel_fotipus'])) {
                $szulo = UgyfelTipus::where('ugyfel_tipus_id', $data['ugyfel_fotipus'])
                                    ->whereNull('ugyfel_fotipus')
                                    ->first();
    
                if (!$szulo) {
                    return response()->json([
                        'errors' => [
                            'ugyfel_fotipus' => ['A megadott főtípus nem létezik.']
                        ]
                    ], 422);
                }
    
                $updateData['ugyfel_fotipus'] = $szulo->ugyfel_tipus_id;
            } else {
                $updateData['ugyfel_fotipus'] = null;
            }
        }
    
        $ugyfelTipus->update($updateData);
    
        return new UgyfelTipusResource($ugyfelTipus->fresh('parent'));
    }
    
}
