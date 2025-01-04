<?php

namespace Database\Factories;
use App\Models\Elszamolas; 
use App\Models\UgyfelTipus;
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
        $ugyfeltipus = UgyfelTipus::inRandomOrder()->first(); 
      
        return [
            'megvalositashelyszin_azon' => \App\Models\MegvalositasiHelyszin::inRandomOrder()->first()->azon,
            'ugyfel_belsokod' => \App\Models\Ugyfel::inRandomOrder()->first()->belso_kod,
            'ugyfeltipus_azon' => $ugyfeltipus->id,
            'bevonas_datum'=>fake('hu_HU')->date(),
            'kotelezo_dokumentumok_szama' => 0, 
            'opcionalis_dokumentumok_szama' => 0, 
            'elszamolhatosag_allapota' => 0, 
            'elszamolhatosag_datum' => null, 
            'elszamolas_datum' => null
        ];
    }
}
