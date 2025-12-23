<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start_date = $this->faker->dateTimeBetween('-30 years', '-15 years');
        $end_date = $this->faker->dateTimeBetween($start_date, '-14 years');

        return [
            'institution' => $this->faker->company(),
            'degree' => $this->faker->words(3, true),
            'description' => $this->faker->paragraphs(1, true),
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
    }
}
