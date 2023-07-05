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

            //devolver mensaje si existe, para confirmar en el vue
            $token = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token,
                'im_modulo' => 'Curiosidades',
                'im_color' => 'bg-blue',
                'im_item' => 'Culto a los gatos',
                'im_descripcion' => 'En el antiguo Egipto, los gatos eran venerados en gran medida debido a su conexión con la diosa Bastet, la deidad felina asociada con la protección, la fertilidad y la alegría. Bastet, representada con cabeza de leona o gata, era adorada y considerada una diosa benévola que otorgaba prosperidad y salud a aquellos que la honraban adecuadamente.',
                'im_img' => 'curiosidadesImg/gatos.jpg',
                'im_video' => 'https://www.youtube.com/embed/vkWXg_HNUqc',
                'im_frame' => '',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            $token1 = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token1,
                'im_modulo' => 'Curiosidades',
                'im_color' => 'bg-blue',
                'im_item' => 'Invención del mortero',
                'im_descripcion' => 'La invención del mortero en el antiguo Egipto marcó un hito significativo en el desarrollo de la arquitectura y la construcción. El mortero, una mezcla de arena, cal y agua, desempeñó un papel crucial en la creación de los monumentos y las estructuras duraderas por las que los egipcios son conocidos en todo el mundo.',
                'im_img' => 'curiosidadesImg/mortero.jpg',
                'im_video' => 'https://www.youtube.com/embed/rCwuyGgUW6g',
                'im_frame' => '',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]);

            //devolver mensaje si existe, para confirmar en el vue
            /* $token3 = strtoupper(substr(Str::uuid()->toString(), 0, 10));
            ItemsModules::create([
                'im_guid' => $token3,
                'im_modulo' => 'Curiosidades',
                'im_color' => 'bg-blue',
                'im_item' => 'Momificación',
                'im_descripcion' => '',
                'im_img' => '',
                'im_video' => '',
                'im_frame' => '',
                'im_total_visitas' => 0,
                'im_user' => Auth::user()->id,
            ]); */
        }
    }
}
