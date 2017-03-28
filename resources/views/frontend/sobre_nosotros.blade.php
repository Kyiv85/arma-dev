@extends('frontend.layouts.base')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/somos.css') }}">
@endsection

@section('content')

<section>

  <div class="row">

    <div class="col-xs-24">
      <div class="text-center">
        <h2>SOMOS ARMATURA</h2>
      </div>
    </div>

    <div class="col-xs-24">

      <section>
        <div class="row is-flex somos-impar somos">

          <h3 class="hidden">ARMATURA NACE</h3>
          <div class="col-md-8 col-sm-8 col-xs-24 somos-img hvr-bounce-in">
            <img src="{{ asset('img/somos-nace.png') }}" alt="ARMATURA NACE">
          </div>
          <div class="col-md-12 col-md-offset-2 col-sm-14 col-sm-offset-1 col-xs-20 col-xs-offset-2 somos-txt">
            <p>La empresa nace en Quito el <strong>15 de Diciembre del 2014</strong>, a partir del esfuerzo de <strong>tres jóvenes emprendedores</strong> apasionados por el deporte.</p>
          </div>

        </div>
      </section>

      <section>
        <div class="row is-flex somos-par somos">

          <h3 class="hidden">PRODUCTOS DEPORTIVOS</h3>
          <div class="col-xs-24 visible-xs somos-img hvr-bounce-in">
            <img src="{{ asset('img/somos-innovar.png') }}" alt="PRODUCTOS DEPORTIVOS">
          </div>
          <div class="col-md-12 col-md-offset-2 col-sm-14 col-sm-offset-1 col-xs-20 col-xs-offset-2 somos-txt">
            <p>Apostamos por <strong>innovar productos deportivos</strong> esenciales para el desempeño y comodidad de los deportistas, que han evolucionado poco durante su historia <strong>(Canilleras, Toallas, Accesorios)</strong>.</p>
          </div>
          <div class="col-md-8 col-sm-8 hidden-xs somos-img hvr-bounce-in">
            <img src="{{ asset('img/somos-innovar.png') }}" alt="PRODUCTOS DEPORTIVOS">
          </div>

        </div>
      </section>

      <section>
        <div class="row is-flex somos-impar somos">

          <h3 class="hidden">KANI SPORT</h3>
          <div class="col-md-8 col-sm-8 col-xs-24 somos-img hvr-bounce-in">
            <img src="{{ asset('img/somos-kanisport.png') }}" alt="KANI SPORT">
          </div>
          <div class="col-md-12 col-md-offset-2 col-sm-14 col-sm-offset-1 col-xs-20 col-xs-offset-2 somos-txt">
            <p>Luego de varios meses de investigación y desarrollo de producto (9 meses), logramos sacar al mercado nuestro primer producto; <strong>las Kani Sport.</strong> Canilleras personalizables, ajustables, ligeras y cómodas. Somos los primeros y únicos en ofrecer canilleras personalizables en el Ecuador y de los pocos en el mundo.</p>
          </div>

        </div>
      </section>

      <section>
        <div class="row is-flex somos-par somos">

          <h3 class="hidden">CANILLERAS</h3>
          <div class="col-xs-24 visible-xs somos-img hvr-bounce-in">
            <img src="{{ asset('img/somos-canilleras.png') }}" alt="CANILLERAS">
          </div>
          <div class="col-md-12 col-md-offset-2 col-sm-14 col-sm-offset-1 col-xs-20 col-xs-offset-2 somos-txt">
            <p>Actualmente elaboramos 3 líneas de producto; <strong>Canilleras de Fibra de Carbono y Aluminio, Toallas de microfibra.</strong> Seguimos desarrollando nuevos productos para convertirnos en marca líder en artículos deportivos.</p>
          </div>
          <div class="col-md-8 col-sm-8 hidden-xs somos-img hvr-bounce-in">
            <img src="{{ asset('img/somos-canilleras.png') }}" alt="CANILLERAS">
          </div>

        </div>
      </section>

      <section>
        <div class="row is-flex somos-impar somos">

          <h3 class="hidden">EMPRESA INNOVADORA</h3>
          <div class="col-md-8 col-sm-8 col-xs-24 somos-img hvr-bounce-in">
            <img src="{{ asset('img/somos-ecuador.png') }}" alt="EMPRESA INNOVADORA">
          </div>
          <div class="col-md-12 col-md-offset-2 col-sm-14 col-sm-offset-1 col-xs-20 col-xs-offset-2 somos-txt">
            <p>Somos una empresa innovadora dedicada a la <strong>producción y comercialización de artículos deportivos.</strong> Todos nuestros productos son elaborados en el Ecuador bajo los más altos estándares de <strong>calidad y servicio.</strong></p>
          </div>

        </div>
      </section>

    </div>

  </div>
</section>

@endsection

@section('scripts')

@endsection