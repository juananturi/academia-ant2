<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this ->call([
            PaisSeeder::class,
            DepartamentoSeeder::class,
            MunicipioSeeder::class,
            MateriaSeeder::class
        ]);
    }
}
