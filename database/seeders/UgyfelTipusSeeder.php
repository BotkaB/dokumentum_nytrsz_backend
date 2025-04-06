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
            'elnevezes' => 'fogvatartott',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 1,
            'elnevezes' => 'fogvatartott',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 1,
            'elnevezes' => 'szabadult',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 1,
            'elnevezes' => 'reintegrációs őrizetes',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => null,
            'elnevezes' => 'kapcsolattartó',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 5,
            'elnevezes' => 'kapcsolattartó',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 5,
            'elnevezes' => 'hozzátartozó',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => null,
            'elnevezes' => 'közösségi foglalkoztató ügyfél',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 8,
            'elnevezes' => 'pártfogó felügyelet elrendelésével, feltételes szabadságra bocsátott elítélt ',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 8,
            'elnevezes' => 'reintegrációs őrizetbe helyezett elítélt',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 8,
            'elnevezes' => 'társadalmi kötődés programba helyezett elítélt',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 8,
            'elnevezes' => 'EFOP/KMR szabadult ügyfél',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 8,
            'elnevezes' => 'EFOP/KMR ügyfél hozzátartozó',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 8,
            'elnevezes' => 'bv. intézeti jogviszonnyal rendelkezők hozzátartozói',
        ]);
        DB::table('ugyfel_tipuses')->insert([
            'ugyfel_fotipus' => 8,
            'elnevezes' => 'büntetését kitöltve szabadult',
        ]);
    }
}
