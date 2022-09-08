<?php

namespace Database\Seeders;

use App\Models\Pais;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pais::create([
            'id' => 1,
            'nombrePais' => 'COLOMBIA'
        ]);
        Pais::create([
            'id' => 2,
            'nombrePais' => 'ESPAÑA'
        ]);
        Pais::create([
            'id' => 3,
            'nombrePais' => 'VENEZUELA'
        ]);
    }
}
