<?php

namespace App\Models;

use App\Models\Respuestas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Preguntas extends Model
{
    use HasFactory;

    /**
    * Modelo Preguntas
    *
    * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
    * @package Evaluaciones
    * @subpackage preguntas
    */
    protected $table = 'preguntas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'p_guid',
        'p_tipo',
        'p_pregunta',
        'du_tipo_documento_id',
        'p_identificador',
        'p_estate',
    ];

    /**
     * Datos asociados a la pregunta
     *
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @return Collection<User>
    */
    public function respuestas(){
        return $this->hasMany(Respuestas::class,'r_id_pregunta');
    }

}
