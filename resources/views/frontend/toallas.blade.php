@extends('frontend.layouts.base')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/toallas.css') }}">
@endsection

@section('content')

<section>
  <h2 class="hidden">TOALLAS</h2>
  <div class="row" id="toallas-header">
    <div class="col-xs-24">

      <div class="row is-flex">

        <div class="col-md-12 col-sm-12 col-xs-24 header-content">

          <div class="row is-flex-mobile">

            <div class="col-md-10 col-md-offset-4 col-sm-12 col-sm-offset-2 hidden-xs">
              <div class="text-center">
                <img class="img-responsive" id="armatura-logo" src="{{ asset('img/logo-slider.png') }}" alt="Armatura Logo">
              </div>
            </div>

            <div class="col-md-20 col-md-offset-4 col-sm-20 col-sm-offset-2 col-xs-20 col-xs-offset-2" id="header-text">
              <h3>TOALLAS</h3>
              <h3>MICROFIBRA</h3>
              <div id="header-text-especial">
                <p>Que de especial puede tener una toalla?</p>
                <p>En este caso todo.</p>
              </div>
              <div id="header-text-tecnologia">
                <p>CON TECNOLOGÍA</p>
              </div>
              <div id="header-text-secafast">
                <p>SECA&nbsp;<img class="hvr-wobble-horizontal" id="header-text-secafast-img" src="{{ asset('img/secafast-chevron.png') }}" alt="Armatura Logo">&nbsp;FAST</p>
              </div>
            </div>

          </div>

        </div>
        <div class="col-md-12 col-sm-12 col-xs-24 header-img">
          <img class="img-responsive" id="armatura-img" src="{{ asset('img/slider-3.png') }}" alt="Toallas">
        </div>
      </div>
    </div>
  </div>

  <div class="row" id="toallas-header-footer">
    <div class="col-md-24 col-sm-24 col-xs-24" id="toallas-header-footer-position">
      <div class="text-center">
        <a href="#beneficios" class="hvr-icon-hang">
          BENEFICIOS TECNOLOGÍA SECAFAST
        </a>
      </div>
    </div>
  </div>
</section>

<section>
  <h2 class="hidden">MARCAS</h2>
  <div class="row marcas" id="beneficios">

    <div class="col-md-12 col-sm-12 col-xs-24" id="col-marca">
      <div class="text-center">
        <a href="#" class="tabslider" id="link-armatura">
          <h3 class="active">ARMATURA</h3>
        </a>
      </div>
    </div><!-- fin de armatura -->
    
    <div class="col-md-12 col-sm-12 col-xs-24">
      <div class="text-center">
        <a href="#" class="tabslider" id="link-liga">
          <h3>LIGA DE QUITO</h3>
        </a>
      </div>
    </div><!-- fin de liga de quito -->

  </div>
</section>

<section>
  <h2 class="hidden">TAMAÑOS</h2>
  <div class="row">
    <div class="col-sm-24" id="separador-marcas"></div>
    
    <div class="col-md-13 col-sm-13 col-xs-24" id="tamano-toallas">

      <img class="img-responsive" id="tamano-toallas-img" src="{{ asset('img/tamano-toallas.png') }}" alt="Tamaños de toallas">
      
      <div class="text-center" id="tamano-toallas-colores">
        <h3>COLORES</h3>
      </div>
      
      <img class="img-responsive" id="tamano-toallas-colores-img" src="{{ asset('img/colores-toallas.png') }}" alt="Colores de toallas">

      <div id="tamano-toallas-porcentajes">
        <p><span class="circle hvr-bounce-in">80%</span>&nbsp;&nbsp;<span class="circle-text">POLIESTER</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="circle hvr-bounce-in">20%</span>&nbsp;&nbsp;<span class="circle-text">POLIAMIDA</span></p>
      </div>

    </div>

    <div class="col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-18 col-xs-offset-3">

      <div id="slider-container-armatura" class="slider-container cS-hidden">
        <ul id="slider-armatura">
          <li data-thumb="{{ asset('img/toalla-armatura-slide-1.png') }}">
            <img src="{{ asset('img/toalla-armatura-slide-1.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/toalla-armatura-negra.png') }}">
            <img src="{{ asset('img/toalla-armatura-negra.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/toalla-armatura-naranja.png') }}">
            <img src="{{ asset('img/toalla-armatura-naranja.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/toalla-armatura-azul.png') }}">
            <img src="{{ asset('img/toalla-armatura-azul.png') }}" />
          </li>
        </ul><!-- fin de slider-armatura -->
      </div>

      <div id="slider-container-liga" class="slider-container cS-hidden">
        <ul id="slider-liga">
          <li data-thumb="{{ asset('img/toalla-liga-negra.png') }}">
            <img src="{{ asset('img/toalla-liga-negra.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/toalla-liga-naranja.png') }}">
            <img src="{{ asset('img/toalla-liga-naranja.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/toalla-liga-azul.png') }}">
            <img src="{{ asset('img/toalla-liga-azul.png') }}" />
          </li>
        </ul><!-- fin de slider-ldu -->
      </div>

    </div>
  </div>
</section>

<section>
  <div class="row">

    <div class="col-xs-24">
      <div class="text-center">
        <h2 id="beneficios-title">BENEFICIOS DE LA TECNOLOGÍA SECAFAST</h2>
      </div>
    </div>
  </div>

  <div class="row beneficios">

    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-6">
      <div class="thumbnail">
      <img class="img-responsive hvr-skew-backward" src="{{ asset('img/bolsa-viaje.png') }}" alt="Bolsa de viaje">
        <div class="caption text-center">
          <h3>BOLSA DE VIAJE</h3>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail">
      <img class="img-responsive hvr-skew-backward" src="{{ asset('img/clip-colgar.png') }}" alt="Clip para colgar">
        <div class="caption text-center">
          <h3>CLIP PARA COLGAR</h3>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail">
      <img class="img-responsive hvr-skew-backward" src="{{ asset('img/ultra-absorbente.png') }}" alt="Ultra absorbente">
        <div class="caption text-center">
          <h3>ULTRA ABSORBENTE</h3>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-6">
      <div class="thumbnail">
      <img class="img-responsive hvr-skew-backward" src="{{ asset('img/anti-bacterial.png') }}" alt="Anti-bacterial">
        <div class="caption text-center">
          <h3>ANTI BACTERIAL</h3>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail">
      <img class="img-responsive hvr-skew-backward" src="{{ asset('img/secado-rapido.png') }}" alt="Secado rápido">
        <div class="caption text-center">
          <h3>SECADO RÁPIDO</h3>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail">
      <img class="img-responsive hvr-skew-backward" src="{{ asset('img/ultra-compacto.png') }}" alt="Ultra Compacto">
        <div class="caption text-center">
          <h3>ULTRA COMPACTO</h3>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail">
      <img class="img-responsive hvr-skew-backward" src="{{ asset('img/menos-lavadas.png') }}" alt="Menos Lavadas">
        <div class="caption text-center">
          <h3>MENOS LAVADAS</h3>
        </div>
      </div>
    </div>

    <div id="beneficios-fila" class="col-md-22 col-md-offset-1 col-sm-21 col-sm-offset-1"></div>

    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-6">
      <div class="thumbnail">
      <img class="img-responsive hvr-skew-backward" src="{{ asset('img/playa.png') }}" alt="Playa">
        <div class="caption text-center">
          <h3>PLAYA</h3>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail">
      <img class="img-responsive hvr-skew-backward" src="{{ asset('img/gimnasio.png') }}" alt="Gimnasio">
        <div class="caption text-center">
          <h3>GIMNASIO</h3>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail">
      <img class="img-responsive hvr-skew-backward" src="{{ asset('img/bano.png') }}" alt="Baño">
        <div class="caption text-center">
          <h3>BAÑO</h3>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-6">
      <div class="thumbnail">
      <img class="img-responsive hvr-skew-backward" src="{{ asset('img/actividades.png') }}" alt="Actividades">
        <div class="caption text-center">
          <h3>ACTIVIDADES</h3>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail">
      <img class="img-responsive hvr-skew-backward" src="{{ asset('img/deportes.png') }}" alt="Deportes">
        <div class="caption text-center">
          <h3>DEPORTES</h3>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0 col-xs-6 col-xs-offset-6">
      <div class="thumbnail">
      <img class="img-responsive hvr-skew-backward" src="{{ asset('img/yoga.png') }}" alt="Yoga">
        <div class="caption text-center">
          <h3>YOGA</h3>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail">
      <img class="img-responsive hvr-skew-backward" src="{{ asset('img/viajes.png') }}" alt="Viajes">
        <div class="caption text-center">
          <h3>VIAJES</h3>
        </div>
      </div>
    </div>

  </div>

  <div class="row" id="beneficios-mensaje">
    <div class="col-xs-24">
      <div class="text-center">
        <p id="secar-mascotas">Para lo que se te ocurra, Incluso sirve para secar a tus Mascotas</p>
        <p id="imaginacion-limite">Tu imaginación será el único limite.</p>
      </div>
    </div>
  </div>
</section>

@endsection

@section('scripts')
<script src="{!! asset('js/lightslider.js') !!}"></script>
<script src="{!! asset('js/toallas.js') !!}"></script>

<script>
  let opts_slider = {
    gallery: true,
    item: 1,
    auto: true,
    speed: 600,
    pause: 3000,
    pauseOnHover: true,
    loop: true,
    slideMargin: 10,
    thumbItem: 3,
    addClass: 'slider-productos',
    autoWidth: false
  };

  $('#slider-armatura').lightSlider(opts_slider);
  $('#slider-liga').lightSlider(opts_slider);
</script>
@endsection