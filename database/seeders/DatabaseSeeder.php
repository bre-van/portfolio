<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\EducationFactory;
use Database\Factories\JobPositionFactory;
use Database\Factories\ProjectFactory;
use Database\Factories\SkillFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Brecht',
            'email' => 'bvanderdonckt@gmail.com',
            'password' => bcrypt('test'),
        ]);

        SkillFactory::new()->count(10)->create();
        JobPositionFactory::new()->count(3)->create();
        EducationFactory::new()->count(3)->create();
    }
}
