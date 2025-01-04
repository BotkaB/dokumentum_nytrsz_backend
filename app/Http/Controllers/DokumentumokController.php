<?php

namespace App\Http\Controllers;

use App\Models\Dokumentumok;
use Illuminate\Http\Request;

class DokumentumokController extends Controller
{
    public function index()
    {
        $dokumentumok = response()->json(Dokumentumok::all());
        return $dokumentumok;
    }

    public function show($id)
    {
        $dokumentum = response()->json(Dokumentumok::find($id));
        return $dokumentum;
    }
}
