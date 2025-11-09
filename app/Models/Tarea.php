<?php
// app/Models/Tarea.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden llenar masivamente.
     * Esto soluciona el MassAssignmentException.
     * @var array<int, string>
     */
    protected $fillable = [
        'titulo',
        'descripcion',
        'completada',
    ];
}