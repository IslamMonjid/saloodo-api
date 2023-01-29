<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Biker>
 */
class ParcelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->biasedNumberBetween(1,5),
            'status_id' => fake()->biasedNumberBetween(1,4),
            'pick_up_address' => fake()->address(), 
            'drop_off_address' => fake()->address()
        ];
    }
}
