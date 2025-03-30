<?php

namespace App\Http\Controllers;

use App\Models\UgyfelTipus;
use App\Http\Requests\UgyfelTipusRequest;
use Illuminate\Http\Request;

class UgyfelTipusController extends Controller
{
    public function store(UgyfelTipusRequest $request)
    {
     
        $ugyfelTipus = UgyfelTipus::create($request->validated());
        
        return response()->json($ugyfelTipus, 201); 
    }

    public function update(UgyfelTipusRequest $request, $id)
    {
        $ugyfelTipus = UgyfelTipus::findOrFail($id);
        $ugyfelTipus->update($request->validated());
        
        return response()->json($ugyfelTipus);
    }
}
