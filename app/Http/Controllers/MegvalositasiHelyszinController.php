<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MegvalositasiHelyszin;

class MegvalositasiHelyszinController extends Controller
{
    
    public function store(Request $request) { 
        $validatedData = $request->validate([ 
            'intézet' => 'nullable|integer', 
            'név' => 'required|string|max:255',
            'agglomeráció' => 'nullable|integer', 
            'régió' => 'nullable|string|max:255', 
            'típus' => 'nullable|string|max:255', ]); 
            
        if ($request->input('intézet')) { 
            $validatedData['agglomeráció'] = null; 
            $validatedData['régió'] = null; 
            $validatedData['típus'] = null; 
        } 
        $megvalositasiHelyszin = MegvalositasiHelyszin::create($validatedData); 
        return response()->json($megvalositasiHelyszin, 201); }

        public function index(){
            return MegvalositasiHelyszin::all();
        }
}
