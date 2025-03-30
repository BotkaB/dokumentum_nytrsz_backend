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
         'intezet' => null,
         'nev' => 'Állampusztai Országos Büntetés-végrehajtási Intézet',
         'agglomeracio' => 3,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 1,
         'nev' => 'Állampuszta',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 1,
         'nev' => 'Solt',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Bacs-Kiskun Vármegyei Büntetés-végrehajtasi Intézet',
         'agglomeracio' => 3,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 4,
         'nev' => 'Wéber Ede',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 4,
         'nev' => 'Mátyási',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Balassagyarmati Fegyház es Börtön',
         'agglomeracio' => 4,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Baranya Vármegyei Büntetés-végrehajtasi Intézet',
         'agglomeracio' => 2,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Békés Vármegyei Büntetés-végrehajtasi Intézet',
         'agglomeracio' => 3,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Borsod-Abaúj Zemplén Vármegyei Büntetés-végrehajtasi Intézet',
         'agglomeracio' => 5,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 10,
         'nev' => 'Megyei',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 10,
         'nev' => 'Szirmabesenyő',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Budapesti Fegyház es Börtön',
         'agglomeracio' => 2,
         'regio' => 'Budapest',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Fiatalkorúak Büntetes-vegrehajtasi Intezete',
         'agglomeracio' => 2,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Fővárosi Büntetés-végrehajtási Intezet',
         'agglomeracio' => 4,
         'regio' => 'Budapest',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 15,
         'nev' => 'I. objektum',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 15,
         'nev' => 'II. objektum',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 15,
         'nev' => 'III. objektum',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Győr-Moson-Sopron Vármegyei Büntetés-végrehajtasi Intézet',
         'agglomeracio' => 1,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Hajdú-Bihar Vármegyei Büntetés-végrehajtasi Intézet',
         'agglomeracio' => 5,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Heves Vármegyei Büntetés-végrehajtasi Intézet',
         'agglomeracio' => 4,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Igazságügyi Megfigyelo es Elmegyogyito Intezet',
         'agglomeracio' => 5,
         'regio' => 'Budapest',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Jasz-Nagykun-Szolnok Vármegyei Büntetés-végrehajtasi Intézet',
         'agglomeracio' => 5,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Kalocsai Fegyház es Börtön',
         'agglomeracio' => 3,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Kiskunhalasi Országos Büntetes-vegrehajtasi Intezet',
         'agglomeracio' => 3,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Kozep-Dunantúli Országos Büntetes-vegrehajtasi Intezet',
         'agglomeracio' => 2,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 26,
         'nev' => 'Baracska',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 26,
         'nev' => 'Martonvásár',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 26,
         'nev' => 'Székesfehérvár',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Márianosztrai Fegyház es Börtön',
         'agglomeracio' => 4,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Palhalmai Orszagos Büntetés-végrehajtási Intézet',
         'agglomeracio' => 2,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 31,
         'nev' => 'Melykut',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 31,
         'nev' => 'Bernátkút',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 31,
         'nev' => 'Sándorháza',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Sátoraljaújhelyi Fegyház es Börtön',
         'agglomeracio' => 5,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Somogy Vármegyei Büntetés-végrehajtasi Intézet',
         'agglomeracio' => 2,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Sopronkohidai Fegyház es Börtön',
         'agglomeracio' => 1,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Szabolcs-Szatmar-Bereg Vármegyei Büntetés-végrehajtasi Intézet',
         'agglomeracio' => 5,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Szegedi Fegyház es Börtön',
         'agglomeracio' => 3,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 39,
         'nev' => 'I. objektum',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 39,
         'nev' => 'II. objektum',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => 39,
         'nev' => 'III. objektum',
         'agglomeracio' => null,
         'regio' => null,
         'tipus' => null,
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Szombathelyi Orszagos Büntetés-végrehajtási Intézet',
         'agglomeracio' => 1,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Tiszalöki Orszagos Büntetés-végrehajtási Intézet',
         'agglomeracio' => 5,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Tököli Orszagos Büntetés-végrehajtási Intézet',
         'agglomeracio' => 2,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Tolna Vármegyei Büntetés-végrehajtasi Intézet',
         'agglomeracio' => 2,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Váci Fegyház es Börtön',
         'agglomeracio' => 4,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Veszprém Vármegyei Büntetés-végrehajtasi Intézet',
         'agglomeracio' => 1,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Zala Vármegyei Büntetés-végrehajtasi Intézet',
         'agglomeracio' => 1,
         'regio' => 'konvergencia',
         'tipus' => 'bv',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Jász-Nagykun-Szolnok Vármegyei Közösségi Foglalkoztató',
         'agglomeracio' => 9,
         'regio' => 'konvergencia',
         'tipus' => 'kf',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Hajdú-Bihar Vármegyei Közösségi Foglalkoztató',
         'agglomeracio' => 9,
         'regio' => 'konvergencia',
         'tipus' => 'kf',
      ]);
      DB::table('megvalositasi_helyszins')->insert([
         'intezet' => null,
         'nev' => 'Szabolcs-Szatmár-Bereg Vármegyei Közösségi Foglalkoztató',
         'agglomeracio' => 9,
         'regio' => 'konvergencia',
         'tipus' => 'kf',
      ]);
   }
}
