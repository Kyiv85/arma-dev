@extends('frontend.layouts.base')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/canilleras.css') }}">
@endsection

@section('content')

<section>
  <h2 class="hidden">CATEGORIAS</h2>

  <div class="row">

    <div class="col-md-12 col-sm-12">
      <div class="row is-kanicarbono">
        <a href="#" class="tablinks" id="link-kanicarbono">
          <div class="col-md-20 col-md-offset-2 col-sm-24">
            <img class="img-responsive img-padding active" src="{{ asset('img/kani-karbono.png') }}" alt="Kanicarbono">
          </div>
          <div class="col-md-22 col-md-offset-1 col-sm-20 col-sm-offset-2 categoria-title">
            <h3>KANI CARBONO</h3>
          </div>
        </a>
      </div>
    </div><!-- fin de kani carbono -->

    <div class="col-md-12 col-sm-12">

      <div class="row is-kanisport">
        <a href="#" class="tablinks" id="link-kanisport">
          <div class="col-md-24 col-sm-24">
            <img class="img-responsive img-padding" src="{{ asset('img/kani-sport.png') }}" alt="Kanisport">
          </div>
          <div class="col-md-22 col-md-offset-1 col-sm-20 col-sm-offset-2 categoria-title">
            <h3>KANI SPORT</h3>
          </div>
        </a>
      </div><!-- fin de kani sport --> 

      <div class="row is-personalizacion">
        <a href="/personalizacion">
          <div class="col-md-24 col-sm-24">
            <img class="img-responsive img-padding" src="{{ asset('img/canilleras-personalizadas.png') }}" alt="Personalización">
          </div>
          <div class="col-md-22 col-md-offset-1 col-sm-20 col-sm-offset-2 categoria-title">
            <h3>PERSONALIZACIÓN</h3>
          </div>
        </a>
      </div><!-- fin de personalizacion -->

    </div>

  </div>

  <div class="row calidad">
    <div class="col-xs-24">
      <div class="text-center">
        <a href="#marcas" class="hvr-icon-hang">
          CALIDAD APROBADA POR MÁS DE 70 <span id="futbolistas">FUTBOLISTAS PROFESIONALES.</span>
        </a>
      </div>
    </div>
  </div><!-- fin de footer categorias -->

</section>

<section>
  <h2 class="hidden">MARCAS</h2>
  <div class="row marcas" id="marcas">

    <div class="marcastitle hidden" id="marcas-kanisport">
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

    <div class="marcastitle" id="marcas-kanicarbono">
      <div class="col-xs-24" id="col-marca">
        <div class="text-center">
        <a href="#marcas">
            <h3 class="active">KANI CARBONO</h3>
          </a>
        </div>
      </div><!-- fin de kanicarbono -->
    </div>

  </div>
</section>

<section>
  <div class="row">

    <h2 class="hidden">DESCRIPCIÓN</h2>

    <div class="col-md-12 col-sm-12 col-xs-24">

      <div class="row tabdescription" id="description-kanicarbono">
        <section>
          <div class="col-md-20 col-md-offset-2 col-sm-22 col-sm-offset-1 col-xs-24">
            <h3>KANI CARBONO</h3>
          </div>
          <div class="col-md-12 col-md-offset-2 col-sm-14 col-sm-offset-1 col-xs-24">
            <p>
              Indestructibles, ni la kriptonita te hará daño. No podrás estar más protegido. La más alta tecnología en materiales para tu protección, la misma que es usada en deportes como la Formula 1 y por los jugadores del más alto nivel. Protección profesional, en menos de 50 gramos de peso. Si Messi fuera una canillera, fuera la Kani Carbono.
            </p>
          </div>

          <div class="col-md-20 col-md-offset-2 col-sm-22 col-sm-offset-1 col-xs-24 porcentajes">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6 hvr-bounce-in">
                <div class="circle">80%</div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 antipadding">
                <p>FIBRA DE CARBONO</p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 hvr-bounce-in">
                <div class="circle">20%</div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 antipadding">
                <p>NEOPRENO</p>
              </div>
            </div> 
            
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="text-center">
                  <p class="malla">MALLA</p>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6 hvr-bounce-in">
                <div class="circle">88%</div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 antipadding">
                <p>NYLON</p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 hvr-bounce-in">
                <div class="circle">12%</div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 antipadding">
                <p>SPANDEX</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="text-center">
                  <p class="malla">TAMAÑOS</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-16 col-sm-16 col-xs-14 hvr-bounce-in">
                <img class="img-responsive" src="{{ asset('img/karbono-tamano.png') }}" />
              </div>
            </div>

          </div><!-- porcentaje fibra de carbono -->

        </section>
      </div>

      <div class="row tabdescription hidden" id="description-kanisport">
        <section>
          <div class="col-md-20 col-md-offset-2 col-sm-22 col-sm-offset-1 col-xs-24">
            <h3>KANI SPORT</h3>
          </div>
          <div class="col-md-12 col-md-offset-2 col-sm-14 col-sm-offset-1 col-xs-24">
            <p>
              Las Kani están diseñadas para protegerte de los que van abajo!. Protegen la parte más vulnerable y sensible de la pierna de quiénes las usan. Únicas con nuestra tecnología CProLite: la comodidad, Protección y Ligereza.
            </p>
          </div>

          <div class="col-md-20 col-md-offset-2 col-sm-22 col-sm-offset-1 col-xs-24 porcentajes">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6 hvr-bounce-in">
                <div class="circle">73%</div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 antipadding">
                <p>ALUMINIO</p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 hvr-bounce-in">
                <div class="circle">27%</div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 antipadding">
                <p>EVA</p>
              </div>
            </div> 
            
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="text-center">
                  <p class="malla">MALLA</p>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6 hvr-bounce-in">
                <div class="circle">88%</div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 antipadding">
                <p>NYLON</p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 hvr-bounce-in">
                <div class="circle">12%</div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 antipadding">
                <p>SPANDEX</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="text-center">
                  <p class="malla">TAMAÑOS</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-16 col-sm-16 col-xs-14 hvr-bounce-in">
                <img class="img-responsive" src="{{ asset('img/sport-tamano.png') }}" />
              </div>
            </div>

          </div><!-- porcentaje fibra de carbono -->

        </section>
      </div>

    </div>
    
    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-24">

      <div id="slider-container-armatura" class="slider-container slider-kanisport cS-hidden">
        <ul id="slider-armatura">
          <li data-thumb="{{ asset('img/kanisport-slide-1.png') }}">
            <img src="{{ asset('img/kanisport-slide-1.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/kanisport-slide-2.png') }}">
            <img src="{{ asset('img/kanisport-slide-2.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/kanisport-slide-3.png') }}">
            <img src="{{ asset('img/kanisport-slide-3.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/kanisport-slide-4.png') }}">
            <img src="{{ asset('img/kanisport-slide-4.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/kanisport-slide-5.png') }}">
            <img src="{{ asset('img/kanisport-slide-5.png') }}" />
          </li>
        </ul><!-- fin de slider-kanisport -->
      </div>

      <div id="slider-container-liga" class="slider-container cS-hidden">
        <ul id="slider-liga">
          <li data-thumb="{{ asset('img/liga-slide-1.png') }}">
            <img src="{{ asset('img/liga-slide-1.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/liga-slide-2.png') }}">
            <img src="{{ asset('img/liga-slide-2.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/liga-slide-3.png') }}">
            <img src="{{ asset('img/liga-slide-3.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/liga-slide-4.png') }}">
            <img src="{{ asset('img/liga-slide-4.png') }}" />
          </li>
        </ul><!-- fin de slider-ldu -->
      </div>

      <div id="slider-container-kanicarbono" class="slider-container slider-kanicarbono cS-hidden">
        <ul id="slider-kanicarbono">
          <li data-thumb="{{ asset('img/kanicarbono-slide-1.png') }}">
            <img src="{{ asset('img/kanicarbono-slide-1.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/kanicarbono-slide-2.png') }}">
            <img src="{{ asset('img/kanicarbono-slide-2.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/kanicarbono-slide-3.png') }}">
            <img src="{{ asset('img/kanicarbono-slide-3.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/kanicarbono-slide-4.png') }}">
            <img src="{{ asset('img/kanicarbono-slide-4.png') }}" />
          </li>
        </ul><!-- fin de slider-kanisport -->
      </div>

    </div>

    <section>
      <div class="col-md-22 col-md-offset-1 col-sm-24 col-xs-24">

        <div class="row tabcaracteristicas" id="caracteristicas-kanicarbono">
          <div class="col-md-24">
            <h2>BENEFICIOS&nbsp;&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></h2>
            <h3 class="hidden">KANI CARBONO</h3>
            <ul>
              <li>100% Fibra de Carbono</li>
              <li>Diseño anatómico que se ajusta a tu pierna derecha e izquierda</li>
              <li>Increíblemente ligeras</li>
              <li>Asombrosa resistencia a impactos</li>
              <li>Excelente distribución de impacto para reducir posibles lesiones</li>
              <li>Cómoda capa de neopreno para absorción de la energía de impacto</li>
              <li>Incluye malla de compresión que sujeta la canillera de manera cómoda y ayuda a evitar la fatiga muscular de la pantorrilla</li>
            </ul>
          </div>
        </div>

        <div class="row tabcaracteristicas hidden" id="caracteristicas-kanisport">
          <div class="col-md-14 col-md-offset-5 col-sm-16 col-sm-offset-4 col-xs-22 col-xs-offset-1">
            <img class="img-responsive" src="{{ asset('img/testimonio.jpg') }}" alt="KaniSport video">
          </div>
          <div class="col-md-24 col-sm-24 col-xs-24">
            <h2>BENEFICIOS TECNOLOGÍA CProLite&nbsp;&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></h2>
            <h3 class="hidden">KANI SPORT</h3>
            <ul>
              <li>Fabricadas en Aluminio especial ofreciendo una gran resistencia al impacto</li>
              <li>Capa protectora ante rayones por impactos de hasta 60km/h, agua y rayos UV</li>
              <li>Capa EVA que absorbe la energía de impacto</li>
              <li>Diseñadas anatómicamente para cada lado de pierna</li>
              <li>Se adaptan al ancho de tu pierna para un ajuste personalizado</li>
              <li>Incluye Mallas de compresión diseñadas para cada tamaño</li>
              <li>Mantienen fija la canillera de manera cómoda y ayudan a reducir la fatiga en las pantorrillas</li>
              <li>Ligeras entre 29 y 68 gramos (depende del tamaño) por canillera</li>
            </ul>
          </div>
        </div>

      </div>
    </section>

  </div>
</section>

<section>
  <div class="row">

    <div class="col-md-22 col-md-offset-1 mallas-compresion"></div>

    <div class="col-md-12 col-sm-12 col-xs-24">

      <div class="row tabmallas">

        <div class="col-md-20 col-md-offset-2 col-sm-22 col-sm-offset-1 col-xs-24">
          <h3>MALLAS DE COMPRESIÓN</h3>
        </div>
        <div class="col-md-12 col-md-offset-2 col-sm-14 col-sm-offset-1 col-xs-24">
          <p>
            Las mallas de compresión se adaptan a tu pierna, reducen la fatiga musculas ayudándote a llegar más lejos. Fabricada con tela elástica en los 4 sentidos
          </p>
        </div>

        <div class="col-md-20 col-md-offset-2 col-sm-22 col-sm-offset-1 col-xs-24 porcentajes">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 hvr-bounce-in">
              <div class="circle">88%</div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 antipadding">
              <p>POLYESTER</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 hvr-bounce-in">
              <div class="circle">12%</div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 antipadding">
              <p>SPANDEX</p>
            </div>
          </div> 

          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="text-center">
                <p class="malla">TAMAÑOS</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-16 col-sm-16 col-xs-14 hvr-bounce-in">
              <img class="img-responsive" src="{{ asset('img/mallas-tamano.png') }}" />
            </div>
          </div>

        </div><!-- porcentaje mallas -->

      </div>

    </div>
    
    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-24">

      <div id="slider-container-mallas" class="cS-hidden">
        <ul id="slider-mallas">
          <li data-thumb="{{ asset('img/mallas-slide-1.png') }}">
            <img src="{{ asset('img/mallas-slide-1.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/mallas-slide-2.png') }}">
            <img src="{{ asset('img/mallas-slide-2.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/mallas-slide-3.png') }}">
            <img src="{{ asset('img/mallas-slide-3.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/mallas-slide-4.png') }}">
            <img src="{{ asset('img/mallas-slide-4.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/mallas-slide-5.png') }}">
            <img src="{{ asset('img/mallas-slide-5.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/mallas-slide-6.png') }}">
            <img src="{{ asset('img/mallas-slide-6.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/mallas-slide-7.png') }}">
            <img src="{{ asset('img/mallas-slide-7.png') }}" />
          </li>
          <li data-thumb="{{ asset('img/mallas-slide-8.png') }}">
            <img src="{{ asset('img/mallas-slide-8.png') }}" />
          </li>
        </ul><!-- fin de slider-mallas -->
      </div>

    </div>

    <section>
      <div class="col-md-22 col-md-offset-1 col-sm-24 col-xs-24">

        <div class="row tabcaracteristicas-mallas">
          <div class="col-md-24">
            <h2>BENEFICIOS&nbsp;&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></h2>
            <h3 class="hidden">MALLAS</h3>
            <ul>
              <li>Reduce vibraciones en la pantorrilla que acelera la recuperación</li>
              <li>Ayuda a la circulación y a la distribución de oxigeno reduciendo la fatiga muscular</li>
              <li>Sirve también para sujetar las canilleras de manera cómoda</li>
            </ul>
          </div>
        </div>

      </div>
    </section>

  </div>
</section>

@endsection

@section('scripts')
<script src="{!! asset('js/scroll.min.js') !!}"></script>
<script src="{!! asset('js/lightslider.js') !!}"></script>
<script src="{!! asset('js/canilleras.js') !!}"></script>

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
    thumbItem: 5,
    addClass: 'slider-productos',
    autoWidth: false
  };

  $('#slider-armatura').lightSlider(opts_slider);
  $('#slider-liga').lightSlider(opts_slider);
  $('#slider-kanicarbono').lightSlider(opts_slider);
  $('#slider-mallas').lightSlider(opts_slider);
</script>
@endsection