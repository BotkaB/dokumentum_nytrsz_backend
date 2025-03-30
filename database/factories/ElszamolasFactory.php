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
     
        $bevonasDatum = fake('hu_HU')->dateBetween('2024-09-15', 'now');
        $elszamolhatosagDatum = random_int(0, 1) ? fake('hu_HU')->dateTimeBetween($bevonasDatum, 'now') : null;

      
        return [
            'megvalositasi_helyszin_id' => \App\Models\MegvalositasiHelyszin::inRandomOrder()->first()->azon,
            'ugyfel_id' => \App\Models\Ugyfel::inRandomOrder()->first()->ugyfel_id,
            'elszamolas_tipus_id' => null,
            'ugyfel_tipus_id' => null,
            'bevonas_datum' =>  $bevonasDatum ,
            'elszamolhatosag_datuma' => null, 
            'elszamolas_allapota' => "nem elszámolható",      
            'elszamolas_datuma' => null
        ];
    }
}
