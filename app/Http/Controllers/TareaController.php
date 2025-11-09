<?php

namespace App\Http\Controllers;

use App\Models\Tarea; // ¡Importa el modelo Tarea!
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource. (Muestra una lista de las tareas.)
     */
    public function index()
    {
        // 1. Obtener todas las tareas de la base de datos
        $tareas = Tarea::all(); 

        // 2. Cargar la vista 'tareas.index' y pasarle las tareas
        return view('tareas.index', ['tareas' => $tareas]);
    }

    // ... El resto de métodos (create, store, show, etc.) se dejan sin modificar por ahora.

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
