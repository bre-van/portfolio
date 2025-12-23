<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\JobPosition;
use App\Models\Project;
use App\Models\Screenshot;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<JobPosition>
 */
class JobPositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start_date = $this->faker->dateTimeBetween('-15 years', '-1 years');
        $end_date = $this->faker->dateTimeBetween($start_date);

        return [
            'name' => fake()->jobTitle(),
            'description' => fake()->paragraphs(2, true),
            'start_date' => $start_date,
            'end_date' => $end_date,
            'location' => fake()->city(),
            'company_id' => Company::factory(),
        ];
    }

    public function configure(): Factory|JobPositionFactory
    {
        return $this->afterCreating(function (JobPosition $jobPosition) {
            $jobPosition->projects()->saveMany(
                Project::factory(2)->create()
            );
        });
    }
}
