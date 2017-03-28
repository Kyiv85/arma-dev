@extends('frontend.layouts.base')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/personalizacion.css') }}">
@endsection

@section('content')

<section>
  <h2 class="hidden">ENCABEZADO</h2>

  <div class="row" id="personalizacion-header">
    <div class="col-xs-24">

      <div class="row is-flex">

        <div class="col-xs-14">
          <div class="row">
            <div class="col-md-4 col-md-offset-16 col-sm-4 col-sm-offset-16 hidden-xs" id="armatura-logo"> 
              <img src="{{ asset('img/logo-slider.png') }}" alt="Armatura Logo">
            </div>

            <div class="col-md-20 col-md-offset-2 col-sm-20 col-sm-offset-2 col-xs-24" id="personalizacion-text">
              <div class="row">
                <div class="col-xs-24">
                  <div class="text-center">
                    <p>ERES ÚNICO, DEMUÉSTRALO,</p>
                    <p>DISEÑA TU ARMATURA A TU MANERA.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-10">
          <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-24" id="personalizacion-img">
              <img src="{{ asset('img/personalizacion-principal.png') }}" alt="Personalización">
            </div>
          </div>
        </div>

      </div>

      <div class="row" id="personalizacion-servicios">

        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="text-center">
            <p><img class="hvr-sink" src="{{ asset('img/personalizacion-disenas.png') }}" alt="Tu diseñas">&nbsp;&nbsp;Tu diseñas</p>
          </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="text-center">
            <p><img class="hvr-sink" src="{{ asset('img/personalizacion-fabricamos.png') }}" alt="Nosotros Fabricamos">&nbsp;&nbsp;Nosotros Fabricamos</p>
          </div>
        </div>
        <div class="col-md-8 col-md-offset-0 col-sm-8 col-sm-offset-0 col-xs-20 col-xs-offset-2">
          <div class="text-center">
            <p><img class="hvr-sink" src="{{ asset('img/personalizacion-recibes.png') }}" alt="Recibes en tu domicilio">&nbsp;&nbsp;Recibes en tu domicilio</p>
          </div>
        </div>
      </div>
      
    </div>

    <div class="col-md-4 col-md-offset-10 col-sm-6 col-sm-offset-9 col-xs-12 col-xs-offset-6" id="personalizacion-btn">
      <a href="" class="btn btn-default btn-block">COMPRA AQUÍ</a>
    </div>

    <div class="col-xs-24" id="redireccionar">
      <div class="row">
        <div class="col-md-8 col-md-offset-0 col-sm-8 col-sm-offset-0 col-xs-12 col-xs-offset-6" id="btn-kanisport">
          <a href="#kanisport" class="btn btn-default btn-block tablinks" id="link-kanisport">KANI SPORT</a>
        </div>

        <div class="col-md-8 col-sm-8 col-xs-12" id="btn-kanicarbono">
          <a href="#kanicarbono" class="btn btn-default btn-block tablinks" id="link-kanicarbono">KANI CARBONO</a>
        </div>

        <div class="col-md-8 col-sm-8 col-xs-12" id="btn-toallas">
          <a href="#toallas" class="btn btn-default btn-block tablinks" id="link-toallas">TOALLAS</a>
        </div>
      </div>
    </div>

  </div>

</section>

<section>
  <div class="row contenido is-flex" id="kanicarbono">

    <div class="col-md-10 col-sm-10">
      <div class="thumbnail" id="thumbnail-kanicarbono">
        <img class="img-responsive" src="{{ asset('img/personalizacion-kanicarbono.jpg') }}" alt="KANI CARBONO">
        <div class="caption">
          <div class="text-center">
            <h3>KANI CARBONO</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-20 col-xs-offset-2 contenido-text">
      <p>Indestructibles, ni la kriptonita te hará daño. No podrás estar más protegido. La más alta tecnología en materiales para tu protección, la misma que es usada en deportes como la Formula 1 y por los jugadores del más alto nivel. Protección profesional, en menos de 50 gramos de peso. Si Messi fuera una canillera, fuera la KaniCarbono. ¡Crea ya! Tus propias y únicas Kani Carbono</p>
    </div>

  </div>
</section>

<section>
  <div class="row contenido is-flex hidden" id="kanisport">

    <div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 hidden-xs contenido-text">
      <p>Diseños originales y producto de calidad a un precio inmejorable. ¡Que no te duela ni la canilla ni la billetera! Únicas con nuestra tecnología CProLite que maximizan la comodidad, Protección y Ligereza. ¡Crea ya! Tus propias y únicas Kani Sport.</p>
    </div>

    <div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2">
      <div class="thumbnail" id="thumbnail-kanisport">
        <img class="img-responsive" src="{{ asset('img/personalizacion-kanisport.jpg') }}" alt="KANI SPORT">
        <div class="caption">
          <div class="text-center">
            <h3>KANI SPORT</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-20 col-xs-offset-2 visible-xs contenido-text">
      <p>Diseños originales y producto de calidad a un precio inmejorable. ¡Que no te duela ni la canilla ni la billetera! Únicas con nuestra tecnología CProLite que maximizan la comodidad, Protección y Ligereza. ¡Crea ya! Tus propias y únicas Kani Sport.</p>
    </div>

  </div>
</section>

<section>
  <div class="row contenido is-flex hidden" id="toallas">

    <div class="col-md-10 col-sm-10">
      <div class="thumbnail" id="thumbnail-toallas">
        <img class="img-responsive" src="{{ asset('img/personalizacion-toallas.jpg') }}" alt="TOALLAS">
        <div class="caption">
          <div class="text-center">
            <h3>TOALLAS</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-20 col-xs-offset-2 contenido-text">
      <p>¿Qué de especial puede tener una toalla? En este caso todo. Son multifuncionales, se secan más rápido que Antonio Valencia y son fáciles de transportar. Supera el trauma de usar la toalla de tu abuela y ten la tuya. ¡Crea ya tus propias y únicas Toallas Compactas Armatura!</p>
    </div>

  </div>
</section>

<section>
  <div class="row" id="pasos">
    <div class="col-xs-24">
      <div class="row is-flex">

        <div class="col-md-10 col-sm-8 col-xs-24" id="pasos-title">
          <div class="text-center">
            <h2>PASOS</h2>
          </div>
        </div>

        <div class="col-md-14 col-sm-16">

          <div class="row">
            <div class="col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2 col-xs-4">
              <p><span class="circle hvr-bounce-in">1</span></p>
            </div>
            <div class="col-md-16 col-sm-16 col-xs-20 pasos-text paso1-kanisport paso1-kanicarbono" >
              <p>Hazlas únicas! Usa nuestra aplicación para que incluyas lo que desees (tu cábala, pasión, familia, ídolos, selfies, etc.), máximo hasta 4 imágenes por canillera, 8 por par. Incluye una frase, nombre, apodo, numero, etc.</p>
            </div>
            <div class="col-md-16 col-sm-16 col-xs-20 pasos-text hidden paso1-toallas">
              <p>Hazlas únicas! Usa nuestra aplicación para que incluyas lo que desees (nombres, frases o apodos de hasta 15 caracteres).</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2 col-xs-4">
              <p><span class="circle hvr-bounce-in">2</span></p>
            </div>
            <div class="col-md-16 col-sm-16 col-xs-20">
              <p>Hagámoslas realidad! Confirma el pedido con tu pago</p>
            </div>
          </div> 

          <div class="row">
            <div class="col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2 col-xs-4">
              <p><span class="circle hvr-bounce-in">3</span></p>
            </div>
            <div class="col-md-16 col-sm-16 col-xs-20 pasos-text paso3-kanisport paso3-kanicarbono">
              <p>Enviamos tu pedido directo a tu casa, trabajo o donde desees. Kani Sport envió entre 3 a 10 días laborables. Kani Carbono 5 a 10 días laborables.</p>
            </div>
            <div class="col-md-16 col-sm-16 col-xs-20 pasos-text hidden paso3-toallas" >
              <p>Enviamos tu pedido directo a tu casa, trabajo o donde desees. Tiempo de envió entre 3 a 10 días laborables.</p>
            </div>
          </div>  

        </div>
      </div>
    </div>

    <div class="col-md-4 col-md-offset-10 col-sm-6 col-sm-offset-9 hidden-xs" id="pasos-btn">
      <a href="#" class="btn btn-default btn-block">PERSONALIZA AQUÍ</a>
    </div>

  </div>
</section>

@endsection

@section('scripts')
<script src="{!! asset('js/scroll.min.js') !!}"></script>
<script src="{!! asset('js/personalizacion.js') !!}"></script>
@endsection