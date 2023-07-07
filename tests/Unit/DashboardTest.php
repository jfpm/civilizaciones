<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Role;
use App\Models\User;
use Database\Seeders\RolSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_ingreso_ruta_protegida()
    {
        //Crea un rol
        $this->seed(RolSeeder::class); // Llama al seeder RoleSeeder
        // Crea un usuario
        $user = User::factory()->create();

        // Autentica al usuario en la aplicación
        $this->actingAs($user);

        // Realiza la solicitud GET a la ruta /usuarios
        $response = $this->get('/usuarios');

        // Realiza las aserciones necesarias
        $response->assertStatus(200);
        $response->assertSee($user->name); // Asegura que el nombre del usuario se muestre en la vista
    }
}
