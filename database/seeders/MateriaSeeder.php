<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([
            'id' => '1',
            'nombreMateria' => 'Vocabulario',
            'intensidad' => '60 Horas'
        ]);
        Materia::create([
            'id' => '2',
            'nombreMateria' => 'Comunicacion oral y escria',
            'intensidad' => '60 Horas'
        ]);
        Materia::create([
            'id' => '3',
            'nombreMateria' => 'Exposiciones',
            'intensidad' => '80 Horas'
        ]);
        Materia::create([
            'id' => '4',
            'nombreMateria' => 'Aleman Master',
            'intensidad' => '3450 Horas'
        ]);
    }
}
