<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipio::create([
            'id' => 1,
            'nombreMunici' => 'Pereira',
            'idDep' => '1'
        ]);
        Municipio::create([
            'id' => 2,
            'nombreMunici' => 'Dosquebradas',
            'idDep' => '1'
        ]);
        Municipio::create([
            'id' => 3,
            'nombreMunici' => 'La Virginia',
            'idDep' => '1'
        ]);
        Municipio::create([
            'id' => 4,
            'nombreMunici' => 'Medellin',
            'idDep' => '2'
        ]);
        Municipio::create([
            'id' => 5,
            'nombreMunici' => 'Rio Negro',
            'idDep' => '2'
        ]);
        Municipio::create([
            'id' => 6,
            'nombreMunici' => 'La Coruña',
            'idDep' => '3'
        ]);
        Municipio::create([
            'id' => 7,
            'nombreMunici' => 'Zaragoza',
            'idDep' => '3'
        ]);
        Municipio::create([
            'id' => 8,
            'nombreMunici' => 'Malaga',
            'idDep' => '4'
        ]);
        Municipio::create([
            'id' => 9,
            'nombreMunici' => 'Granada',
            'idDep' => '4'
        ]);
        Municipio::create([
            'id' => 10,
            'nombreMunici' => 'Sabadell',
            'idDep' => '5'
        ]);
        Municipio::create([
            'id' => 11,
            'nombreMunici' => 'Maracay',
            'idDep' => '6'
        ]);
        Municipio::create([
            'id' => 12,
            'nombreMunici' => 'Tabai',
            'idDep' => '7'
        ]);

    }
}
