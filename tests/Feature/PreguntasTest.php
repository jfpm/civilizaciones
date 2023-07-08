<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Preguntas;
use Database\Seeders\Adoraciones_p_r_Seeder;

class PreguntasTest extends TestCase
{
    use RefreshDatabase;

    public function testCrearPregunta()
    {
        $this->seed(Adoraciones_p_r_Seeder::class);

        // Verificar que se haya guardado al menos una pregunta en la base de datos
        $this->assertGreaterThanOrEqual(1, Preguntas::count());

        // Obtener la pregunta insertada en la base de datos
        $pregunta = Preguntas::first();

        // Verificar los valores de la pregunta
        //$this->assertEquals('valor1', $pregunta->p_guid);
        $this->assertEquals('Adoraciones', $pregunta->p_tipo);
        $this->assertEquals('¿Que rango de años abarcó el Periodo Predinástico?', $pregunta->p_pregunta);
        $this->assertEquals('pregunta_1', $pregunta->p_identificador);
        $this->assertEquals(true, $pregunta->p_estate);


    }
}


