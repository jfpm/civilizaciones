<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Configurations extends Model
{
    use HasFactory;

    /**
     * Metodo para generar token
     *
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @return Collection<User>
     */
    public static function generateToken(){
        //devolver mensaje si existe, para confirmar en el vue
        $token = strtoupper(substr(Str::uuid()->toString(), 0, 18));

        return $token;
    }

    /**
     * Metodo para saber si respondio una encueta o no
     *
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @return Collection<User>
     */
    public static function validateSurvey($encuesta){
        //devolver mensaje si existe, para confirmar en el vue
        $date = false;
        $consul = false;

        if($encuesta == "Curiosidades"){
            $consul = EvaluacionCuriosidades::where('ec_user', Auth::user()->id)->first();
        }else if($encuesta == "Culturales"){
            $consul = EvaluacionCultura::where('ecl_user', Auth::user()->id)->first();
        }else if($encuesta == "Adoraciones"){
            $consul = EvaluacionAdoraciones::where('ea_user', Auth::user()->id)->first();
        }else {
            $date = false;
        }

        if(isset($consul) && $consul){
            $date = true;
        }

        return $date;
    }
}
