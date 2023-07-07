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
            'p_pregunta' => 'database/seeders/Curiosidades_p_r_Seeder.php',
            'p_identificador' => 'pregunta_1',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => 'Estructuras de origen egipcio construidas hace más de 4.500 años.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => 'Una forma de escritura utilizada por los antiguos egipcios.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => 'Un sistema de medicina desarrollado por los egipcios antiguos.s',
        ]);

        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta2 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Curiosidades',
            'p_pregunta' => '¿Cómo se llamaba el sistema de escritura utilizado por los antiguos egipcios?',
            'p_identificador' => 'pregunta_2',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Jeroglíficos',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Cuneiforme',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Alfabeto latino.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Morse',
        ]);

        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta3 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Curiosidades',
            'p_pregunta' => '¿Qué animal era considerado sagrado en la antigua civilización egipcia?',
            'p_identificador' => 'pregunta_3',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Gatos',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Perros',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Serpientes',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Leones',
        ]);


        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta4 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Curiosidades',
            'p_pregunta' => '¿Cuál era el propósito de la momificación en el antiguo Egipto?',
            'p_identificador' => 'pregunta_4',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Preservar los cuerpos después de la muerte.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Castigar a los criminales.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Curar enfermedades y heridas.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Celebrar festividades religiosas.',
        ]);

        //traer un token del metodo
        $useToken5 = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta5 = Preguntas::create([
            'p_guid' => $useToken5,
            'p_tipo' => 'Curiosidades',
            'p_pregunta' => '¿Quién fue Cleopatra?',
            'p_identificador' => 'pregunta_5',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'La última reina de Egipto.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'Una diosa adorada por los antiguos egipcios.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'Una famosa escritora egipcia.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'La inventora de la medicina egipcia.',
        ]);

        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta6 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Curiosidades',
            'p_pregunta' => '¿Cuál fue la importancia del río Nilo para los antiguos egipcios?',
            'p_identificador' => 'pregunta_4',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta6->id,
            'r_state' => true,
            'r_respuesta' => 'Proporcionaba agua para la agricultura y el riego.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta6->id,
            'r_state' => true,
            'r_respuesta' => 'Era un símbolo de poder divino.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta6->id,
            'r_state' => true,
            'r_respuesta' => 'Era utilizado para la navegación y el comercio.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta6->id,
            'r_state' => true,
            'r_respuesta' => 'Todas las anteriores.',
        ]);

        //traer un token del metodo
        $useToken = Configurations::generateToken();

        //preguntas para adoraciones
        $pregunta7 = Preguntas::create([
            'p_guid' => $useToken,
            'p_tipo' => 'Curiosidades',
            'p_pregunta' => '¿Qué conocimientos tenían los antiguos egipcios en el campo de la medicina?',
            'p_identificador' => 'pregunta_7',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta7->id,
            'r_state' => true,
            'r_respuesta' => 'Desarrollaron tratamientos para diversas enfermedades y heridas.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta7->id,
            'r_state' => true,
            'r_respuesta' => 'Utilizaban hierbas medicinales y ungüentos.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta7->id,
            'r_state' => true,
            'r_respuesta' => 'Realizaban procedimientos quirúrgicos.',
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta7->id,
            'r_state' => true,
            'r_respuesta' => 'Todas las anteriores.',
        ]);


    }
}
