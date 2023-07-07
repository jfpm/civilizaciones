<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionAdoraciones extends Model
{
    use HasFactory;

    /**
    * Modelo Evaluacion adoraciones
    *
    * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
    * @package Evaluaciones
    * @subpackage adoraciones
    */
    protected $table = 'evaluacion_adoraciones';

    protected $primaryKey = 'id';

    protected $fillable = [
        'ea_pregunta',
        'ea_respuesta',
        'ea_user',
        'ea_resultado',
    ];



    /**
     * Usuario responde la encuesta
     *
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @return Collection<User>
     */
    public function responde_encuesta(){
        return $this->hasOne(User::class,'id','ea_user');
    }
}
