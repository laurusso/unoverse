<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmationNovoEmail extends Mailable
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
            ->subject('Confirmação de Email')
            ->view('email.newconfirmation'); // Certifique-se de criar a view blade em resources/views/email/confirmation.blade.php
    }
}
