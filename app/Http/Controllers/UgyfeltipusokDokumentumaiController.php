<?php

namespace App\Http\Controllers;

use App\Models\UgyfeltipusokDokumentumai;
use Illuminate\Http\Request;
use App\Http\Requests\UgyfeltipusokDokumentumaiRequest; 

class UgyfeltipusokDokumentumaiController extends Controller
{

    public function index()
    {
        return response()->json(UgyfeltipusokDokumentumai::all());
    }

   
    public function show($id)
    {
        $kapcsolat = UgyfeltipusokDokumentumai::findOrFail($id);
        return response()->json($kapcsolat);
    }

    public function store(UgyfeltipusokDokumentumaiRequest $request)
    {
        $kapcsolat = UgyfeltipusokDokumentumai::create($request->validated());
        return response()->json($kapcsolat, 201);
    }

 
    public function update(UgyfeltipusokDokumentumaiRequest $request, $id)
    {
        $kapcsolat = UgyfeltipusokDokumentumai::findOrFail($id);
        $kapcsolat->update($request->validated());
        return response()->json($kapcsolat);
    }

   
}
