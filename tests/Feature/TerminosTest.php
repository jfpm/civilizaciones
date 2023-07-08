<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Role;
use App\Models\User;
use Database\Seeders\RolSeeder;


class TerminosTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_terminos_sistema()
    {
        // Crea un usuario
        $user = User::factory()->create();
 
        // Autentica al usuario en la aplicación
        $this->actingAs($user);

        $response = $this->get('/terminos');

        $response->assertStatus(200);
    }
}
