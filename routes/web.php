<?php

use App\Models\Tarea; //Importa el modelo

Route::get('/', function () {

    //Ejemplo de obtención de todas las tareas
    $tareas = Tarea::all();

    //Ejemplo de creación de una tarea (solo la primera vez que ejecutes)
    Tarea::create(['titulo' => 'Preparar entrevista Root Heim', 'descripcion' => 'Repasar Git, Laravel y DB','completada' => false]);
    return view('welcome', ['tareas' => $tareas]);
});
