@extends('frontend.layouts.base')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/imagehover.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/clientes.css') }}">
@endsection

@section('content')

<section>
  <div class="row" id="clientes-header">

    <div class="col-xs-24" id="armatura-logo">
      <img src="{{ asset('img/logo-slider.png') }}" alt="Armatura Logo">
    </div>

    <div class="col-xs-24" id="clientes-title">
      <div class="text-center">
        <h2>CLIENTES</h2>
        <h3>Productos únicos para personas únicas</h3>
      </div>
    </div>

    <div class="col-xs-24" id="clientes-header-logos">
      <div class="row">

        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 clientes-logo">
          <figure class="imghvr-fade">
            <img src="{{ asset('img/norberto-araujo.jpg') }}" alt="Norberto Araujo">
            <figcaption>
              <div class="text-center">
                <h3>Norberto Araujo</h3>
                <p class="hidden-xs">Defensa</p>
              </div>
            </figcaption>
          </figure>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-8 clientes-logo">
          <figure class="imghvr-fade">
            <img src="{{ asset('img/daniel-angulo.jpg') }}" alt="Daniel Angulo">
            <figcaption>
              <div class="text-center">
                <h3>Daniel Angulo</h3>
                <p class="hidden-xs">Delantero</p>
              </div>
            </figcaption>
          </figure>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-8 clientes-logo">
          <figure class="imghvr-fade">
            <img src="{{ asset('img/fernando-guerrero.jpg') }}" alt="Fernando Guerrero">
            <figcaption>
              <div class="text-center">
                <h3>Fernando Guerrero</h3>
                <p class="hidden-xs">Delantero</p>
              </div>
            </figcaption>
          </figure>
        </div>

      </div>
    </div>

  </div>

  <div class="row row-logos">

    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 clientes-logo">
      <figure class="imghvr-fade">
        <img src="{{ asset('img/fernando-hidalgo.jpg') }}" alt="Fernando Hidalgo">
        <figcaption>
          <div class="text-center">
            <h3>Fernando Hidalgo</h3>
            <p class="hidden-xs">Mediocampista</p>
          </div>
        </figcaption>
      </figure>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-8 clientes-logo">
      <figure class="imghvr-fade">
        <img src="{{ asset('img/jose-cevallos.jpg') }}" alt="Jose Cevallos">
        <figcaption>
          <div class="text-center">
            <h3>José Cevallos</h3>
            <p class="hidden-xs">Mediocampista</p>
          </div>
        </figcaption>
      </figure>
    </div>

  </div>
</section>

<section>
  <div class="row logos-externos">
    <div class="col-md-22 col-md-offset-1 col-sm-22 col-sm-offset-1 col-xs-22 col-xs-offset-1">
      <h2>CLIENTES EMPRESARIALES</h2>
    </div>
    <div class="col-xs-24">
      <ul id="slider-clientes" class="cs-hidden">

        <li>
          <div class="text-center">
            <img src="{{ asset('img/liga-deportiva-universitaria.jpg') }}" alt="Liga Deportiva Universitaria">
            <h3>Liga Deportiva Universitaria</h3>
          </div>
        </li>

        <li>
          <div class="text-center">
            <img src="{{ asset('img/liga-deportiva-universitaria.jpg') }}" alt="Escuelas de Liga de Quito">
            <h3>Escuelas de Liga de Quito</h3>
          </div>
        </li>

        <li>
          <div class="text-center">
            <img src="{{ asset('img/escuelas-futbol-nacional.jpg') }}" alt="Escuela Rumiñahui del Club El Nacional">
            <h3>Escuela Rumiñahui del Club El Nacional</h3>
          </div>
        </li>

      </ul>
    </div>
  </div>
</section>

<section>
  <div class="row logos-externos">
    <div class="col-md-22 col-md-offset-1 col-sm-22 col-sm-offset-1 col-xs-22 col-xs-offset-1">
      <h2>CANILLERAS ENCUÉNTRANOS EN:</h2>
    </div>
    <div class="col-xs-24">
      <ul id="slider-encuentranos-canilleras" class="cs-hidden">

        <li>
          <div class="text-center">
            <img src="{{ asset('img/megamaxi.jpg') }}" alt="Megamaxi">
            <h3>Megamaxi</h3>
          </div>
        </li>

        <li>
          <div class="text-center">
            <img src="{{ asset('img/ya-esta.jpg') }}" alt="Yaesta.com">
            <h3>Yaesta.com</h3>
          </div>
        </li>

      </ul>
    </div>
  </div>
</section>

<section>
  <div class="row logos-externos">
    <div class="col-md-22 col-md-offset-1 col-sm-22 col-sm-offset-1 col-xs-22 col-xs-offset-1">
      <h2>TOALLAS ENCUÉNTRANOS EN:</h2>
    </div>
    <div class="col-xs-24">
      <ul id="slider-encuentranos-toallas" class="cs-hidden">

        <li>
          <div class="text-center">
            <img src="{{ asset('img/megamaxi.jpg') }}" alt="Megamaxi">
            <h3>Megamaxi</h3>
          </div>
        </li>

        <li>
          <div class="text-center">
            <img src="{{ asset('img/ya-esta.jpg') }}" alt="Yaesta.com">
            <h3>Yaesta.com</h3>
          </div>
        </li>

        <li>
          <div class="text-center">
            <img src="{{ asset('img/fybeca.jpg') }}" alt="Fybeca">
            <h3>Fybeca</h3>
          </div>
        </li>

        <li>
          <div class="text-center">
            <img src="{{ asset('img/cikla.jpg') }}" alt="CIKLA">
            <h3>CIKLA</h3>
          </div>
        </li>

      </ul>
    </div>
  </div>
</section>

@endsection

@section('scripts')
<script src="{!! asset('js/lightslider.js') !!}"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#slider-clientes').lightSlider({
      item: 3,
      loop: true,
      auto: false,
      speed: 600,
      pause: 3000,
      pauseOnHover: false,
      slideMove: 1,
      easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
      speed: 600,
      addClass: 'slider-clientes',
      responsive : [
      {
        breakpoint: 991,
        settings: {
          item: 3,
          slideMove: 1,
          slideMargin: 6,
        }
      },
      {
        breakpoint: 479,
        settings: {
          item: 2,
          slideMove: 1
        }
      }
      ]
    });

    $('#slider-encuentranos-canilleras').lightSlider({
      item: 3,
      loop: true,
      auto: false,
      speed: 600,
      pause: 3000,
      pauseOnHover: false,
      slideMove: 1,
      easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
      speed: 600,
      addClass: 'slider-clientes',
      responsive : [
      {
        breakpoint: 991,
        settings: {
          item: 3,
          slideMove: 1,
          slideMargin: 6,
        }
      },
      {
        breakpoint: 479,
        settings: {
          item: 2,
          slideMove: 1
        }
      }
      ]
    });

    $('#slider-encuentranos-toallas').lightSlider({
      item: 3,
      loop: true,
      auto: false,
      speed: 600,
      pause: 3000,
      pauseOnHover: false,
      slideMove: 1,
      easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
      speed: 600,
      addClass: 'slider-clientes',
      responsive : [
      {
        breakpoint: 991,
        settings: {
          item: 3,
          slideMove: 1,
          slideMargin: 6,
        }
      },
      {
        breakpoint: 479,
        settings: {
          item: 2,
          slideMove: 1
        }
      }
      ]
    });  
  });
</script>
@endsection