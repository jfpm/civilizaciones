<?php

namespace App\Http\Controllers;

use App\Models\TimeLineAdoraciones;
use App\Models\TimeLineCultura;
use App\Models\TimeLineCuriosidades;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /**
     * Funcion que retorna la vista para ver el contenido de adoraciones divinas
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param
     * @return adooraciones_divinas
     */
    public function adoraciones_divinas()
    {
        $events = TimeLineAdoraciones::showTimeLineAdoraciones();
        return view('adoraciones_divinas', compact('events'));
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
        return view('curiosidades', compact('events'));
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
