<?php

namespace Database\Factories;

use App\Models\Elszamolas;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Elszamolas>
 */
class ElszamolasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $bevonasDatum = fake('hu_HU')->dateTimeBetween('2024-09-15', 'now')->format('Y-m-d');
        $elszamolhatosagDatum = random_int(0, 1) ? fake('hu_HU')->dateTimeBetween($bevonasDatum, 'now')->format('Y-m-d') : null;

        return [
            'megvalositasi_helyszin_id' => \App\Models\MegvalositasiHelyszin::inRandomOrder()->first()->azon ?? 1,
            'ugyfel_id' => \App\Models\Ugyfel::inRandomOrder()->first()->ugyfel_id,
            'elszamolas_tipus_id' => \App\Models\ElszamolasTipus::inRandomOrder()->first()->azon ?? 1,
            'ugyfel_tipus_id' => \App\Models\UgyfelTipus::inRandomOrder()->first()->azon ?? 1,
            'bevonas_datum' => $bevonasDatum,
            'elszamolhatosag_datum' => $elszamolhatosagDatum,
            'elszamolhatosag_allapota' => "nem elszamolhato",
            'elszamolas_datum' => null
        ];
    }
}
