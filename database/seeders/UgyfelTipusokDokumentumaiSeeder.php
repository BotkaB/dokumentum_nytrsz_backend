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
        DB::table('ugyfeltipusok_dokumentumais')->insert([
            ['ugyfeltipus_id' => 2, 'dokumentum_tipus_id' =>1],
            ['ugyfeltipus_id' => 2, 'dokumentum_tipus_id' =>2],
            ['ugyfeltipus_id' => 2, 'dokumentum_tipus_id' =>3],
            ['ugyfeltipus_id' => 2, 'dokumentum_tipus_id' =>4],
            ['ugyfeltipus_id' => 2, 'dokumentum_tipus_id' =>5],
            ['ugyfeltipus_id' => 2, 'dokumentum_tipus_id' =>6],
            ['ugyfeltipus_id' => 2, 'dokumentum_tipus_id' =>7],
            ['ugyfeltipus_id' => 2, 'dokumentum_tipus_id' =>8],
            ['ugyfeltipus_id' => 3, 'dokumentum_tipus_id' =>3],
            ['ugyfeltipus_id' => 3, 'dokumentum_tipus_id' =>4],
            ['ugyfeltipus_id' => 3, 'dokumentum_tipus_id' =>5],
            ['ugyfeltipus_id' => 3, 'dokumentum_tipus_id' =>8],
            ['ugyfeltipus_id' => 4, 'dokumentum_tipus_id' =>9],
            ['ugyfeltipus_id' => 4, 'dokumentum_tipus_id' =>3],
            ['ugyfeltipus_id' => 4, 'dokumentum_tipus_id' =>4],
            ['ugyfeltipus_id' => 4, 'dokumentum_tipus_id' =>5],
            ['ugyfeltipus_id' => 4, 'dokumentum_tipus_id' =>8],
            ['ugyfeltipus_id' => 6, 'dokumentum_tipus_id' =>9],
            ['ugyfeltipus_id' => 6, 'dokumentum_tipus_id' =>10],  
            ['ugyfeltipus_id' => 6, 'dokumentum_tipus_id' =>11],
            ['ugyfeltipus_id' => 7, 'dokumentum_tipus_id' =>9],
            ['ugyfeltipus_id' => 7, 'dokumentum_tipus_id' =>10],  
            ['ugyfeltipus_id' => 7, 'dokumentum_tipus_id' =>11],
            ['ugyfeltipus_id' => 9, 'dokumentum_tipus_id' =>12],
            ['ugyfeltipus_id' => 9, 'dokumentum_tipus_id' =>13],
            ['ugyfeltipus_id' => 9, 'dokumentum_tipus_id' =>14],
            ['ugyfeltipus_id' => 9, 'dokumentum_tipus_id' =>8],
            ['ugyfeltipus_id' => 10, 'dokumentum_tipus_id' =>12],
            ['ugyfeltipus_id' => 10, 'dokumentum_tipus_id' =>13],
            ['ugyfeltipus_id' => 10, 'dokumentum_tipus_id' =>14],
            ['ugyfeltipus_id' => 10, 'dokumentum_tipus_id' =>8],
            ['ugyfeltipus_id' => 11, 'dokumentum_tipus_id' =>12],
            ['ugyfeltipus_id' => 11, 'dokumentum_tipus_id' =>13],
            ['ugyfeltipus_id' => 11, 'dokumentum_tipus_id' =>14],
            ['ugyfeltipus_id' => 11, 'dokumentum_tipus_id' =>8],
            ['ugyfeltipus_id' => 12, 'dokumentum_tipus_id' =>12],
            ['ugyfeltipus_id' => 12, 'dokumentum_tipus_id' =>13],
            ['ugyfeltipus_id' => 12, 'dokumentum_tipus_id' =>14],
            ['ugyfeltipus_id' => 13, 'dokumentum_tipus_id' =>12],
            ['ugyfeltipus_id' => 13, 'dokumentum_tipus_id' =>13],
            ['ugyfeltipus_id' => 13, 'dokumentum_tipus_id' =>14],
            ['ugyfeltipus_id' => 14, 'dokumentum_tipus_id' =>12],
            ['ugyfeltipus_id' => 14, 'dokumentum_tipus_id' =>13],
            ['ugyfeltipus_id' => 14, 'dokumentum_tipus_id' =>14],
            ['ugyfeltipus_id' => 15, 'dokumentum_tipus_id' =>12],
            ['ugyfeltipus_id' => 15, 'dokumentum_tipus_id' =>13],
            ['ugyfeltipus_id' => 15, 'dokumentum_tipus_id' =>14],
            ['ugyfeltipus_id' => 15, 'dokumentum_tipus_id' =>8],
          
        ]);
    }
}
