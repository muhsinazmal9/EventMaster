<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $starting_date = fake()->dateTimeBetween('-1 year', '+1 year');
        $ending_date = fake()->dateTimeBetween($starting_date, '+1 year');

        return [
            'title' => fake()->words(4, true),
            'description' => fake()->paragraph(),
            'start_date' => $starting_date,
            'end_date' => $ending_date,
            'location' => fake()->address(),
        ];
    }
}
