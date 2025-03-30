<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ugyfel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Ugyfel::factory(200)->create();

        $this->call([
            UserSeeder::class,
            MegvalositasiHelyszinSeeder::class,
            UgyfelTipusSeeder::class,
            ElszamolasTipusSeeder::class, 
            DokumentumTipusSeeder::class,         
            UgyfelTipusokDokumentumaiSeeder::class,

        ]);
        \App\Models\Elszamolas::factory(300)->create();
    }
}
