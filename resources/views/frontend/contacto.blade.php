@extends('frontend.layouts.base')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/contacto.css') }}">
@endsection

@section('content')

<div class="row hidden-xs">

  <div class="col-xs-24">
    <div class="row contacto-header">
      <div class="col-md-2 col-md-offset-11 col-sm-4 col-sm-offset-10">
        <div class="text-center">
          <img class="img-responsive" src="{{ asset('img/logo-armatura.png') }}" alt="LOGO ARMATURA">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row is-flex">

  <div class="col-md-7 col-sm-6 hidden-xs vertical-bottom">
    <div class="row row-lateral">
      <div class="col-xs-24">

        <div class="row contacto-img">

          <div class="col-md-4 col-md-offset-2 col-sm-2">
            <img src="{{ asset('img/contacto-telefono.png') }}" alt="CONTACTO">
          </div>
          <div class="col-md-16 col-sm-20">
            <p>0995666036, 0999443622, 02391549</p>
          </div>

        </div>

        <div class="row contacto-img">
          <div class="col-md-4 col-md-offset-2 col-sm-2">
            <img src="{{ asset('img/contacto-logo.png') }}" alt="DIRECCION">
          </div>
          <div class="col-md-16 col-sm-20">
            <p>Teófilo Carrera y Urcesino Lucas Baquero Puembro, Ecuador</p>
          </div>
        </div>

        <div class="row contacto-img">
          <div class="col-md-4 col-md-offset-2 col-sm-2">
            <img src="{{ asset('img/contacto-correo.png') }}" alt="CORREO">
          </div>
          <div class="col-md-16 col-sm-20">
            <p>info@armatura-protecciones.com</p>
          </div>
        </div>

        <div class="row contacto-img">

          <div class="col-md-20 col-md-offset-2 col-sm-20 col-sm-offset-2">
            <div class="text-center" id="contacto-social">
              <h3>SOCIAL</h3>
              <p>
                <a href="#" class="hvr-grow"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#" class="hvr-grow"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
  
  <div class="col-md-10 col-sm-12 antipadding">
    <div class="panel panel-default contacto-panel">
      <div class="panel-body">

        <div class="text-center">
          <h2>CONTACTO</h2>
        </div>

        <form id="crear-contacto">

          <div class="form-group">
            <label class="sr-only" for="nombre">NOMBRE Y APELLIDO</label>
            <input type="text" class="form-control contacto-form" id="nombre" placeholder="NOMBRE Y APELLIDO" required>
          </div>

          <div class="form-group">
            <label class="sr-only" for="telefono">TELÉFONO</label>
            <input type="text" class="form-control contacto-form" id="telefono" placeholder="TELÉFONO">
          </div>

          <div class="form-group">
            <label class="sr-only" for="correo">CORREO</label>
            <input type="email" class="form-control contacto-form" id="correo" placeholder="CORREO" required>
          </div>

          <div class="form-group">
            <label class="sr-only" for="comentario">COMENTARIO</label>
            <textarea class="form-control contacto-form" id="comentario" placeholder="COMENTARIO" rows="5"></textarea>
          </div>

          <button type="submit" class="btn btn-default btn-block" id="btn-enviar">ENVIAR</button>

        </form>
      </div>
    </div>  
  </div>

  <div class="col-md-7 col-sm-6 hidden-xs vertical-bottom">

    <div class="row row-lateral">
      <div class="col-md-20 col-md-offset-2 col-sm-20 col-sm-offset-2">
        <h3>ENCUÉNTRANOS EN:</h3>
        <ul>
          <li>Megamaxi</li>
          <li>Yaesta.com</li>
          <li>Pro Racing</li>
          <li>Fybeca</li>
          <li>Cikla</li>
        </ul>
      </div>

      <div class="col-md-14 col-md-offset-5 col-sm-22 col-sm-offset-1">
        <a href="#" class="btn btn-default btn-block contacto-btn">¿QUIERES DISTRIBUIR?</a>
      </div>
    </div>

  </div><!-- encuentranos -->

  <div class="col-xs-12 visible-xs vertical-bottom">
    <div class="row row-lateral">
      <div class="col-xs-24">

        <div class="row contacto-img">

          <div class="col-xs-2">
            <img src="{{ asset('img/contacto-telefono.png') }}" alt="CONTACTO">
          </div>
          <div class="col-xs-20">
            <p>0995666036, 0999443622, 02391549</p>
          </div>

        </div>

        <div class="row contacto-img">
          <div class="col-xs-2">
            <img src="{{ asset('img/contacto-logo.png') }}" alt="DIRECCION">
          </div>
          <div class="col-xs-20">
            <p>Teófilo Carrera y Urcesino Lucas Baquero Puembro, Ecuador</p>
          </div>
        </div>

        <div class="row contacto-img">
          <div class="col-xs-2">
            <img src="{{ asset('img/contacto-correo.png') }}" alt="CORREO">
          </div>
          <div class="col-xs-20">
            <p>info@armatura-protecciones.com</p>
          </div>
        </div>
      </div>
    </div>

  </div><!-- direccion solo visible para moviles -->

  <div class="col-xs-12 visible-xs vertical-bottom">

    <div class="row row-lateral">
      <div class="col-xs-20 col-xs-offset-2">
        <h3>ENCUÉNTRANOS EN:</h3>
        <ul>
          <li>Megamaxi</li>
          <li>Yaesta.com</li>
          <li>Pro Racing</li>
          <li>Fybeca</li>
          <li>Cikla</li>
        </ul>
      </div>

      <div class="col-xs-22 col-xs-offset-1">
        <a href="#" class="btn btn-default btn-block contacto-btn">¿QUIERES DISTRIBUIR?</a>
      </div>
    </div>

  </div>

  <div class="col-sm-24 hidden-xs" id="col-auxiliar"></div>

</div>

<div class="modal fade" id="correo-enviado" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" id="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4 col-md-offset-10 col-sm-4 col-sm-offset-10 col-xs-8 col-xs-offset-8">
            <img class="img-responsive" src="{{ asset('img/logo-armatura.png') }}" alt="LOGO ARMATURA">
          </div>

          <div class="col-xs-24" id="modal-body">
            <div class="text-center">
              <p><strong>¡GRACIAS POR TU MENSAJE!</strong></p>
              <p>PRONTO NOS COMUNICAREMOS CONTIGO</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script src="{!! asset('js/contacto.js') !!}"></script>
@endsection