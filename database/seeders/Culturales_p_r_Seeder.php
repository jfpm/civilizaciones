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
            'p_pregunta' => '¿Cuál de los siguientes ingredientes era considerado 
            especialmente preciado y se utilizaba tanto en la gastronomía como en la
             medicina en el antiguo Egipto?',
            'p_identificador' => 'pregunta_1',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => 'La miel',
            'r_correcta' => 1,

        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => ' El pescado',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => ' El pan',
        ]);


        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta2 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Culturales',
            'p_pregunta' => '¿Cuáles eran algunos de los tipos de pescados 
            consumidos en el río Nilo durante el antiguo Egipto?',
            'p_identificador' => 'pregunta_2',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Salmón, bacalao y trucha.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Tilapia, anguila y perca del Nilo.',
            'r_correcta' => 1,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Atún, pez espada y pez globo.',
        ]);

        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta3 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Culturales',
            'p_pregunta' => '¿Cuál de los siguientes alimentos eran cultivados 
            por los egipcios en el antiguo Egipto?',
            'p_identificador' => 'pregunta_3',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Arroz, maíz y patatas.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Trigo, cebada y lentejas.',
            'r_correcta' => 1,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Plátanos, mangos y piñas.',
        ]);


        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta4 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Culturales',
            'p_pregunta' => '¿Cuáles de los siguientes productos eran 
            intercambiados en el comercio del antiguo Egipto?',
            'p_identificador' => 'pregunta_4',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Animales salvajes y marfil.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Productos de hierro y herramientas de piedra.',
         
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Productos agrícolas, textiles finos y joyas.',
            'r_correcta' => 1,
            
            
        ]);
        
        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta5 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Culturales',
            'p_pregunta' => '¿Cuáles grupos sociales conformaban la jerarquía social en el 
            antiguo Egipto?',
            'p_identificador' => 'pregunta_5',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'Faraón, nobleza, sacerdotes y campesinos.',
            'r_correcta' => 1,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'Faraón, escribas, comerciantes y artesanos.',
           
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'Faraón, familia real, altos funcionarios y esclavos.',
           
        ]);

        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta6 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Culturales',
            'p_pregunta' => 'Verdadero o Falso: En el antiguo Egipto, los esclavos tenían la
             posibilidad de ascender socialmente y adquirir un estatus más elevado.',
            'p_identificador' => 'pregunta_6',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta6->id,
            'r_state' => true,
            'r_respuesta' => 'Verdadero',
            'r_correcta' => 1,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta6->id,
            'r_state' => true,
            'r_respuesta' => 'Falso',
           
        ]);

     


        

       


    }
}
