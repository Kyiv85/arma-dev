<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Contacto;

class ContactoCreado extends Mailable
{
  use Queueable, SerializesModels;

  public $contacto;

  public function __construct(Contacto $contacto)
  {
    $this->contacto = $contacto;
  }

  public function build()
  {
    return $this->subject('Contacto creado')
      ->view('emails.contacto_creado');
  }
}
