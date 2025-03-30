<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dokumentumok>
 */
class DokumentumokFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'megvalositashelyszin_azon' => \App\Models\MegvalositasiHelyszin::inRandomOrder()->first()->azon,
            'elszamolas_id' => \App\Models\Elszamolas::inRandomOrder()->first()->elszamolas_id,
            'ugyfel_tipus_azon' => $ugyfel_tipus->id,
            'bevonas_datum' => fake('hu_HU')->date(),
            'kotelezo_dokumentumok_szama' => 0,
            'opcionalis_dokumentumok_szama' => 0,
            'elszamolhatosag_allapota' => 0,
            'elszamolhatosag_datum' => null,
            'elszamolas_datum' => null
        ];
    }
}
