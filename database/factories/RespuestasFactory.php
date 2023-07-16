<?php

namespace Database\Factories;

use App\Models\Respuestas;
use App\Models\Preguntas;
use Illuminate\Database\Eloquent\Factories\Factory;

class RespuestasFactory extends Factory
{
    protected $model = Respuestas::class;

    public function definition()
    {
        $preguntaId = Preguntas::pluck('id')->random();

        return [
            'r_respuesta' => $this->faker->sentence,
            'r_correcta' => $this->faker->boolean,
            'r_id_pregunta' => $preguntaId,
            // Otros atributos de tu modelo Respuestas
        ];
    }
}
