<?php

namespace Database\Factories;

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
        // N => Not Started, P => In Progress, C => Completed
        $status = $this->faker->randomElement(['N', 'P', 'C']);
        $priority = $this->faker->randomElement([1, 2, 3]);

        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(50),
            'priority' => $priority,
            'status' => $status,
        ];
    }
}
