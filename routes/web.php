<?php

// routes/web.php

use Illuminate\Support\Facades\Route; // ¡Agrega esta línea!
use App\Http\Controllers\TareaController; // Importa el controlador

// Esta ruta mapea las URLs a los métodos del TareaController
Route::resource('tareas', TareaController::class);

// Opcional: Redirige la ruta principal / a la lista de tareas
Route::get('/', function () {
    return redirect()->route('tareas.index');
});