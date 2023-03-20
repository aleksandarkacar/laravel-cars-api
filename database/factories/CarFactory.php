<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $engineNames = ['petrol','diesel','electric'];
        return [
            'model' => fake()->firstName(),
            'year' => random_int(1990,2023),
            'max_speed' => random_int(20,300),
            'isautomatic' => (bool)random_int(0,1),
            'engine' => $engineNames[random_int(0,2)],
            'number_of_doors' => random_int(2,5),
            'brand' => fake()->lastName()
        ];
    }
}
