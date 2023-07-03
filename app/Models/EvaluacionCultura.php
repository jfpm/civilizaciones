<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionCultura extends Model
{
    use HasFactory;

    /**
    * Modelo Evaluacion cultura
    *
    * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
    * @package Evaluaciones
    * @subpackage cultura
    */
    protected $table = 'evaluacion_culturas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'ecl_pregunta',
        'ecl_respuesta',
        'ecl_user',
    ];



    /**
     * Usuario responde la encuesta
     *
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @return Collection<User>
     */
    public function responde_encuesta(){
        return $this->hasOne(User::class,'id','ecl_user');
    }
}
