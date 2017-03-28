<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Contacto;
use App\Mail\ContactoCreado;
use Illuminate\Support\Facades\Mail;

class ContactosController extends Controller
{
  protected $_contacto;

  protected function _enviar_correo_de_contacto($id)
  {
    $contacto = $this->_contacto->findOrFail($id);

    Mail::to('info@armatura.com')
      ->bcc('jan.pereira@e-channel.ec')
      ->send(new ContactoCreado($contacto));
  }

  public function __construct(Contacto $contacto)
  {
    $this->_contacto = $contacto;
  }

  public function enviar_contacto(Request $request)
  {
    $this->validate($request, [
      'correo' => 'bail|required|string|email',
      'nombre' => 'bail|required|string|max:255',
      'telefono' => 'string|nullable|max:255',
      'comentarios' => 'string|nullable|max:500',
    ]);

    $atributos = $request->all();

    $contacto = $this->_contacto->create($atributos);

    if ($request->input('enviar_correo')) {
      $this->_enviar_correo_de_contacto($contacto->id);
    }

    return response()->json([
      'enviado' => true
      ]);
  }
}