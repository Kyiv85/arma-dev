@extends('frontend.layouts.base')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/inicio.css') }}">
@endsection

@section('content')

<section>
  <h2 class="hidden">PRODUCTOS</h2>
  <div class="row" id="armatura-carousel">

    <div class="carousel slide" data-ride="carousel" id="myCarousel">
      <div class="carousel-inner" role="listbox">

        <div class="item active" id="armatura-carousel-slide-1">
          <section>

            <div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-2 col-xs-18 col-xs-offset-3 vcenter">
              <div class="row">

                <div class="col-md-6 col-md-offset-9 col-sm-10 col-sm-offset-7 hidden-xs">
                  <img class="img-responsive" src="{{ asset('img/logo-slider.png') }}" alt="Armatura Logo">
                </div>

                <div class="col-xs-24">
                  <div class="text-center">
                    <h2>KANISPORT</h2>
                    <p>Las Kani están diseñadas para protegerte de los que van abajo!</p>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-md-12 col-md-offset-2 col-sm-12 col-sm-offset-2 col-xs-14 col-xs-offset-5 vcenter">
              <img class="img-responsive" id="armatura-carousel-slide-1-img" src="{{ asset('img/slider-1.png') }}" alt="Kanisport">
            </div>

          </section>
        </div><!-- fin de slide 1 -->

        <div class="item" id="armatura-carousel-slide-2">
          <section>

            <div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-2 col-xs-18 col-xs-offset-3 vcenter">
              <div class="row">

                <div class="col-md-6 col-md-offset-9 col-sm-10 col-sm-offset-7 hidden-xs">
                  <img class="img-responsive" src="{{ asset('img/logo-slider.png') }}" alt="Armatura Logo">
                </div>

                <div class="col-xs-24">
                  <div class="text-center">
                    <h2>KANICARBONO</h2>
                    <p>Indestructibles, ni la kriptonita te hará daño. No podrás estar más protegido.</p>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-md-12 col-md-offset-2 col-sm-12 col-sm-offset-2 col-xs-14 col-xs-offset-5 vcenter">
              <img class="img-responsive" id="armatura-carousel-slide-2-img" src="{{ asset('img/slider-2.png') }}" alt="Kanicarbono">
            </div>

          </section>
        </div><!-- fin de slide 2 -->

        <div class="item" id="armatura-carousel-slide-3">
          <section>

            <div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-2 col-xs-18 col-xs-offset-3 vcenter">
              <div class="row">

                <div class="col-md-6 col-md-offset-9 col-sm-10 col-sm-offset-7 hidden-xs">
                  <img class="img-responsive" src="{{ asset('img/logo-slider.png') }}" alt="Armatura Logo">
                </div>

                <div class="col-xs-24">
                  <div class="text-center">
                    <h2>TOALLAS</h2>
                    <p>Toallas Armatura secafast, el tiempo vale oro, no desperdicies ni un minuto.</p>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-md-12 col-md-offset-2 col-sm-12 col-sm-offset-2 col-xs-14 col-xs-offset-5 vcenter">
              <img class="img-responsive" id="armatura-carousel-slide-3-img" src="{{ asset('img/slider-3.png') }}" alt="Toallas">
            </div>

          </section>
        </div><!-- fin de slide 3 -->

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div><!-- fin de slides -->

      <div class="col-xs-24">
        <div class="row" id="armatura-carousel-footer">
          <div class="col-md-4 col-md-offset-10 col-sm-6 col-sm-offset-9 col-xs-10 col-xs-offset-7">
            <a href="#" class="btn btn-default btn-block" id="armatura-carousel-footer-btn">COMPRA AQUÍ</a>
          </div>

          <div class="col-md-8 col-md-offset-8 col-sm-8 col-sm-offset-8 col-xs-24">
            <div class="text-center">
              <a href="#armatura-caracteristicas" class="hvr-icon-down">¡TU IDENTIDAD TE PROTEGE!</a>
            </div>
          </div><!-- fin de slides footer -->
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <h2 class="hidden">CARACTERÍSTICAS</h2>
  <div class="row" id="armatura-caracteristicas">
    <div class="col-xs-24">

      <div class="row">
        <div class="col-md-16 col-md-offset-4 col-sm-18 col-sm-offset-3 col-xs-20 col-xs-offset-2">
          <div class="text-center">
            <p>Productos deportivos de ultima generación. Resistentes, cómodos, ligeros y personalizables.</p>
            <p>Tu eliges que quieres ser, ¡tu identidad te protege!</p>
          </div>
        </div>
      </div>
      
      <div class="row" id="armatura-caracteristicas-icons">

        <section>
          <div class="col-sm-4 col-xs-8">
            <div class="thumbnail armatura-caracteristicas-thumbnail">
              <img class="hvr-grow-rotate" src="{{ asset('img/resistencia.png') }}" alt="Resistencia">
              <div class="caption">
                <div class="text-center">
                  <h3>RESISTENCIA</h3>
                </div>
              </div>
            </div>
          </div>
        </section><!-- fin de resistencia -->

        <section>
          <div class="col-sm-4 col-xs-8">
            <div class="thumbnail armatura-caracteristicas-thumbnail">
              <img class="hvr-grow-rotate" src="{{ asset('img/personalizacion.png') }}" alt="Personalización">
              <div class="caption">
                <div class="text-center">
                  <h3>PERSONALIZACIÓN</h3>
                </div>
              </div>
            </div>
          </div>
        </section><!-- fin de personalizacion -->

        <section>
          <div class="col-sm-4 col-xs-8">
            <div class="thumbnail armatura-caracteristicas-thumbnail">
              <img class="hvr-grow-rotate" src="{{ asset('img/comodidad.png') }}" alt="Comodidad">
              <div class="caption">
                <div class="text-center">
                  <h3>COMODIDAD</h3>
                </div>
              </div>
            </div>
          </div>
        </section><!-- fin de comodidad -->

        <section>
          <div class="col-sm-4 col-xs-8">
            <div class="thumbnail armatura-caracteristicas-thumbnail">
              <img class="hvr-grow-rotate" src="{{ asset('img/innovacion.png') }}" alt="Innovación">
              <div class="caption">
                <div class="text-center">
                  <h3>INNOVACIÓN</h3>
                </div>
              </div>
            </div>
          </div>
        </section><!-- fin de innovacion -->

        <section>
          <div class="col-sm-4 col-xs-8">
            <div class="thumbnail armatura-caracteristicas-thumbnail">
              <img class="hvr-grow-rotate" src="{{ asset('img/aventura.png') }}" alt="Aventura">
              <div class="caption">
                <div class="text-center">
                  <h3>AVENTURA</h3>
                </div>
              </div>
            </div>
          </div>
        </section><!-- fin de innovacion -->

        <section>
          <div class="col-sm-4 col-xs-8">
            <div class="thumbnail armatura-caracteristicas-thumbnail">
              <img class="hvr-grow-rotate" src="{{ asset('img/identidad.png') }}" alt="Identidad">
              <div class="caption">
                <div class="text-center">
                  <h3>IDENTIDAD</h3>
                </div>
              </div>
            </div>
          </div>
        </section><!-- fin de innovacion -->

      </div>
    </div>
  </div>
</section>

<section>
  <h2 class="hidden">TESTIMONIO</h2>
  <div class="row display-table" id="armatura-testimonio">
    <div class="col-sm-14 col-xs-24 display-cell antipadding">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DNm5YXE1wLk"></iframe>
      </div>
    </div>
    <div class="col-sm-10 col-xs-24 display-cell">
      <div class="row">
        <div class="col-md-20 col-md-offset-2 col-xs-24">
          <div class="text-center">
            <blockquote>
              <p>Productos deportivos de ultima generación. Resistentes, cómodos, ligeros y personalizables.</p>
              <p>Tu eliges que quieres ser, ¡tu identidad te protege!</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

@endsection

@section('scripts')
<script type="text/javascript">
  $('.carousel').carousel({
    interval: 5000,
    pause: null
  })
</script>
@endsection