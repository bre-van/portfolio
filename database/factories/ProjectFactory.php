<?php

namespace Database\Factories;

use App\Models\JobPosition;
use App\Models\Project;
use App\Models\Screenshot;
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
        $started = $this->faker->dateTimeBetween('-15 years');
        $finished = $this->faker->dateTimeBetween($started);

        return [
            'title' => $this->faker->words(2, true),
            'type' => $this->faker->words(1, true),
            'summary' => $this->faker->paragraph,
            'description' => $this->faker->paragraphs(5, true),
            'started_at' => $started,
            'finished_at' => $finished,
            'url' => $this->faker->url(),
            'featured' => $this->faker->boolean(20),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Project $project) {
            // create 1-4 screenshots and associate via hasMany
            $project->screenshots()->saveMany(
                Screenshot::factory()->count(rand(1, 4))->make()
            );

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
