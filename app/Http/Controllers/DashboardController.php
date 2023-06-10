<?php

namespace App\Http\Controllers;

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
        return view('adoraciones_divinas');
    }


    /**
     * Funcion que retorna la vista para ver el contenido de curiosidades
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param  
     * @return curiosidades
     */
    public function curiosidades()
    {
        return view('curiosidades');
    }

    /**
     * Funcion que retorna la vista para ver el contenido de cultura
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param  
     * @return cultura
     */
    public function cultura()
    {
        return view('cultura');
    }
}
