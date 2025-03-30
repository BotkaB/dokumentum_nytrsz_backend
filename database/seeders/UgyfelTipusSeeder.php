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
            'ugyfel_fotipus' => null,
            'dokumentum_neve' => 'fogvatartott',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 1,
            'dokumentum_neve' => 'fogvatartott',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 1,
            'dokumentum_neve' => 'szabadult',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 1,
            'dokumentum_neve' => 'reintegrációs őrizetes',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => null,
            'dokumentum_neve' => 'kapcsolattartó',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 2,
            'dokumentum_neve' => 'kapcsolattartó',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 2,
            'dokumentum_neve' => 'hozzátartozó',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => null,
            'dokumentum_neve' => 'közösségi foglalkoztató ügyfél',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 3,
            'dokumentum_neve' => 'pártfogó felügyelet elrendelésével, feltételes szabadságra bocsátott elítélt ',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 3,
            'dokumentum_neve' => 'reintegrációs őrizetbe helyezett elítélt',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 3,
            'dokumentum_neve' => 'társadalmi kötődés programba helyezett elítélt',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 3,
            'dokumentum_neve' => 'EFOP/KMR szabadult ügyfél',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 3,
            'dokumentum_neve' => 'EFOP/KMR ügyfél hozzátartozó',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 3,
            'dokumentum_neve' => 'bv. intézeti jogviszonnyal rendelkezők hozzátartozói',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 3,
            'dokumentum_neve' => 'büntetését kitöltve szabadult',
        ]);
    }
}
