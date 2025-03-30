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
            'elszamolas_tipus_id' => 1,
            'dokumentum_neve' => 'Ft.„Nyilatkozat szemelyazonossag ellenorzeserol”',

        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus_id' => 1,
            'dokumentum_neve' => 'Ft. “ESZA+ altal finanszirozott programba belepo resztvevok szamara” kerdoiv',

        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus_id' => 1,
            'dokumentum_neve' => 'Ft. Adatkezelesi nyilatkozat',

        ]);

        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus_id' => 1,
            'dokumentum_neve' => 'Ft. Egyeni Fejlesztesi Terv',
            
        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus_id' => 1,
            'dokumentum_neve' => 'Ft. Jelenleti iv',

        ]);

        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus_id' => 2,
            'dokumentum_neve' => 'Ft. Nyilatkozat „legfeljebb also kozepfoku vegzettseggel rendelkezo ugyfel” ',

        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus_id' => 3,
            'dokumentum_neve' => 'Ft. projekt kereteben szerzett bizonyitvany/tanusitvany masolata',

        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus_id' => 1,
            'dokumentum_neve' => 'Ft. Projektbol torteno kilepeskor: „ESZA+ altal finanszirozott programot befejezo resztvevo szamara”',

        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus_id' => 1,
            'dokumentum_neve' => 'K. Adatkezelesi nyilatkozat',

        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus_id' => 1,
            'dokumentum_neve' => 'K. Egyeni Fejlesztesi Terv',

        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus_id' => 1,
            'dokumentum_neve' => 'K. Jelenleti iv',

        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus_id' => 1,
            'dokumentum_neve' => 'KF. Adatkezelesi nyilatkozat',

        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus_id' => 1,
            'dokumentum_neve' => 'KF. Egyeni Fejlesztesi Terv',

        ]);
        DB::table('dokumentum_tipuses')->insert([
            'elszamolas_tipus_id' => 1,
            'dokumentum_neve' => 'KF. Jelenleti iv',

        ]);
    }
}
