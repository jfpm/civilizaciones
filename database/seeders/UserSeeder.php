<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Crear el Usuario Administrador en el sistema
        $password = 'demodemo';

        $user = User::create([
            'name' => 'Administrador',
            'email' => 'proyectouni2017@gmail.com',
            'password' => Hash::make($password),
            'username' => 'Admin',
            'rol'      => 1,
            'registration_token' => Str::uuid(),
        ]); 
    }
}
