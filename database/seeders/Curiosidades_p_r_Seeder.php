<?php

namespace Database\Seeders;

use App\Models\Configurations;
use App\Models\Preguntas;
use App\Models\Respuestas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Curiosidades_p_r_Seeder extends Seeder
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
            'p_tipo' => 'Curiosidades',
            'p_pregunta' => '¿Cuál de las siguientes curiosidades está relacionada con la construcción de monumentos funerarios como las pirámides en la antigua civilización egipcia?',
            'p_identificador' => 'pregunta_1',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => 'Escritura jeroglífica',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => 'La adoración de los dioses',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => 'El culto a los gatos',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => 'Construcción de las pirámides',
        ]);


        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta2 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Curiosidades',
            'p_pregunta' => '¿Cuál de las siguientes curiosidades se refiere al sistema de escritura utilizado por los antiguos egipcios?',
            'p_identificador' => 'pregunta_2',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Momificación',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'El río Nilo',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'La reina Cleopatra',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Escritura jeroglífica',
        ]);

        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta3 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Curiosidades',
            'p_pregunta' => ' ¿Cuál de las siguientes curiosidades está relacionada con la veneración de animales sagrados en la antigua civilización egipcia?',
            'p_identificador' => 'pregunta_3',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'La adoración de los dioses',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'El culto a los gatos',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Momificación',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'El río Nilo',
        ]);


        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta4 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Curiosidades',
            'p_pregunta' => '¿Cuál de las siguientes curiosidades se refiere a la práctica de embalsamar y preservar los cuerpos en la antigua civilización egipcia?',
            'p_identificador' => 'pregunta_4',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'La adoración de los dioses',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'El culto a los gatos',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Momificación',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'El río Nilo',
        ]);

        //traer un token del metodo
        $useToken5 = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta5 = Preguntas::create([
            'p_guid' => $useToken5,
            'p_tipo' => 'Curiosidades',
            'p_pregunta' => '¿Cuál de las siguientes curiosidades está relacionada con el río que desempeñó un papel fundamental en la vida de la antigua civilización egipcia?',
            'p_identificador' => 'pregunta_5',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'El culto a los gatos',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'La reina Cleopatra',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'El río Nilo',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'La adoración de los dioses',
        ]);

        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta4 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Curiosidades',
            'p_pregunta' => '¿Cuál de las siguientes curiosidades se refiere a una famosa figura histórica de la antigua civilización egipcia, conocida por su belleza y su relación con líderes romanos?',
            'p_identificador' => 'pregunta_4',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'El culto a los gatos',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'La reina Cleopatra',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Momificación',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Escritura jeroglífica',
        ]);


    }
}
