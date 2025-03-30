<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ugyfel>
 */
class UgyfelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nev' => fake('hu_HU')->name(),
            'szuletesi_nev' => fake('hu_HU')->name(),
            'anyja_neve' => fake('hu_HU')->name(),
            'szuletesi_hely' => fake('hu_HU')->city(),
            'szuletesi_ido' => fake('hu_HU')->date(),
            'telepules' => fake('hu_HU')->city(),
            'neme' => fake()->randomElement(['ferfi', 'no']),
            'ugyfelkod' => fake()->numberBetween(900000, 99999999),

        ];
    }
}
