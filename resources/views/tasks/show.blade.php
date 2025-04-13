<!DOCTYPE html>
<html>
<head>
    <title>Detalle de Tarea</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>{{ $task->title }}</h1>
        <p>{{ $task->description }}</p>
        <p>Estado: {{ $task->completed ? 'Completada' : 'Pendiente' }}</p>
        <a class="button" href="{{ route('tasks.edit', $task) }}">Editar</a>
        <a class="button" href="{{ route('tasks.index') }}">Volver a la Lista</a>
    </div>
</body>
</html>
