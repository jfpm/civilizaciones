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
    public static function generateToken()
    {
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
    public static function validateSurvey($encuesta)
    {
        //devolver mensaje si existe, para confirmar en el vue
        $date = false;
        $consul = false;

        if ($encuesta == "Curiosidades") {
            $consul = EvaluacionCuriosidades::where('ec_user', Auth::user()->id)->first();
        } else if ($encuesta == "Culturales") {
            $consul = EvaluacionCultura::where('ecl_user', Auth::user()->id)->first();
        } else if ($encuesta == "Adoraciones") {
            $consul = EvaluacionAdoraciones::where('ea_user', Auth::user()->id)->first();
        } else {
            $date = false;
        }

        if (isset($consul) && $consul) {
            $date = true;
        }

        return $date;
    }

    /**
     * Metodo que permite crear los diferentes item que se pueden consultar en el modulo de curiosidades
     *
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @return ItemsModules
     */
    public static function generateItemCuriosidades()
    {
        //crear los diferentes items que va a tener el modulo por cada usuario en casa que no tenga creado los item
        $validate = ItemsModules::where('im_modulo', 'Curiosidades')->where('im_user', Auth::user()->id)->first();

        //si no trae registro entonces ingresa y crea
        if (!$validate) {
            
            
            //item agregar para mostrar en la vista
            $item = ['Culto a los gatos', 'Invención del mortero', 'Momificación'];

            foreach ($item as $value) {
                //devolver mensaje si existe, para confirmar en el vue
                $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
                
                ItemsModules::create([
                    'im_guid' => $token,
                    'im_modulo' => 'Curiosidades',
                    'im_color' => 'bg-blue',
                    'im_item' => $value,
                    'im_state' => true,
                    'im_total_visitas' => 0,
                    'im_user' => Auth::user()->id,
                ]);
            }
        }
    }
}
