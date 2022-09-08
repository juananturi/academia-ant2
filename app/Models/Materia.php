<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = ['nombreMateria', 'intensidad'];
    use HasFactory;

    public function docentes(){
        return $this->hasMany(Docente::class);
    }

    public function cursos_materias(){
        return $this->belongsToMany(curso_materia::class);
    }
}
