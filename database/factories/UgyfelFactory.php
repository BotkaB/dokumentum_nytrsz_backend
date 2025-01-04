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
        'név'=>fake('hu_HU')->name(),
        'születési név'=>fake('hu_HU')->name(),
        'anyja neve'=>fake('hu_HU')->name(),
        'születési hely'=>fake('hu_HU')->city(),
        'születési idő'=>fake('hu_HU')->date(),
        'lakcím'=>fake('hu_HU')->address(),
        'neme'=>fake()->randomElement(['férfi', 'nő']),
        'ügyfélkód'=>fake()->numberBetween(900000,99999999),
    
        ];
    }
}
