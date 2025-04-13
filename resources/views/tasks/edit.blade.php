<!DOCTYPE html>
<html>
<head>
    <title>Editar Tarea</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Editar Tarea</h1>
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')
            
            <label>Título:</label>
            <input type="text" name="title" value="{{ $task->title }}" required>
            
            <label>Descripción:</label>
            <textarea name="description">{{ $task->description }}</textarea>
            
            <label>
                <input type="checkbox" name="completed" value="1" {{ $task->completed ? 'checked' : '' }}> Completada
            </label>
            
            <button class="button" type="submit">Actualizar Tarea</button>
        </form>
        <a class="button" href="{{ route('tasks.index') }}">Volver a la Lista</a>
    </div>
</body>
</html>
