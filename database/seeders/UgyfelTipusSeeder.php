<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UgyfelTipusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>null,
            'elnevezés' => 'fogvatartott',      
        ]);
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>1,
            'elnevezés' => 'fogvatartott',      
        ]);
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>1,
            'elnevezés' => 'szabadult',      
        ]);
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>1,
            'elnevezés' => 'reintegrációs őrizetes',      
        ]);
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>null,
            'elnevezés' => 'kapcsolattartó',      
        ]);
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>2,
            'elnevezés' => 'kapcsolattartó',      
        ]);
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>2,
            'elnevezés' => 'hozzátartozó',      
        ]);
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>null,
            'elnevezés' => 'közösségi foglalkoztató ügyfél',      
        ]);
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>3,
            'elnevezés' => 'pártfogó felügyelet elrendelésével, feltételes szabadságra bocsátott elítélt ',      
        ]);
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>3,
            'elnevezés' =>'reintegrációs őrizetbe helyezett elítélt',      
        ]);
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>3,
            'elnevezés' =>'társadalmi kötődés programba helyezett elítélt',      
        ]);
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>3,
            'elnevezés' =>'EFOP/KMR szabadult ügyfél',      
        ]);
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>3,
            'elnevezés' =>'EFOP/KMR ügyfél hozzátartozó',      
        ]);
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>3,
            'elnevezés' =>'bv. intézeti jogviszonnyal rendelkezők hozzátartozói',      
        ]);
        DB::table('ugyfel_tipuses')->insert([ 
            'főtípus'=>3,
            'elnevezés' =>'büntetését kitöltve szabadult',      
        ]);
    }
}
