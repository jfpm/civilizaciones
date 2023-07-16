<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Role;
use App\Models\User;
use Database\Seeders\RolSeeder;

class DashboardTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ingresar_pagina_inicio()
    {
        //Crea un rol
        $this->seed(RolSeeder::class); // Llama al seeder RoleSeeder
        // Crea un usuario
        $user = User::factory()->create();
 
        // Autentica al usuario en la aplicación
        $this->actingAs($user);
        //ruta principal del sistema despues de logueado
        $response = $this->get('/dashboard');

        //validar que si exista esta palabra en la pagina
        $response->assertSee('Adoraciones');

        $response->assertStatus(200);
    }
}
