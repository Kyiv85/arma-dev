<?php

use App\Contacto;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Mail\ContactoCreado;
use Illuminate\Support\Facades\Mail;

class ContactosControllerIntegrationTest extends TestCase
{
  use DatabaseMigrations;

  public function test_el_usuario_recibe_una_respuesta_exitosa_si_envia_todos_los_atributos()
  {    
    $atributos = factory(Contacto::class)->make();

    $this->json('POST', '/api/v1/enviar_contacto', $atributos->attributesToArray())
      ->seeJson([
        'enviado' => true,
      ])
      ->assertResponseStatus(200);

    $this->seeInDatabase('contactos', [
      'nombre' => $atributos->nombre,
      'correo' => $atributos->correo,
      'telefono' => $atributos->telefono,
      'comentarios' => $atributos->comentarios
    ]);
  }

  public function test_el_usuario_recibe_una_respuesta_exitosa_si_envia_todos_los_atributos_y_el_sistema_envia_un_correo()
  { 
    Mail::fake();

    $atributos = factory(Contacto::class)->make([
      'enviar_correo' => true
      ]);

    $this->json('POST', '/api/v1/enviar_contacto', $atributos->attributesToArray())
      ->seeJson([
        'enviado' => true,
      ])
      ->assertResponseStatus(200);

    Mail::assertSent(ContactoCreado::class, function ($mail) use ($atributos) {
      return $mail->contacto->correo === $atributos->correo;
    });

    Mail::assertSentTo(['info@armatura.com'], ContactoCreado::class);
  }
}