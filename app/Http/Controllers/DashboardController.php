<?php

namespace App\Http\Controllers;

use App\Models\ItemsModules;
use Illuminate\Http\Request;
use App\Models\Configurations;
use App\Models\Contactenos;
use App\Models\TimeLineCultura;
use App\Models\TimeLineAdoraciones;
use App\Models\TimeLineCuriosidades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DNS;

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

    /**
     * Funcion que retorna la vista contactenos
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param
     * @return cultura
     */
    public function contactenos()
    {
        return view('contactenos');
    }

    /**
     * Funcion que retorna la vista para ver modulo de contactenos
     * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
     * @param
     * @return contactenos
     */
    public function sendContactForm(Request $request)
    {
        // Validación de campos del formulario
        $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                'email',
                function ($attribute, $value, $fail) {
                    [$user, $domain] = explode('@', $value);
                    if (!checkdnsrr($domain, 'MX')) {
                        $fail('El correo electrónico no tiene un dominio DNS válido.');
                    }
                },
            ],
            'message' => 'required',
        ]);

        // Lógica para enviar el correo o guardar los datos en la base de datos, por ejemplo
        // ...
        Contactenos::create([
            'email' => $request['email'],
            'name' => $request['name'],
            'description' => $request['message'],
            'guid' => Str::uuid(),
        ]);

        // Redireccionar al usuario después de enviar el formulario
        return redirect()->back()->with('status', '¡Gracias por contactarnos!');
    }
}
