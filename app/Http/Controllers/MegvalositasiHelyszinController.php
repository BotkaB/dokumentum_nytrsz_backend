<?php

namespace App\Http\Controllers;

use App\Models\MegvalositasiHelyszin;
use App\Http\Requests\MegvalositasiHelyszinRequest;
use Illuminate\Http\Request;

class MegvalositasiHelyszinController extends Controller
{
  
    public function index()
    {
        return response()->json(MegvalositasiHelyszin::all());
    }

  
    public function show($id)
    {
        $helyszin = MegvalositasiHelyszin::findOrFail($id);
        return response()->json($helyszin);
    }

    
    public function store(MegvalositasiHelyszinRequest $request)
    {
        $helyszin = MegvalositasiHelyszin::create($request->validated());
        return response()->json($helyszin, 201);
    }

    
    public function update(MegvalositasiHelyszinRequest $request, $id)
    {
        $helyszin = MegvalositasiHelyszin::findOrFail($id);
        $helyszin->update($request->validated());
        return response()->json($helyszin);
    }

   
}
