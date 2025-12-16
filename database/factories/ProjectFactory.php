<?php

namespace Database\Factories;

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
            'title' => $this->faker->sentence,
            'summary' => $this->faker->paragraph,
            'description' => $this->faker->paragraphs(5, true),
            'started_at' => $started,
            'finished_at' => $finished,
            'url' => $this->faker->url(),
            'featured' => $this->faker->boolean(20)
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Project $project) {
            // create 1-4 screenshots and associate via hasMany
            $project->screenshots()->saveMany(
                Screenshot::factory()->count(rand(1, 4))->make()
            );

            $skillsCount = Skill::count();

            if ($skillsCount > 0) {
                $attachCount = min(rand(1, 5), $skillsCount);

                $skillIds = Skill::query()
                    ->inRandomOrder()
                    ->limit($attachCount)
                    ->pluck('id')
                    ->all();

                $project->skills()->attach($skillIds);
            }
        });
    }
}
