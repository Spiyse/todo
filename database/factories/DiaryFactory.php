<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diary\>
 */
class DiaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence(4),
            "body" => $this->faker->paragraphs(3, true),
            "date" => $this->faker->dateTimeBetween('-30 days', 'now'),
        ];
    }
}
