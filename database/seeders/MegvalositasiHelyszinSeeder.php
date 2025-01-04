<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class MegvalositasiHelyszinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
        'név' => 'Állampusztai Országos Büntetés-végrehajtási Intézet', 
        'agglomeráció'=>3,
        'régió' => 'konvergencia', 
        'típus' => 'bv', 
     ]);
     DB::table('megvalositasi_helyszins')->insert([ 
       'intézet'=>1,
        'név' => 'Állampuszta', 
        'agglomeráció'=>null,
        'régió' => null, 
        'típus' => null, 
     ]);
     DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>1,
         'név' => 'Solt', 
         'agglomeráció'=>null,
         'régió' => null, 
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Bács-Kiskun Vármegyei Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>3,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>4,
         'név' => 'Wéber Ede', 
         'agglomeráció'=>null,
         'régió' => null, 
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>4,
         'név' => 'Mátyási', 
         'agglomeráció'=>null,
         'régió' => null, 
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Balassagyarmati Fegyház és Börtön', 
         'agglomeráció'=>4,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Baranya Vármegyei Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>2,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Békés Vármegyei Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>3,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Borsod-Abaúj Zemplén Vármegyei Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>5,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>10,
         'név' => 'Megyei', 
         'agglomeráció'=>null,
         'régió' => null, 
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>10,
         'név' => 'Szirmabesenyő', 
         'agglomeráció'=>null,
         'régió' => null, 
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Budapesti Fegyház és Börtön', 
         'agglomeráció'=>2,
         'régió' => 'Budapest', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Fiatalkorúak Büntetés-végrehajtási Intézete', 
         'agglomeráció'=>2,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Fővárosi Büntetés-végrehajtási Intézete', 
         'agglomeráció'=>4,
         'régió' => 'Budapest', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>15,
         'név' => 'I. objektum', 
         'agglomeráció'=>null,
         'régió' => null,
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>15,
         'név' => 'II. objektum', 
         'agglomeráció'=>null,
         'régió' => null,
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>15,
         'név' => 'III. objektum', 
         'agglomeráció'=>null,
         'régió' => null,
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Győr-Moson-Sopron Vármegyei Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>1,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Hajdú-Bihar Vármegyei Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>5,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Heves Vármegyei Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>4,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Igazságügyi Megfigyelő és Elmegyógyító Intézet', 
         'agglomeráció'=>5,
         'régió' => 'Budapest', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Jász-Nagykun-Szolnok Vármegyei Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>5,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Kalocsai Fegyház és Börtön', 
         'agglomeráció'=>3,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Kiskunhalasi Országos Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>3,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Közép-Dunántúli Országos Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>2,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>26,
         'név' => 'Baracska', 
         'agglomeráció'=>null,
         'régió' => null, 
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>26,
         'név' => 'Martonvárás', 
         'agglomeráció'=>null,
         'régió' => null, 
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>26,
         'név' => 'Székesfehérvár', 
         'agglomeráció'=>null,
         'régió' => null, 
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Márianosztrai Fegyház és Börtön', 
         'agglomeráció'=>4,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Pálhalmai Országos Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>2,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>31,
         'név' => 'Mélykút', 
         'agglomeráció'=>null,
         'régió' => null, 
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>31,
         'név' => 'Bernátkút', 
         'agglomeráció'=>null,
         'régió' => null, 
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>31,
         'név' => 'Sándorháza', 
         'agglomeráció'=>null,
         'régió' => null, 
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Sátoraljaújhelyi Fegyház és Börtön', 
         'agglomeráció'=>5,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Somogy Vármegyei Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>2,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Sopronkőhidai Fegyház és Börtön', 
         'agglomeráció'=>1,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Szabolcs-Szatmár-Bereg Vármegyei Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>5,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Szegedi Fegyház és Börtön', 
         'agglomeráció'=>3,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>39,
         'név' => 'I. objektum', 
         'agglomeráció'=>null,
         'régió' => null, 
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>39,
         'név' => 'II. objektum', 
         'agglomeráció'=>null,
         'régió' => null, 
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>39,
         'név' => 'III. objektum', 
         'agglomeráció'=>null,
         'régió' => null, 
         'típus' => null, 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Szombathelyi Országos Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>1,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Tiszalöki Országos Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>5,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Tököli Országos Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>2,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Tolna Vármegyei Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>2,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Váci Fegyház és Börtön', 
         'agglomeráció'=>4,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Veszprém Vármegyei Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>1,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
        'intézet'=>null,
         'név' => 'Zala Vármegyei Büntetés-végrehajtási Intézet', 
         'agglomeráció'=>1,
         'régió' => 'konvergencia', 
         'típus' => 'bv', 
      ]);
      DB::table('megvalositasi_helyszins')->insert([ 
         'intézet'=>null,
          'név' => 'Jász-Nagykun-Szolnok Vármegyei Közösségi Foglalkoztató', 
          'agglomeráció'=>6,
          'régió' => 'konvergencia', 
          'típus' => 'kf', 
       ]);
       DB::table('megvalositasi_helyszins')->insert([ 
         'intézet'=>null,
          'név' => 'Hajdú-Bihar Vármegyei Közösségi Foglalkoztató', 
          'agglomeráció'=>6,
          'régió' => 'konvergencia', 
          'típus' => 'kf', 
       ]);
       DB::table('megvalositasi_helyszins')->insert([ 
         'intézet'=>null,
          'név' => 'Szabolcs-Szatmár-Bereg Vármegyei Közösségi Foglalkoztató', 
          'agglomeráció'=>6,
          'régió' => 'konvergencia', 
          'típus' => 'kf', 
       ]);
    }
}
