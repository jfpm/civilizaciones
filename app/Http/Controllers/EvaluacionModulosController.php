<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use Illuminate\Http\Request;

class EvaluacionModulosController extends Controller
{
    //

    /**
     * Funcion que retorna la vista para ver el contenido
     * de evalución de curiosidades
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param
     * @return curiosidades
     */
    public function evaluacion_curiosidad(){
        //traer las preguntas del modulo curiosidades
        $questions = Preguntas::where('p_tipo','Curiosidades')->get();
        return view('evaluaciones.curiosidadesResponse', compact('questions'));
    }

    /**
     * Funcion que almacena las respuesta enviada por un usuario sobre
     * lo visto en curiosidades
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param  $data
     * @return curiosidades
     */
    public function storeCuriosidad(Request $request){
        dd($request->all());
    }
}
