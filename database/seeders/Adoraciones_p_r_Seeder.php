<?php

namespace Database\Seeders;

use App\Models\Preguntas;
use App\Models\Respuestas;
use App\Models\Configurations;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Adoraciones_p_r_Seeder extends Seeder
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
            'p_tipo' => 'Adoraciones',
            'p_pregunta' => '¿Que rango de años abarcó el Periodo Predinástico?',
            'p_identificador' => 'pregunta_1',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => '4500 a.C. hasta el 3100 a.C',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => '5500 a.C. hasta el 3100 a.C',
            'r_correcta' => 1,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => '6500 a.C. hasta el 3100 a.C',
        ]);


        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta2 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Adoraciones',
            'p_pregunta' => '¿Cuál era la adoración divina que simbolizaba la fertilidad y el renacimiento?',
            'p_identificador' => 'pregunta_2',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Anubis',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'isis',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Osiris',
            'r_correcta' => 1,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Ninguna de las anteriores',
        ]);

        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta3 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Adoraciones',
            'p_pregunta' => '¿Cuál adoración divina se consideró el Dios supremo durante el imperio nuevo?',
            'p_identificador' => 'pregunta_3',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Ra',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Anubis',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Horus',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Amón',
            'r_correcta' => 1,
        ]);


        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta4 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Adoraciones',
            'p_pregunta' => '¿Cuál adoración divina desempeñaba un papel crucial en el proceso de momificación y guiaba a las almas en su tránsito hacia el más allá ?',
            'p_identificador' => 'pregunta_4',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Horus',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Hathor',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Anubis',
            'r_correcta' => 1,
        ]);

         //traer un token del metodo
         $useToken = Configurations::generateToken();

         //preguntas para adoraciones
         $pregunta5 = Preguntas::create([
             'p_guid' => $useToken,
             'p_tipo' => 'Adoraciones',
             'p_pregunta' => '¿Cuál de los siguientes animales sagrados representaba al Dios Sobek?',
             'p_identificador' => 'pregunta_5',
             'p_estate' => true,
         ]);
 
         //respuesta a la pregunta
         Respuestas::create([
             'r_id_pregunta' => $pregunta5->id,
             'r_state' => true,
             'r_respuesta' => 'La Vaca',
         ]);
 
         Respuestas::create([
             'r_id_pregunta' => $pregunta5->id,
             'r_state' => true,
             'r_respuesta' => 'El Toro',
         ]);
 
         Respuestas::create([
             'r_id_pregunta' => $pregunta5->id,
             'r_state' => true,
             'r_respuesta' => 'La serpiente',
         ]);

         Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'El cocodrilo',
            'r_correcta' => 1,
        ]);

         //traer un token del metodo
         $useToken = Configurations::generateToken();

         //preguntas para adoraciones
         $pregunta6 = Preguntas::create([
             'p_guid' => $useToken,
             'p_tipo' => 'Adoraciones',
             'p_pregunta' => '¿Aproximadamente en que siglo se produjo el cambio drástico en la religión egipcia?',
             'p_identificador' => 'pregunta_6',
             'p_estate' => true,
         ]);
 
         //respuesta a la pregunta
         Respuestas::create([
             'r_id_pregunta' => $pregunta6->id,
             'r_state' => true,
             'r_respuesta' => 'Siglo XV',
         ]);
 
         Respuestas::create([
             'r_id_pregunta' => $pregunta6->id,
             'r_state' => true,
             'r_respuesta' => 'Siglo XVI',
         ]);
 
         Respuestas::create([
             'r_id_pregunta' => $pregunta6->id,
             'r_state' => true,
             'r_respuesta' => 'XVI',
         ]);

         Respuestas::create([
            'r_id_pregunta' => $pregunta6->id,
            'r_state' => true,
            'r_respuesta' => 'Ninguna de las anteriores',
            'r_correcta' => 1,
        ]);
    }
}

