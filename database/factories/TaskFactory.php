<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
            // Datos generados con Faker:
            'title'       => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'completed'   => $this->faker->boolean(),
        ];
    }
}
