<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = ['nombreMunici', 'idDepartamento'];
    use HasFactory;

    public function departamentos(){
        return $this->belongsTo(Departamento::class);
    }

    public function estudiantes(){
        return $this->hasMany(Estudiantes::class);
    }
}
