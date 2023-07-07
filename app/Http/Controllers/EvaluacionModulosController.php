<?php

namespace App\Http\Controllers;

use App\Models\EvaluacionAdoraciones;
use App\Models\EvaluacionCultura;
use App\Models\Preguntas;
use App\Models\Respuestas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\EvaluacionCuriosidades;
use App\Models\ItemsModules;
use App\Models\PreguntaAbierta;
use Illuminate\Support\Facades\Redirect;

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
    public function evaluacion_curiosidad()
    {
        //traer las preguntas del modulo curiosidades
        $questions = Preguntas::where('p_tipo', 'Curiosidades')->get();
        return view('evaluaciones.curiosidadesResponse', compact('questions'));
    }

    /**
     * Funcion que almacena las respuesta enviada por un usuario sobre
     * lo visto en curiosidades
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param  $data
     * @return curiosidades
     */
    public function storeCuriosidad(Request $request)
    {
        //dd($request['response']);

        /*  crear metodo para recorrer los id que llegaron del formulario y sacar con el id
        *   Nombre de la pregunta con el id de la foranea
        *   Nombre de la pregunta con el id de la pregunta traido
        *   LLamar a la tabla de curiosidades para guardar el estado
        */

        foreach ($request['response'] as $value) {
            //traer la respuesta
            $respuesta = Respuestas::where('id', $value)->first();
            $pregunta = Preguntas::where('id', $respuesta->r_id_pregunta)->first();

            EvaluacionCuriosidades::create([
                'ec_pregunta' => $pregunta->p_pregunta,
                'ec_respuesta' => $respuesta->r_respuesta,
                'ec_resultado' => $respuesta->r_correcta,
                'ec_user' => Auth::user()->id
            ]);
        }

        //almacenar respuesta abierta
        PreguntaAbierta::create([
            'pa_pregunta' => 'Reflexión modulo curiosidades',
            'pa_respuesta' => $request['answeropen'],
            'pa_modulo' => 'Curiosidades',
            'pa_user' => Auth::user()->id
        ]);

        //colocar mensaje a retornar al contestar en vista principal
        return Redirect::route('dashboard')->with('status', 'Excelente has dado un paso mas en Civilización Egipcia, al responder Curiosidades.');
        return Redirect::to('dashboard');
    }

    /**
     * Funcion que retorna la vista para ver el contenido
     * de evalución de cultura
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param
     * @return curiosidades
     */
    public function evaluacion_cultura()
    {
        //traer las preguntas del modulo curiosidades
        $questions = Preguntas::where('p_tipo', 'Culturales')->get();
        return view('evaluaciones.culturaResponse', compact('questions'));
    }

    /**
     * Funcion que almacena las respuesta enviada por un usuario sobre
     * lo visto en cultura
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param  $data
     * @return cultura
     */
    public function storeCultura(Request $request)
    {
        //dd($request['response']);

        /*  crear metodo para recorrer los id que llegaron del formulario y sacar con el id
        *   Nombre de la pregunta con el id de la foranea
        *   Nombre de la pregunta con el id de la pregunta traido
        *   LLamar a la tabla de curiosidades para guardar el estado
        */

        foreach ($request['response'] as $value) {
            //traer la respuesta
            $respuesta = Respuestas::where('id', $value)->first();
            $pregunta = Preguntas::where('id', $respuesta->r_id_pregunta)->first();

            EvaluacionCultura::create([
                'ecl_pregunta' => $pregunta->p_pregunta,
                'ecl_respuesta' => $respuesta->r_respuesta,
                'ecl_resultado' => $respuesta->r_correcta,
                'ecl_user' => Auth::user()->id
            ]);
        }
        //colocar mensaje a retornar al contestar en vista principal
        return Redirect::to('dashboard');
    }

    /**
     * Funcion que retorna la vista para ver el contenido
     * de evalución de cultura
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param
     * @return curiosidades
     */
    public function evaluacion_adoraciones()
    {
        //traer las preguntas del modulo curiosidades
        $questions = Preguntas::where('p_tipo', 'Adoraciones')->get();
        return view('evaluaciones.adoracionesResponse', compact('questions'));
    }

    /**
     * Funcion que almacena las respuesta enviada por un usuario sobre
     * lo visto en cultura
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param  $data
     * @return cultura
     */
    public function storeAdoraciones(Request $request)
    {
        //dd($request['response']);

        /*  crear metodo para recorrer los id que llegaron del formulario y sacar con el id
        *   Nombre de la pregunta con el id de la foranea
        *   Nombre de la pregunta con el id de la pregunta traido
        *   LLamar a la tabla de curiosidades para guardar el estado
        */

        foreach ($request['response'] as $value) {
            //traer la respuesta
            $respuesta = Respuestas::where('id', $value)->first();
            $pregunta = Preguntas::where('id', $respuesta->r_id_pregunta)->first();

            EvaluacionAdoraciones::create([
                'ea_pregunta' => $pregunta->p_pregunta,
                'ea_respuesta' => $respuesta->r_respuesta,
                'ea_resultado' => $respuesta->r_correcta,
                'ea_user' => Auth::user()->id
            ]);
        }

        //colocar mensaje a retornar al contestar en vista principal
        return Redirect::to('dashboard');
    }

    /**
     * Funcion que permite cambiar el color de un item y contador de la visitas del mismo
     *
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param  $data
     * @return true
     */
    public function actualizarEstado(Request $request)
    {
        //guid traido para realizar el cambio
        $guid = $request->input('guid');

        // Lógica para actualizar el estado en la base de datos utilizando el GUID
        $change = ItemsModules::where('im_guid', $guid)->first();
        
        //trae el total que hay en el momento 
        $total = $change->im_total_visitas;

        // Incrementar la variable 'total' en uno
        $total++;

        //cambiar color 
        $change->im_color = 'bg-red-600';
        $change->im_total_visitas = $total;
        $change->save();
        
        return response()->json(['success' => true]);
    }

    public function ver_evaluacion_curiosidad(){
        return view('evaluaciones.showCuriosidades');
    }

    public function ver_evaluacion_cultura(){
        return view('evaluaciones.showCultura');
    }

    public function ver_evaluacion_adoraciones(){
        return view('evaluaciones.showAdoraciones');
    }
}
