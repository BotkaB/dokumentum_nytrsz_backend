<?php

namespace App\Http\Controllers;

use App\Models\UgyfeltipusokDokumentumai;
use Illuminate\Http\Request;
use App\Http\Requests\UgyfeltipusokDokumentumaiRequest;

class UgyfeltipusokDokumentumaiController extends Controller
{
    public function index()
    {
        // Lekérjük a kapcsolódó modelleket a megfelelő adatokkal
        $kapcsolatok = UgyfeltipusokDokumentumai::with(['dokumentumTipus', 'ugyfelTipus'])
            ->get()
            ->map(function ($kapcsolat) {
                return [
                    'id' => $kapcsolat->id,
                    'ugyfel_tipus_id' => $kapcsolat->ugyfelTipus->ugyfel_tipus_id,
                    'elnevezes' => $kapcsolat->ugyfelTipus->elnevezes, // A típus neve
                    'dokumentum_tipus_id' => $kapcsolat->dokumentumTipus->dokumentum_tipus_id,
                    'dokumentum_neve' => $kapcsolat->dokumentumTipus->dokumentum_neve, // A dokumentum neve
                    'created_at' => $kapcsolat->created_at,
                    'updated_at' => $kapcsolat->updated_at,
                ];
            });

        return response()->json($kapcsolatok);
    }

    public function show($id)
    {
        $kapcsolat = UgyfeltipusokDokumentumai::with(['dokumentumTipus', 'ugyfelTipus'])->find($id);

        if (!$kapcsolat) {
            return response()->json(['message' => 'Kapcsolat nem található'], 404);
        }

        return response()->json($kapcsolat);
    }

    public function store(UgyfeltipusokDokumentumaiRequest $request)
    {
        $kapcsolat = UgyfeltipusokDokumentumai::create($request->validated());
        return response()->json(
            $kapcsolat->load(['dokumentumTipus', 'ugyfelTipus']),
            201
        );
    }

    public function update(UgyfeltipusokDokumentumaiRequest $request, $id)
    {
        $kapcsolat = UgyfeltipusokDokumentumai::find($id);

        if (!$kapcsolat) {
            return response()->json(['message' => 'Kapcsolat nem található'], 404);
        }

        $kapcsolat->update($request->validated());

        return response()->json(
            $kapcsolat->load(['dokumentumTipus', 'ugyfelTipus'])
        );
    }
}
