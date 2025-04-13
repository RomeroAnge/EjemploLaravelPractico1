<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 tareas utilizando la factory (datos aleatorios)
        Task::factory()->count(10)->create();
        
        // Insertar datos fijos adicionales
        Task::create([
            'title'       => 'Revisar documentación',
            'description' => 'Revisar la documentación oficial de Laravel 12 para conocer las novedades.',
            'completed'   => false,
        ]);
        
        Task::create([
            'title'       => 'Planificar reunión de equipo',
            'description' => 'Organizar una reunión con el equipo para definir las tareas del próximo sprint.',
            'completed'   => true,
        ]);
    }
}
