<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\RegisterTokenMail;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DNS;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                function ($attribute, $value, $fail) {
                    [$user, $domain] = explode('@', $value);
                    if (!checkdnsrr($domain, 'MX')) {
                        $fail('El correo electrónico no tiene un dominio DNS válido.');
                    }
                },
                'string',
                'max:255', 'unique:' . User::class
            ],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'username' => ['required', 'string', 'max:100', 'unique:' . User::class],

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'rol'      => 2,
            'registration_token' => Str::uuid(), // Generar un token de registro único
        ]);

        event(new Registered($user));

        Auth::login($user);

        // Enviar correo electrónico con el token de registro
        Mail::to($user->email)->send(new RegisterTokenMail($user->registration_token));

        // Contar el total de usuarios registrados
        $totalUsers = User::count();

        // Verificar si se alcanzó el total de 100 usuarios
        if ($totalUsers % 100 === 0) {
            // Obtener un usuario al azar
            $randomUser = User::inRandomOrder()->first();

            // Enviar correo electrónico al usuario ganador
            $this->sendPrizeEmail($randomUser);

            // Enviar correo electrónico a todos los usuarios
            $this->sendWinnerAnnouncementEmail($randomUser);
        }

        return redirect(RouteServiceProvider::HOME);
    }

    private function sendPrizeEmail(User $user)
    {
        // Código para enviar correo electrónico al usuario
        $subject = '¡Felicitaciones! ¡Has ganado un premio!';
        $message = 'Estimado ' . $user->name . ', has sido seleccionado al azar y has ganado un premio. ¡Enhorabuena!';

        $bccEmails = [
            'jhon.popo@correounivalle.edu.co',
            'correo2@example.com',
        ];

        // Envío del correo electrónico usando la clase Mail de Laravel
        Mail::raw($message, function ($mail) use ($user, $subject, $bccEmails) {
            $mail->to($user->email)
                ->subject($subject)
                ->bcc($bccEmails); // Agregar la dirección de correo de la empresa en BCC
        });
    }

    private function sendWinnerAnnouncementEmail(User $winner)
    {
        // Código para enviar correo electrónico a todos los usuarios
        $subject = 'Anuncio del ganador del premio';
        $message = 'Estimados usuarios, nos complace anunciar que ' . $winner->name . ' ha sido seleccionado al azar y ha ganado el premio. ¡Felicidades!';

        // Obtener todos los usuarios
        $users = User::all();

        // Envío del correo electrónico a todos los usuarios usando la clase Mail de Laravel
        foreach ($users as $user) {
            Mail::raw($message, function ($mail) use ($user, $subject) {
                $mail->to($user->email)
                    ->subject($subject);
            });
        }
    }
}
