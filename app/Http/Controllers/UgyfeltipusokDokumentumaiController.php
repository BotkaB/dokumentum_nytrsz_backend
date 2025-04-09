<?php

namespace App\Http\Controllers;

use App\Models\UgyfeltipusokDokumentumai;
use Illuminate\Http\Request;
use App\Http\Requests\UgyfeltipusokDokumentumaiRequest;

class UgyfeltipusokDokumentumaiController extends Controller
{
    public function index()
    {
        return response()->json(
            UgyfeltipusokDokumentumai::with(['dokumentumTipus', 'ugyfelTipus'])->get()
        );
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
