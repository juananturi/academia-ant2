<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create([
            'id' => 1,
            'nombreDepa' => 'Risaralda',
            'idPais' => '1'
        ]);
        Departamento::create([
            'id' => 2,
            'nombreDepa' => 'Antioquia',
            'idPais' => '1'
        ]);
        Departamento::create([
            'id' => 3,
            'nombreDepa' => 'Cundinamarca',
            'idPais' => '1'
        ]);
        Departamento::create([
            'id' => 4,
            'nombreDepa' => 'Aragua',
            'idPais' => '2'
        ]);
        Departamento::create([
            'id' => 5,
            'nombreDepa' => 'Sevilla',
            'idPais' => '2'
        ]);
        Departamento::create([
            'id' => 6,
            'nombreDepa' => 'Aragua',
            'idPais' => '3'
        ]);
        Departamento::create([
            'id' => 7,
            'nombreDepa' => 'Merida',
            'idPais' => '3'
        ]);

    }
}
