<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas (Root Heim Practice)</title>
</head>
<body>
    <h1>Mis Tareas Pendientes</h1>

    {{-- Bucle para recorrer el arreglo $tareas que nos envía el Controlador --}}
    @if ($tareas->isEmpty())
        <p>¡No tienes tareas pendientes! 🥳</p>
    @else
        <ul>
            @foreach ($tareas as $tarea)
                <li>
                    <strong>{{ $tarea->titulo }}</strong> 
                    ({{ $tarea->completada ? 'Completada' : 'Pendiente' }})
                    <br>
                    <small>{{ $tarea->descripcion }}</small>
                </li>
            @endforeach
        </ul>
    @endif

    <hr>
    <p>Práctica de MVC con Laravel para Root Heim.</p>
</body>
</html>