<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => '1',
            'nombre_rol'  =>'Administrador',
            'descripcion' => 'Administrador encargado de toda la gestion del sistema',
        ]);

        Role::create([
            'id' => '2',
            'nombre_rol'  =>'Estandar',
            'descripcion' =>'Usuario Comun del sistema',
        ]);
    }
}
