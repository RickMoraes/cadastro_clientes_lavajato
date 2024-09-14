<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand'  => $this->faker->brand(),
            'model'  => $this->faker->model(),
            'plate'  => $this->faker->plate()->unique(),
            'engine' => $this->faker->engine(),
        ];
    }
}
