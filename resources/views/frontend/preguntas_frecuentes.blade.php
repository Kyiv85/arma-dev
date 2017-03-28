@extends('frontend.layouts.base')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/contenido_estatico.css') }}">
@endsection

@section('content')

<section>
  <div class="row contenido-estatico">

    <div class="col-md-2 col-md-offset-11 col-sm-4 col-sm-offset-10 hidden-xs">
      <div class="text-center">
        <img class="img-responsive" src="{{ asset('img/logo-armatura.png') }}" alt="LOGO ARMATURA">
      </div>
    </div>

    <div class="col-xs-20 col-xs-offset-2">
      <h2>PREGUNTAS FRECUENTES</h2>
      <ol class="title">
        <li>
          <h3>¿Cuánto se demora en enviar un pedido?</h3>
          <ol type="a" class="text">
            <li><p>Kanis Estándar: 3 a 7 días.</p></li>
            <li><p>Kanis Personalizadas: de 5 a 10 días laborables.</p></li>
            <li><p>Toallas: 3 a 7 días laborables.</p></li>
          </ol>
        </li>
        <li>
          <h3>¿Cuántas imágenes puedo poner en mis Kanis Personalizadas?</h3>
          <ol type="a" class="text">
            <li><p>Hasta cuatro imágenes por canillera, ocho en total por cada par.</p></li>
          </ol>
        </li>
        <li>
          <h3>¿Qué métodos de pago aceptan?</h3>
          <ol type="a" class="text">
            <li><p>PayPal.</p></li>
            <li><p>Transferencias.</p></li>
          </ol>
        </li>
        <li>
          <h3>¿Ofrecen descuentos si es que compró varias unidades de un producto?</h3>
          <p>Claro , ofrecemos grandes descuentos a partir de las 5 unidades. Si estás interesado en distribuir nuestros productos o tienes compras superiores a las 5 unidades, puedes escribirnos a info@armatura-protecciones.com y gustosos te ayudaremos con un buen descuento. Ofrecemos promociones y descuentos constantemente a través de nuestras redes sociales y pagina web. ¡No pierdas la oportunidad de seguirnos!</p>
        </li>
        <li>
          <h3>¿Dónde puedo en comprar sus productos:</h3>
          <ol type="a" class="text">
            <li><p>En nuestra pagina web: www.armatura-protecciones.com</p></li>
            <li><p>En Facebook: https://www.facebook.com/ArmaturaProtecciones</p></li>
            <li><p><strong>Canilleras: </strong>Megamaxi, Yaesta.com</p></li>
            <li><p><strong>Toallas de microfibra: </strong>Megamaxi, Fybeca, Yaesta.com, Cikla, Pro Racing</p></li>
          </ol>
        </li>
        <li>
          <h3>¿Las Kanis incluyen las mallas de compresión?</h3>
          <ol type="a" class="text">
            <li><p>Si, todas las canilleras que vendemos incluyen las mallas de compresión.</p></li>
          </ol>
        </li>
        <li>
          <h3>¿Hay como personalizar las mallas de compresión?</h3>
          <ol type="a" class="text">
            <li><p>Si pero a partir de las 50 unidades y con un costo adicional.</p></li>
          </ol>
        </li>
        <li>
          <h3>¿Cuánto se demora en enviar un pedido?</h3>
          <ol type="a" class="text">
            <li><p>Toallas y kani sport 3-10 días laborables.</p></li>
          </ol>
        </li>
      </ol>
    </div>

  </div>
</section>

@endsection

@section('scripts')

@endsection