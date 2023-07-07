<?php

namespace Database\Seeders;

use App\Models\Preguntas;
use App\Models\Respuestas;
use App\Models\Configurations;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Culturales_p_r_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta1 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Culturales',
            'p_pregunta' => 'Pregunta 1',
            'p_identificador' => 'pregunta_1',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => 'Pregunta 1',
            'r_correcta' => 1,

        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => 'Pregunta 2',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => 'Pregunta 3',
        ]);


        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta2 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Culturales',
            'p_pregunta' => 'Pregunta 2',
            'p_identificador' => 'pregunta_2',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'SI',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'NO',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'TAL VEZ NO',
        ]);

        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta3 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Culturales',
            'p_pregunta' => 'Pregunta 3',
            'p_identificador' => 'pregunta_3',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Pregunta 1',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Pregunta 2',
        ]);


        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta4 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Culturales',
            'p_pregunta' => 'Pregunta 4',
            'p_identificador' => 'pregunta_4',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Pregunta 1',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Pregunta 2',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Pregunta 3',
        ]);


    }
}
