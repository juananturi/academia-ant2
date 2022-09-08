<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //Añado permisos para la manipulacion campos de tabla
    protected $fillable = ['nombre', 'descripcion', 'imagen', 'duracion'];
    use HasFactory;

    public function estudiantes(){
        return $this->hasMany(Estudiantes::class);
    }

    public function cursos_materias(){
        return $this->belongsToMany(curso_materia::class);
    }
}
