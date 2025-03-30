<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ElszamolasTipusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('elszamolas_tipuses')->insert([
            ['elszamolas_elnevezese' => 'bevonás'],
            ['elszamolas_elnevezese' => 'max.alapfokú végzettségű'],
            ['elszamolas_elnevezese' => 'képzettséget szerzett'],

        ]);
    }
}
