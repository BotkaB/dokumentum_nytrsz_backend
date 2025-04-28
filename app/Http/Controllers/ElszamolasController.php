<?php

namespace App\Http\Controllers;

use App\Models\Elszamolas;
use App\Http\Requests\ElszamolasRequest; 
use Illuminate\Http\Request;

class ElszamolasController extends Controller
{
   
    public function createElszamolas(ElszamolasRequest $request)
    {
       

        $elszamolas = Elszamolas::create([
            'megvalositashelyszin_azon' => $request->input('megvalositashelyszin_azon'),
            'ugyfel_id' => $request->input('ugyfel_id'),
            'elszamolas_tipus_id' => $request->input('elszamolas_tipus_id'),
            'ugyfel_tipus_id' => $request->input('ugyfel_tipus_id'),
            'bevonas_datum' => $request->input('bevonas_datum'),
            'elszamolhatosag_allapota' => $request->input('elszamolhatosag_allapota'),
            'elszamolhatosag_datum' => $request->input('elszamolhatosag_datum'),
            'elszamolas_datum' => $request->input('elszamolas_datum')
        ]);

        return response()->json($elszamolas, 201); 
    }


    public function index()
    {
        $elszamolasok = Elszamolas::all();  
        return response()->json($elszamolasok);
    }

    public function show($id)
    {
        $elszamolas = Elszamolas::find($id);

        if (!$elszamolas) {
            return response()->json(['message' => 'Elszámolás nem található'], 404);
        }

        return response()->json($elszamolas);
    }

    
    public function update(ElszamolasRequest $request, $id)
    {
        $elszamolas = Elszamolas::find($id);

        if (!$elszamolas) {
            return response()->json(['message' => 'Elszámolás nem található'], 404);
        }

        
        $elszamolas->update($request->validated());

        return response()->json($elszamolas);
    }
}

