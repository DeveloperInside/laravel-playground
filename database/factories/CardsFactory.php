<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cards>
 */
class CardsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "class" => $this->faker->word(1),
            "type" => $this->faker->sentence(1),
            "value" => $this->faker->numberBetween(0, 13)
        ];
    }
}
