@extends('frontend.layouts.base')

@section('stylesheets')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/compra.css') }}">
  <!--<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">-->
@endsection

@section('content')

<section>

  <div class="row">

    <div class="col-xs-24">
      <div class="text-center compra">
        <h2>COMPRA</h2>
      </div>
    </div>

    <!-- First Element -->

    <!--Panels-->
    <section class="row">
      <article class="col-md-6 col-sm-12 col-xs-24 col-md-offset-1 col-sm-offset-1 text-center panel">
        <div class="panel-heading">
          <h3 class="panel-title">CANILLERAS</h3>
        </div>
        <div class="panel-body">
          <a href="#" class="thumbnail">
            <img class="img-responsive" src="http://placehold.it/350x550" alt="...">
          </a>
        </div>
        <div class="panel-button">
          <button type="button" class="btn btn-default btn-lg btn-block">CANILLERAS</button>
        </div>
      </article>
      <article class="col-md-6 col-sm-12 col-xs-24 col-md-offset-1 col-sm-offset-1 text-center panel">
        <div class="panel-heading">
          <h3 class="panel-title">PERSONALIZACIÓN</h3>
        </div>
        <div class="panel-body">
          <a href="#" class="thumbnail">
            <img class="img-responsive" src="http://placehold.it/350x550" alt="...">
          </a>
        </div>
        <div class="panel-button">
          <button type="button" class="btn btn-default btn-lg btn-block">PERSONALIZACIÓN</button>
        </div>
      </article>
      <article class="col-md-6 col-sm-12 col-xs-24 col-md-offset-1 col-sm-offset-1 text-center panel">
        <div class="panel-heading">
          <h3 class="panel-title">TOALLAS</h3>
        </div>
        <div class="panel-body">
          <a href="#" class="thumbnail">
            <img class="img-responsive" src="http://placehold.it/350x550" alt="...">
          </a>
        </div>
        <div class="panel-button">
          <button type="button" class="btn btn-default btn-lg btn-block">TOALLAS</button>
        </div>
      </article>
    </section>

    <!-- End Panels-->
    
    <div class="container">

    <!-- Panels & Radio Selectors-->
    <section class="row">
      <article class="col-md-8 col-sm-12 col-xs-24 text-center buttons">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            SPORT
          </label>
        </div>
      </article>

      <article class="col-md-8 col-sm-12 col-xs-24 text-center buttons">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios23" value="option2">
            CARBONO
          </label>
        </div>
      </article>
    </section>



    <section class="row">
      <h2 class="text-left col-md-2">TAMAÑO</h2>
      <article class="col-md-6 col-sm-12 col-xs-24 text-center tamano">
        <a href="#" class="thumbnail">
          <img class="img-thumbnail" src="http://placehold.it/250x450" alt="...">
        </a>
        <div class="input-group">
          <span class="input-group-addon">
            <input type="radio" aria-label="...">
          </span>
        </div>
        
        <!-- /input-group -->
        <h1 class="text-center">$0.00</h1>
      </article>

      <article class="col-md-6 col-sm-12 col-xs-24 text-center tamano">
        <a href="#" class="thumbnail">
            <img class="img-thumbnail" src="http://placehold.it/250x450" alt="...">
        </a>
        <div class="input-group">
            <span class="input-group-addon">
              <input type="radio" aria-label="...">
            </span>
        </div>
        <!-- /input-group -->
        <h1 class="text-center">$0.00</h1>
      </article>

      <article class="col-md-6 col-sm-12 col-xs-24 text-center tamano">
        <a href="#" class="thumbnail">
            <img class="img-thumbnail" src="http://placehold.it/250x450" alt="...">
        </a>
        <div class="input-group">
            <span class="input-group-addon">
              <input type="radio" aria-label="...">
            </span>
        </div>
        <!-- /input-group -->
        <h1 class="text-center">$0.00</h1>
      </article>
    </section>
    <!-- End of Products selections-->


    <!-- Carousel Products-->
    <section class="row">
      <article class="col-md-24 col-sm-12 col-xs-24 text-center carrusel">
        <div class="carousel slide multi-item-carousel carrusel-div" id="theCarousel">
          <div class="carousel-inner">
            <div class="item active">
              <div class="col-xs-2 col-md-2">
                <a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a>
                <div class="input-group">
                  <span class="input-group-addon">
                    <input type="radio" aria-label="...">
                  </span>
                </div>
                <!-- /input-group -->
              </div>
            </div>

          <div class="item">
            <div class="col-xs-4 col-md-4">
              <a href="#1"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive"></a>
              <div class="input-group">
                <span class="input-group-addon">
                  <input type="radio" aria-label="...">
                </span>
              </div>
              <!-- /input-group -->
            </div>
          </div>

          <div class="item">
            <div class="col-xs-4 col-md-4">
              <a href="#1"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive"></a>
              <div class="input-group">
                <span class="input-group-addon">
                  <input type="radio" aria-label="...">
                </span>
              </div>
              <!-- /input-group -->
            </div>
          </div>

          <div class="item">
            <div class="col-xs-2 col-md-2">
              <a href="#1"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive"></a>
              <div class="input-group">
                <span class="input-group-addon">
                  <input type="radio" aria-label="...">
                </span>
              </div>
              <!-- /input-group -->
            </div>
          </Sdiv>
                        <div class="item">
                            <div class="col-xs-2 col-md-2">
                                <a href="#1"><img src="http://placehold.it/300/4caf50/000000" class="img-responsive"></a>
                                <div class="input-group">
                                    <span class="input-group-addon">
                  <input type="radio" aria-label="...">
                </span>
                                </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2 col-md-2">
                                <a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a>
                                <div class="input-group">
                                    <span class="input-group-addon">
                  <input type="radio" aria-label="...">
                </span>
                                </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2 col-md-2">
                                <a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a>
                                <div class="input-group">
                                    <span class="input-group-addon">
                  <input type="radio" aria-label="...">
                </span>
                                </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2 col-md-2">
                                <a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a>
                                <div class="input-group">
                                    <span class="input-group-addon">
                  <input type="radio" aria-label="...">
                </span>
                                </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2 col-md-2">
                                <a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a>
                                <div class="input-group">
                                    <span class="input-group-addon">
                  <input type="radio" aria-label="...">
                </span>
                                </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                        <!-- add  more items here -->
                        <!-- Example item start:  -->



                        <!--  Example item end -->
                    </div>
                    <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    </article>
    </section>
    <!-- End of Carousel items-->

    <section class="row">
        <article class="col-md-6 text-center">
          <div class="radio">
<label>
  <input type="radio" name="optionsRadios" id="optionsRadios24" value="option2">
  Retirar
</label>
</div>
        </article>

        <article class="col-md-6 text-center">
          <div class="radio">
<label>
  <input type="radio" name="optionsRadios" id="optionsRadios25" value="option2">
  Envio
</label>
</div>
        </article>
    </section>
    <hr/>



    <section class="row">
        <h1 class="text-left">Forma de Pago</h1>
        <article class="col-md-6 text-center">
          <div class="radio">
<label>
  <input type="radio" name="optionsRadios" id="optionsRadios26" value="option2">
  Transferencia/Deposito
</label>
</div>
        </article>

        <article class="col-md-6 text-center">
          <div class="radio">
<label>
  <input type="radio" name="optionsRadios" id="optionsRadios27" value="option2">
  Paypal
</label>
</div>
        </article>
    </section>
    <hr/>
    <!-- Form-->
    <section class="row form-group col-md-12">
        <form class="form-signin col-md-6">
            <h2 class="form-signin-heading">Datos de envio</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="usr" placeholder="Nombre completo">
            </div>
            <input type="text" class="form-control" placeholder="Cedula">
            <h2 class="text-left">Fecha de nacimiento</h2>
            <div class="col-xs-2">
                <select class="form-control form-group">
        <option>DD</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
</select>
            </div>
            <div class="col-xs-2">
                <select class="form-control form-group col-xs-2">
        <option>MM</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
</select>
            </div>
            <div class="col-xs-2">
                <select class="form-control form-group col-xs-2">
        <option>AA</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
</select>
            </div>
            <input type="text" class="form-control form-group" placeholder="Direccion">
            <input type="text" class="form-control form-group" placeholder="Ciudad">
            <select class="form-control form-group col-xs-2">
                <option>Provincia</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
        </select>
            <select class="form-control form-group col-xs-2">
                <option>Pais</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
        </select>
            <input type="number" id="replyNumber" class="form-group" data-bind="value:replyNumber" />
            <!--Important Selector-->
            <input type="text" class="form-control form-group" placeholder="Numero de Telefono">
            <input type="email" class="form-control form-group" id="inputEmail3" placeholder="Email">
        </form>
        <!-- End first form-->


        <!-- Second Form-->
        <form class="form-signin col-md-6">
            <h2 class="form-signin-heading">Datos de facturacion</h2>
            <div class="checkbox">
                <label>
                <input type="checkbox" value="remember-me"> Completar con datos de envio
              </label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="usr2" placeholder="Nombre completo">
            </div>
            <input type="text" class="form-control" placeholder="Cedula">
            <h2 class="text-left">Fecha de nacimiento</h2>
            <div class="col-xs-2">
                <select class="form-control form-group">
            <option>DD</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
    </select>
            </div>
            <div class="col-xs-2">
                <select class="form-control form-group col-xs-2">
            <option>MM</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
    </select>
            </div>
            <div class="col-xs-2">
                <select class="form-control form-group col-xs-2">
            <option>AAAA</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
    </select>
            </div>
            <input type="text" class="form-control form-group" placeholder="Direccion">
            <input type="text" class="form-control form-group" placeholder="Ciudad">
            <select class="form-control form-group col-xs-2">
                    <option>Provincia</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
            </select>
            <select class="form-control form-group col-xs-2">
                    <option>Pais</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
            </select>
            <input type="number" id="replyNumber2" class="form-group" data-bind="value:replyNumber" />
            <!--Important Selector-->
            <input type="text" class="form-control form-group" placeholder="Numero de Telefono">
            <input type="email" class="form-control form-group" id="inputEmail32" placeholder="Email">
            <div class="checkbox">
                <label>
                <input type="checkbox" value="remember-me"> Acepto terminos y condiciones
              </label>
            </div>
        </form>
        <button type="button" class="btn btn-primary btn-lg btn-block">Enviar</button>

    </section>
    <!--End Second Form-->

</div><!-- End of container-->


@endsection

@section('scripts')

@endsection
