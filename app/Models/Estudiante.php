<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['tipoDoc','numDoc', 'docIdent',  'fechaExp', 'idMuniExp', 'nombres', 'primerApellido', 'segundoApellido', 'genero', 'idMuni', 'idCurso', 'estrato'];
    use HasFactory;

    public function cursos(){
        return $this->belongsTo(Curso::class);
    }
    public function departamentos(){
        return $this->belongsTo(Departamento::class);
    }

    public function municipios(){
        return $this->belongsTo(Municipio::class);
    }
    public function docentes(){
        return $this->belongsTo(Docente::class);
    }
}
