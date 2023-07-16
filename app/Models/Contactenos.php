<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contactenos extends Model
{
    use HasFactory;

    /**
    * Modelo Contactenos
    *
    * @author Jhon Freddy Popo Moreno <jhon.popo@correounivalle.edu.co>
    * @package Dashboard
    * @subpackage contactenos
    */
    protected $table = 'contactenos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'email',
        'name',
        'description',
        'guid',
        'email_sent'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($contact) {
            if (!$contact->email_sent) {
                $contact->sendAutoReply();
            }
        });
    }

    public function sendAutoReply()
    {
        // Lógica para enviar la respuesta automática al correo electrónico del contacto
        // Aquí puedes utilizar el servicio de correo de Laravel o cualquier otro servicio de correo electrónico

        // Por ejemplo, utilizando el servicio de correo de Laravel:
        Mail::send('emails.auto_reply', ['guid' => $this->guid,'name' => $this->name], function ($message) {
            $message->to($this->email)
                ->subject('Respuesta automática - Gracias por contactarnos');
        });

        // Marcar el campo 'email_sent' como true para evitar enviar múltiples respuestas automáticas
        $this->email_sent = true;
        $this->save();
    }

}
