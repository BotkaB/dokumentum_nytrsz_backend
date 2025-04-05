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

        $ugyfelTipus = UgyfelTipus::create([
            'elnevezes' => $data['elnevezes'],
            'ugyfel_fotipus' => $data['ugyfel_fotipus'] ?? null,
        ]);

        return new UgyfelTipusResource($ugyfelTipus->load('parent'));
    }

    public function update(UgyfelTipusRequest $request, $id)
    {
        $data = $request->validated();

        $ugyfelTipus = UgyfelTipus::findOrFail($id);
        $ugyfelTipus->update([
            'elnevezes' => $data['elnevezes'],
            'ugyfel_fotipus' => $data['ugyfel_fotipus'] ?? null,
        ]);

        return new UgyfelTipusResource($ugyfelTipus->load('parent'));
    }
}
