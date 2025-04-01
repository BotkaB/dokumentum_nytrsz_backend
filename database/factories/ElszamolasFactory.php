<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MegvalositasiHelyszin;
use App\Models\Ugyfel;
use App\Models\ElszamolasTipus;
use App\Models\UgyfelTipus;
use App\Models\Elszamolas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Elszamolas>
 */
class ElszamolasFactory extends Factory
{
    protected $model = Elszamolas::class;

    public function definition(): array
    {
        $bevonasDatum = fake('hu_HU')->dateTimeBetween('2024-09-15', 'now')->format('Y-m-d');
        $elszamolhatosagDatum = random_int(0, 1) ? fake('hu_HU')->dateTimeBetween($bevonasDatum, 'now')->format('Y-m-d') : null;
        $elszamolasDatum = random_int(0, 1) ? '2025-01-15' : null;
       
        $megvalositasiHelyszin = MegvalositasiHelyszin::inRandomOrder()->first()?->megvalositasi_helyszin_id ?? 1;
        $ugyfel = Ugyfel::inRandomOrder()->first()?->ugyfel_id ?? 1;
        $elszamolasTipus = ElszamolasTipus::inRandomOrder()->first()?->elszamolas_tipus_id ?? 1;
        $ugyfelTipus = UgyfelTipus::inRandomOrder()->first()?->ugyfel_tipus_id ?? 1;

        return [
            'megvalositasi_helyszin_id' => $megvalositasiHelyszin,
            'ugyfel_id' => $ugyfel,
            'elszamolas_tipus_id' => $elszamolasTipus,
            'ugyfel_tipus_id' => $ugyfelTipus,
            'bevonas_datum' => $bevonasDatum,
            'elszamolhatosag_datum' => $elszamolhatosagDatum,
            'elszamolhatosag_allapota' => 'nem elszámolható',
            'elszamolas_datum' => $elszamolasDatum,
        ];
    }
}
