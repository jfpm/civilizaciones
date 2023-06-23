<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //se llama a la funcion que crea los roles
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
        //Crear el Usuario Administrador en el sistema
        $password = 'adminadmin123';

        $user = User::create([
            'name' => 'Administrador',
            'email' => 'telloyilver@gmail.com',
            'password' => Hash::make($password),
            'username' => 'Admin',
            'rol'      => 1, 
        ]);
    }
}
