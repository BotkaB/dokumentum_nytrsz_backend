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
            'elszamolas_tipus' => 1,
            'elnevezes' => 'Ft.„Nyilatkozat szemelyazonossag ellenorzeserol”',
           
        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus' => 1,
            'elnevezes' => 'Ft. “ESZA+ altal finanszirozott programba belepo resztvevok szamara” kerdoiv',
            
        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus' => 1,
            'elnevezes' => 'Ft. Adatkezelesi nyilatkozat',
            
        ]);
       
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus' => 1,
            'elnevezes' => 'Ft. Egyeni Fejlesztesi Terv',
            'opcionalis_e' => 1
        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus' => 1,
            'elnevezes' => 'Ft. Jelenleti iv',
           
        ]);

        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus' => 2,
            'elnevezes' => 'Ft. Nyilatkozat „legfeljebb also kozepfoku vegzettseggel rendelkezo ugyfel” ',
            
        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus' => 3,
            'elnevezes' => 'Ft. projekt kereteben szerzett bizonyitvany/tanusitvany masolata',
           
        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus' => 1,
            'elnevezes' => 'Ft. Projektbol torteno kilepeskor: „ESZA+ altal finanszirozott programot befejezo resztvevo szamara”',
          
        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus' => 1,
            'elnevezes' => 'K. Adatkezelesi nyilatkozat',
          
        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus' => 1,
            'elnevezes' => 'K. Egyeni Fejlesztesi Terv',
        
        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus' => 1,
            'elnevezes' => 'K. Jelenleti iv',
          
        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus' => 1,
            'elnevezes' => 'KF. Adatkezelesi nyilatkozat',
         
        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus' => 1,
            'elnevezes' => 'KF. Egyeni Fejlesztesi Terv',
         
        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus' => 1,
            'elnevezes' => 'KF. Jelenleti iv',
         
        ]);
    }
}
