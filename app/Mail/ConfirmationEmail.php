<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;



class ConfirmationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $confirmationCode;

    public function __construct($user, $confirmationCode)
    {
        $this->user = $user;
        $this->confirmationCode = $confirmationCode;
    }

    public function build()
    {
        return $this
            ->from('unoverse@projetoscti.com.br', 'unoverse@projetoscti.com.br')
            ->subject('Confirmação de Cadastro')
            ->view('email.confirmation'); // Crie uma view blade para o conteúdo do e-mail
    }
}
