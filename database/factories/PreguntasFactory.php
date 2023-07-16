<?php

namespace Database\Factories;

use App\Models\Preguntas;
use App\Models\Configurations;
use Illuminate\Database\Eloquent\Factories\Factory;

class PreguntasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Preguntas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $useToken = Configurations::generateToken();
        return [
            //
            'p_guid' => $useToken,
            'p_tipo' => 'Adoraciones',
            'p_pregunta' => $this->faker->sentence,
            'p_identificador' => 'pregunta_2',
            'p_estate' => true,
        ];
    }
}
