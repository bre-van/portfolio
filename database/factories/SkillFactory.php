<?php

namespace Database\Factories;

use App\Enums\SkillLevel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'icon' => $this->faker->word(),
            'level' => $this->faker->randomElement(SkillLevel::cases()),
            'sort_order' => $this->faker->numberBetween(1, 10),
        ];
    }
}
