<header>
  <h1 class="hidden">{{ $title ? $title : getenv('APP_NAME') }}</h1>

  <nav class="navbar navbar-default navbar-static-top armatura-navbar-default">
    <h2 class="hidden">MENÚ</h2>
    <div class="container-fluid">
      <div class="navbar-header armatura-navbar-header">
      <button type="button" class="navbar-toggle collapsed armatura-navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand armatura-navbar-brand hvr-pulse-shrink" href="/">
          <img alt="Armatura" src="{{ asset('img/logo-nav.png') }}">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse armatura-navbar-collapse">
        <ul class="nav navbar-nav armatura-navbar-nav">
          <li class="{{ $title == 'CANILLERAS' ? 'active' : '' }}"><a href="/canilleras">CANILLERAS</a></li>
          <li class="{{ $title == 'TOALLAS' ? 'active' : '' }}"><a href="/toallas">TOALLAS</a></li>
          <li class="{{ $title == 'PERSONALIZACIÓN' ? 'active' : '' }}"><a href="/personalizacion">PERSONALIZACIÓN</a></li>
          <li class="{{ $title == 'CLIENTES' ? 'active' : '' }}"><a href="/clientes">CLIENTES</a></li>
          <li class="{{ $title == 'SOBRE NOSOTROS' ? 'active' : '' }}"><a href="/sobre_nosotros">SOBRE NOSOTROS</a></li>
          <li class="{{ $title == 'CONTACTO' ? 'active' : '' }}"><a href="/contacto">CONTACTO</a></li>
          <li class="{{ $title == 'COMPRA' ? 'active' : '' }}"><a href="/compra">COMPRA</a></li>
          <li class="visible-xs">
            <div class="text-center">
              <button type="button" class="btn btn-default btn-block armatura-navbar-btn" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">CERRAR</button>
            </div>
            
          </li>
          <li class="pull-right hidden-xs hidden-sm"><a href="https://www.instagram.com/armatura_protecciones/" class="hvr-grow"><i class="fa fa-instagram armatura-navbar-social" aria-hidden="true"></i></a></li>
          <li class="pull-right hidden-xs hidden-sm"><a href="https://www.facebook.com/ArmaturaProtecciones/" class="hvr-grow"><i class="fa fa-facebook armatura-navbar-social" aria-hidden="true"></i></a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
</header>