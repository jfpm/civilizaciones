<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Preguntas;

class Respuestas extends Model
{
    use HasFactory;

    /**
    * Modelo Preguntas
    *
    * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
    * @package Evaluaciones
    * @subpackage preguntas
    */
    protected $table = 'respuestas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'r_id_pregunta',
        'r_state',
        'r_respuesta',
        'r_correcta',
    ];

    /**
     * Datos respuestas asociados a una pregunta
     *
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @return Collection<User>
    */
    public function preguntas(){
        return $this->belongsTo(Preguntas::class);
    }
}
