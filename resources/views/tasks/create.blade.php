<!DOCTYPE html>
<html>
<head>
    <title>Crear Tarea</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Crear Nueva Tarea</h1>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label>Título:</label>
            <input type="text" name="title" required>
            
            <label>Descripción:</label>
            <textarea name="description"></textarea>
            
            <button class="button" type="submit">Crear Tarea</button>
        </form>
        <a class="button" href="{{ route('tasks.index') }}">Volver a la Lista</a>
    </div>
</body>
</html>
