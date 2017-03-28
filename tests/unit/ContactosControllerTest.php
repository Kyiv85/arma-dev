<?php

use App\Contacto;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactosControllerTest extends TestCase
{
  use DatabaseMigrations;

  protected $_contacto_model_mock;

  public function setUp()
  {
    parent::setUp();

    $this->_contacto_model_mock = Mockery::mock('App\Contacto');
  }

  public function tearDown()
  {
    parent::tearDown();

    Mockery::close();
  }

  public function test_el_usuario_recibe_una_respuesta_exitosa_si_envia_todos_los_atributos()
  {    
    $atributos = factory(Contacto::class)->make();

    $this->_contacto_model_mock
      ->shouldReceive('create')
      ->once()
      ->andReturn($this->_contacto_model_mock);

    $this->app->instance('App\Contacto', $this->_contacto_model_mock);

    $this->json('POST', '/api/v1/enviar_contacto', $atributos->attributesToArray())
      ->seeJson([
        'enviado' => true,
      ])
      ->assertResponseStatus(200);
  }

  public function test_el_usuario_recibe_una_respuesta_con_error_ya_que_correo_no_ha_sido_definido()
  {    
    $atributos = factory(Contacto::class)->make([
      'correo' => null
      ]);

    $this->_contacto_model_mock
      ->shouldReceive('create')
      ->never()
      ->andReturn($this->_contacto_model_mock);

    $this->app->instance('App\Contacto', $this->_contacto_model_mock);

    $this->json('POST', '/api/v1/enviar_contacto', $atributos->attributesToArray())
      ->assertResponseStatus(422);
  }

  public function test_el_usuario_recibe_una_respuesta_con_error_ya_que_correo_no_tiene_formato_adecuado()
  {    
    $atributos = factory(Contacto::class)->make([
      'correo' => 'hola'
      ]);

    $this->_contacto_model_mock
      ->shouldReceive('create')
      ->never()
      ->andReturn($this->_contacto_model_mock);

    $this->app->instance('App\Contacto', $this->_contacto_model_mock);

    $this->json('POST', '/api/v1/enviar_contacto', $atributos->attributesToArray())
      ->assertResponseStatus(422);
  }

  public function test_el_usuario_recibe_una_respuesta_con_error_ya_que_nombre_no_ha_sido_definido()
  {    
    $atributos = factory(Contacto::class)->make([
      'nombre' => null
      ]);

    $this->_contacto_model_mock
      ->shouldReceive('create')
      ->never()
      ->andReturn($this->_contacto_model_mock);

    $this->app->instance('App\Contacto', $this->_contacto_model_mock);

    $this->json('POST', '/api/v1/enviar_contacto', $atributos->attributesToArray())
      ->assertResponseStatus(422);
  }

  public function test_el_usuario_recibe_una_respuesta_con_error_ya_que_nombre_no_tiene_formato_adecuado()
  {    
    $atributos = factory(Contacto::class)->make([
      'nombre' => ''
      ]);

    $this->_contacto_model_mock
      ->shouldReceive('create')
      ->never()
      ->andReturn($this->_contacto_model_mock);

    $this->app->instance('App\Contacto', $this->_contacto_model_mock);

    $this->json('POST', '/api/v1/enviar_contacto', $atributos->attributesToArray())
      ->assertResponseStatus(422);
  }
}