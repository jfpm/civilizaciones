<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegisterTokenMail extends Mailable
{
    use Queueable, SerializesModels;

    public $registrationToken;

    /**
     * Create a new message instance.
     *
     * @param string $registrationToken
     */
    public function __construct(string $registrationToken)
    {
        $this->registrationToken = $registrationToken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.register_token')
            ->subject('Token de registro')
            ->with([
                'registrationToken' => $this->registrationToken,
            ]);
    }
}
