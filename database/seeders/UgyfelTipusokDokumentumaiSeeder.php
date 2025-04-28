<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UgyfelTipusokDokumentumaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ugyfel_tipusok_dokumentumai')->insert([
            ['ugyfel_tipus_id' => 2, 'dokumentum_tipus_id' => 1],
            ['ugyfel_tipus_id' => 2, 'dokumentum_tipus_id' => 2],
            ['ugyfel_tipus_id' => 2, 'dokumentum_tipus_id' => 3],
            ['ugyfel_tipus_id' => 2, 'dokumentum_tipus_id' => 4],
            ['ugyfel_tipus_id' => 2, 'dokumentum_tipus_id' => 5],
            ['ugyfel_tipus_id' => 2, 'dokumentum_tipus_id' => 6],
            ['ugyfel_tipus_id' => 2, 'dokumentum_tipus_id' => 7],
            ['ugyfel_tipus_id' => 2, 'dokumentum_tipus_id' => 8],
            ['ugyfel_tipus_id' => 3, 'dokumentum_tipus_id' => 3],
            ['ugyfel_tipus_id' => 3, 'dokumentum_tipus_id' => 4],
            ['ugyfel_tipus_id' => 3, 'dokumentum_tipus_id' => 5],
            ['ugyfel_tipus_id' => 3, 'dokumentum_tipus_id' => 8],
        
            ['ugyfel_tipus_id' => 4, 'dokumentum_tipus_id' => 3],
            ['ugyfel_tipus_id' => 4, 'dokumentum_tipus_id' => 4],
            ['ugyfel_tipus_id' => 4, 'dokumentum_tipus_id' => 5],
            ['ugyfel_tipus_id' => 4, 'dokumentum_tipus_id' => 8],
            ['ugyfel_tipus_id' => 6, 'dokumentum_tipus_id' => 9],
            ['ugyfel_tipus_id' => 6, 'dokumentum_tipus_id' => 10],
            ['ugyfel_tipus_id' => 6, 'dokumentum_tipus_id' => 11],
            ['ugyfel_tipus_id' => 7, 'dokumentum_tipus_id' => 9],
            ['ugyfel_tipus_id' => 7, 'dokumentum_tipus_id' => 10],
            ['ugyfel_tipus_id' => 7, 'dokumentum_tipus_id' => 11],
            ['ugyfel_tipus_id' => 9, 'dokumentum_tipus_id' => 12],
            ['ugyfel_tipus_id' => 9, 'dokumentum_tipus_id' => 13],
            ['ugyfel_tipus_id' => 9, 'dokumentum_tipus_id' => 14],
            ['ugyfel_tipus_id' => 9, 'dokumentum_tipus_id' => 8],
            ['ugyfel_tipus_id' => 10, 'dokumentum_tipus_id' => 12],
            ['ugyfel_tipus_id' => 10, 'dokumentum_tipus_id' => 13],
            ['ugyfel_tipus_id' => 10, 'dokumentum_tipus_id' => 14],
            ['ugyfel_tipus_id' => 10, 'dokumentum_tipus_id' => 8],
            ['ugyfel_tipus_id' => 11, 'dokumentum_tipus_id' => 12],
            ['ugyfel_tipus_id' => 11, 'dokumentum_tipus_id' => 13],
            ['ugyfel_tipus_id' => 11, 'dokumentum_tipus_id' => 14],
            ['ugyfel_tipus_id' => 11, 'dokumentum_tipus_id' => 8],
            ['ugyfel_tipus_id' => 12, 'dokumentum_tipus_id' => 12],
            ['ugyfel_tipus_id' => 12, 'dokumentum_tipus_id' => 13],
            ['ugyfel_tipus_id' => 12, 'dokumentum_tipus_id' => 14],
            ['ugyfel_tipus_id' => 13, 'dokumentum_tipus_id' => 12],
            ['ugyfel_tipus_id' => 13, 'dokumentum_tipus_id' => 13],
            ['ugyfel_tipus_id' => 13, 'dokumentum_tipus_id' => 14],
            ['ugyfel_tipus_id' => 14, 'dokumentum_tipus_id' => 12],
            ['ugyfel_tipus_id' => 14, 'dokumentum_tipus_id' => 13],
            ['ugyfel_tipus_id' => 14, 'dokumentum_tipus_id' => 14],
            ['ugyfel_tipus_id' => 15, 'dokumentum_tipus_id' => 12],
            ['ugyfel_tipus_id' => 15, 'dokumentum_tipus_id' => 13],
            ['ugyfel_tipus_id' => 15, 'dokumentum_tipus_id' => 14],


        ]);
    }
}
