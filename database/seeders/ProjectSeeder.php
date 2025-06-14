<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::factory()
            ->count(10)
            ->hasTasks(5)
            ->create();

        Project::factory()
            ->count(2)
            ->hasTasks(2)
            ->create();

        Project::factory()
            ->count(2)
            ->create();
    }
}
