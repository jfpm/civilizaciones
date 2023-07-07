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
            'p_pregunta' => '¿Qué son las pirámides de Giza?',
            'p_identificador' => 'pregunta_1',
            'p_estate' => true,
        ]);

        //respuesta a la pregunta
        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => 'Estructuras de origen egipcio construidas hace más de 4.500 años.',
            'r_correcta' => 1,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => 'Una forma de escritura utilizada por los antiguos egipcios.',
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta1->id,
            'r_state' => true,
            'r_respuesta' => 'Un sistema de medicina desarrollado por los egipcios antiguos.s',
            'r_correcta' => 0,
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
            'r_correcta' => 1,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Cuneiforme',
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Alfabeto latino.',
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta2->id,
            'r_state' => true,
            'r_respuesta' => 'Morse',
            'r_correcta' => 0,
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
            'r_respuesta' => 'Perros',
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Serpientes',
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Leones',
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta3->id,
            'r_state' => true,
            'r_respuesta' => 'Gatos',
            'r_correcta' => 1,
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
            'r_respuesta' => 'Castigar a los criminales.',
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Curar enfermedades y heridas.',
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Preservar los cuerpos después de la muerte.',
            'r_correcta' => 1,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta4->id,
            'r_state' => true,
            'r_respuesta' => 'Celebrar festividades religiosas.',
            'r_correcta' => 0,
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
            'r_respuesta' => 'Una diosa adorada por los antiguos egipcios.',
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'La última reina de Egipto.',
            'r_correcta' => 1,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'Una famosa escritora egipcia.',
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta5->id,
            'r_state' => true,
            'r_respuesta' => 'La inventora de la medicina egipcia.',
            'r_correcta' => 0,
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
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta6->id,
            'r_state' => true,
            'r_respuesta' => 'Era un símbolo de poder divino.',
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta6->id,
            'r_state' => true,
            'r_respuesta' => 'Era utilizado para la navegación y el comercio.',
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta6->id,
            'r_state' => true,
            'r_respuesta' => 'Todas las anteriores.',
            'r_correcta' => 1,
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
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta7->id,
            'r_state' => true,
            'r_respuesta' => 'Utilizaban hierbas medicinales y ungüentos.',
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta7->id,
            'r_state' => true,
            'r_respuesta' => 'Realizaban procedimientos quirúrgicos.',
            'r_correcta' => 0,
        ]);

        Respuestas::create([
            'r_id_pregunta' => $pregunta7->id,
            'r_state' => true,
            'r_respuesta' => 'Todas las anteriores.',
            'r_correcta' => 1,
        ]);


    }
}
