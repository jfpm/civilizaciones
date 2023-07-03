<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntaAbierta extends Model
{
    use HasFactory;

    /**
    * Modelo Evaluacion curiosidades
    *
    * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
    * @package Evaluaciones
    * @subpackage curiosidades
    */
    protected $table = 'pregunta_abiertas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'pa_pregunta',
        'pa_respuesta',
        'pa_modulo',
        'pa_user',
    ];



    /**
     * Usuario responde la encuesta
     *
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @return Collection<User>
     */
    public function responde_encuesta(){
        return $this->hasOne(User::class,'id','pa_user');
    }
}
