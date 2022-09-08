<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $fillable = ['nombrePais'];
    use HasFactory;

    //relacion de uno a muchos
    public function departamentos(){
        return $this->hasMany(Departamento::class);
    }
}
