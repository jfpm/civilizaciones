<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionCuriosidades extends Model
{
    use HasFactory;

    /**
    * Modelo Evaluacion curiosidades
    *
    * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
    * @package Evaluaciones
    * @subpackage curiosidades
    */
    protected $table = 'evaluacion_curiosidades';

    protected $primaryKey = 'id';

    protected $fillable = [
        'ec_pregunta',
        'ec_respuesta',
        'ec_user',
    ];



    /**
     * Usuario responde la encuesta
     *
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @return Collection<User>
     */
    public function responde_encuesta(){
        return $this->hasOne(User::class,'id','ec_user');
    }
}
