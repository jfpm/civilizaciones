<?php

namespace App\Http\Controllers;

use App\Models\ItemsModules;
use Illuminate\Http\Request;
use App\Models\Configurations;
use App\Models\TimeLineCultura;
use App\Models\TimeLineAdoraciones;
use App\Models\TimeLineCuriosidades;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    /**
     * Funcion que retorna la vista principal del sistema despues de logueado
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param
     * @return dashboard
     */
    public function index()
    {
        $showCuriosidad = Configurations::validateSurvey("Curiosidades");
        $showAdoracion = Configurations::validateSurvey("Adoraciones");
        $showCultura = Configurations::validateSurvey("Culturales");
        return view('dashboard', compact('showCuriosidad','showAdoracion','showCultura'));
    }

    /**
     * Funcion que retorna la vista para ver el contenido de adoraciones divinas
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param
     * @return adooraciones_divinas
     */
    public function adoraciones_divinas()
    {
        $events = TimeLineAdoraciones::showTimeLineAdoraciones();
        //llamar metodo para validar si ya se creo los items sino que se creen
        $consulItem = Configurations::generateItemAdoraciones();
        $itemsAdoraciones = ItemsModules::where('im_modulo', 'Adoraciones')->where('im_user', Auth::user()->id)->get();
        return view('adoraciones_divinas', compact('events', 'itemsAdoraciones'));
    }


    /**
     * Funcion que retorna la vista para ver el contenido de curiosidades
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param
     * @return curiosidades
     */
    public function curiosidades()
    {
        $events = TimeLineCuriosidades::showTimeLineCuriosidades();
        //llamar metodo para validar si ya se creo los items sino que se creen
        $consulItem = Configurations::generateItemCuriosidades();
        $itemsCuriosidades = ItemsModules::where('im_modulo', 'Curiosidades')->where('im_user', Auth::user()->id)->get();
        return view('curiosidades', compact('events','itemsCuriosidades'));
    }

    /**
     * Funcion que retorna la vista para ver el contenido de cultura
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param
     * @return cultura
     */
    public function cultura()
    {
        $events = TimeLineCultura::showTimeLineCultura();
        return view('cultura', compact('events'));
    }


    /**
     * Funcion que retorna la vista para ver el contenido de cultura
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param
     * @return cultura
     */
    public function terminos()
    {
        return view('terminos');
    }
}
