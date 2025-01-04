<?php

namespace App\Http\Controllers;

use App\Models\Elszamolas;
use App\Models\UgyfelTipus;
use Illuminate\Http\Request;

class ElszamolasokController extends Controller
{
    public function createElszamolas(Request $request)
    {
        $ugyfelTipus = UgyfelTipus::find($request->input('ugyfeltipus_azon'));
      

        $elszamolas = Elszamolas::create([
            'megvalositashelyszin_azon' => $request->input('megvalositashelyszin_azon'),
            'ugyfel_belsokod' => $request->input('ugyfel_belsokod'),
            'ugyfeltipus_azon' => $request->input('ugyfeltipus_azon'),
            'bevonas_datum' => $request->input('bevonas_datum'),
            'kotelezo_dokumentumok_szama' => 0,
            'opcionalis_dokumentumok_szama' => 0,
            'elszamolhatosag_allapota' => 'false',
            'elszamolhatosag_datum' => null,
            'elszamolas_datum' => null
        ]);

        return response()->json($elszamolas);
    }
}
