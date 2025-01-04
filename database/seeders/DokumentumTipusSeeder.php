<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DokumentumTipusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokumentum_tipuses')->insert([ 
            'ügyfél_főtípus'=>1,
            'elnevezés' => 'Ft.„Nyilatkozat személyazonosság ellenőrzéséről”',
            'opcionalis_e'=>1      
        ]);
        DB::table('dokumentum_tipuses')->insert([ 
            'ügyfél_főtípus'=>1,
            'elnevezés' => 'Ft. “ESZA+ által finanszírozott programba belépő résztvevők számára” kérdőív',
            'opcionalis_e'=>1      
        ]);
        DB::table('dokumentum_tipuses')->insert([ 
            'ügyfél_főtípus'=>1,
            'elnevezés' => 'Ft. Adatkezelési nyilatkozat',
            'opcionalis_e'=>1      
        ]);
        DB::table('dokumentum_tipuses')->insert([ 
            'ügyfél_főtípus'=>1,
            'elnevezés' => 'Ft. Nyilatkozat „legfeljebb alsó középfokú végzettséggel rendelkező ügyfél” ',
            'opcionalis_e'=>0      
        ]);
        DB::table('dokumentum_tipuses')->insert([ 
            'ügyfél_főtípus'=>1,
            'elnevezés' => 'Ft. Egyéni Fejlesztési Terv',
            'opcionalis_e'=>1      
        ]);
        DB::table('dokumentum_tipuses')->insert([ 
            'ügyfél_főtípus'=>1,
            'elnevezés' => 'Ft. Jelenléti ív',
            'opcionalis_e'=>1      
        ]);
        DB::table('dokumentum_tipuses')->insert([ 
            'ügyfél_főtípus'=>1,
            'elnevezés' => 'Ft. projekt keretében szerzett bizonyítvány/tanúsítvány másolata',
            'opcionalis_e'=>0      
        ]);
        DB::table('dokumentum_tipuses')->insert([ 
            'ügyfél_főtípus'=>1,
            'elnevezés' => 'Ft. Projektből történő kilépéskor: „ESZA+ által finanszírozott programot befejező résztvevő számára”',
            'opcionalis_e'=>0      
        ]);
        DB::table('dokumentum_tipuses')->insert([ 
            'ügyfél_főtípus'=>2,
            'elnevezés' => 'K. Adatkezelési nyilatkozat',
            'opcionalis_e'=>1      
        ]);
        DB::table('dokumentum_tipuses')->insert([ 
            'ügyfél_főtípus'=>2,
            'elnevezés' => 'K. Egyéni Fejlesztési Terv',
            'opcionalis_e'=>1      
        ]);
        DB::table('dokumentum_tipuses')->insert([ 
            'ügyfél_főtípus'=>2,
            'elnevezés' => 'K. Jelenléti ív',
            'opcionalis_e'=>1      
        ]);
        DB::table('dokumentum_tipuses')->insert([ 
            'ügyfél_főtípus'=>3,
            'elnevezés' => 'KF. Adatkezelési nyilatkozat',
            'opcionalis_e'=>1      
        ]);
        DB::table('dokumentum_tipuses')->insert([ 
            'ügyfél_főtípus'=>3,
            'elnevezés' => 'KF. Egyéni Fejlesztési Terv',
            'opcionalis_e'=>1      
        ]);
        DB::table('dokumentum_tipuses')->insert([ 
            'ügyfél_főtípus'=>3,
            'elnevezés' => 'KF. Jelenléti ív',
            'opcionalis_e'=>1      
        ]);
    }
}
