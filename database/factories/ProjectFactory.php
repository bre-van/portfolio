<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $finished = $this->faker->dateTimeBetween('-15 years');

        return [
            'title' => $this->faker->words(2, true),
            'type' => $this->faker->words(1, true),
            'image' => $this->faker->imageUrl(640, 480, 'projects'),
            'description' => $this->faker->paragraphs(5, true),
            'finished_at' => $finished,
            'url' => $this->faker->url(),
            'featured' => $this->faker->boolean(20),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Project $project) {
            $skillIds = Skill::query()
                ->inRandomOrder()
                ->limit(3)
                ->pluck('id')
                ->all();

            if (count($skillIds) > 0) {
                $project->skills()->attach($skillIds);
            }
        });
    }
}
