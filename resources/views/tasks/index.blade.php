<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Tareas</h1>
        @if(session('success'))
            <p class="success" style="color: green;">{{ session('success') }}</p>
        @endif
        <a class="button" href="{{ route('tasks.create') }}">Crear Nueva Tarea</a>
        <ul>
            @foreach($tasks as $task)
                <li>
                    <strong>{{ $task->title }}</strong> 
                    ({{ $task->completed ? 'Completada' : 'Pendiente' }})
                    <a class="button" href="{{ route('tasks.show', $task) }}">Ver</a>
                    <a class="button" href="{{ route('tasks.edit', $task) }}">Editar</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="button" type="submit">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
