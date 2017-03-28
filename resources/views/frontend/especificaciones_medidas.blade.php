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

      <h2>Especificaciones y Medidas</h2>

      <h3>Kani Sport:</h3>
      <table class="table-medidas">
        <thead>
          <tr>
            <th class="primera-columna">Medidas</th>
            <th>Peso</th>
            <th>Materiales</th>
            <th>Garantía</th>
            <th class="ultima-columna">Indicaciones de cuidado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="primera-columna">
              <h4>Pequeñas</h4>
              <p>12cm</p>
            </td>
            <td class="peso">
              <p>29 gramos</p>
            </td>
            <td rowspan="3">
              <p>73% Aluminio</p>
              <p>27% EVA</p>
            </td>
            <td rowspan="3">
              <p>6 meses</p>
            </td>
            <td rowspan="3" class="ultima-columna">
              <p>Limpiar con un trapo humedo</p>
            </td>
          </tr>
          <tr>
            <td class="primera-columna">
              <h4>Medianas</h4>
              <p>14cm</p>
            </td>
            <td class="peso"><p>49 gramos</p></td>
          </tr>
          <tr>
            <td class="primera-columna">
              <h4>Grandes</h4>
              <p>17cm</p>
            </td>
            <td class="peso"><p>68 gramos</p></td>
          </tr>
        </tbody>
      </table>

      <br>

      <h3>Kani Carbono:</h3>
      <table class="table-medidas">
        <thead>
          <tr>
            <th class="primera-columna">Medidas</th>
            <th>Peso</th>
            <th>Materiales</th>
            <th>Garantía</th>
            <th class="ultima-columna">Indicaciones de cuidado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="primera-columna">
              <h4>Medianas</h4>
              <p>15cm</p>
            </td>
            <td class="peso">
              <p>44 gramos</p>
            </td>
            <td rowspan="2">
              <p>80% Fibra de Carbono</p>
              <p>20% Neopreno</p>
            </td>
            <td rowspan="2">
              <p>1 año</p>
            </td>
            <td rowspan="2" class="ultima-columna">
              <p>Limpiar con un trapo humedo</p>
            </td>
          </tr>
          <tr>
            <td class="primera-columna">
              <h4>Grandes</h4>
              <p>18cm</p>
            </td>
            <td class="peso"><p>51 gramos</p></td>
          </tr>
        </tbody>
      </table>

      <br>

      <h3>Mallas Compresivas:</h3>
      <table class="table-medidas">
        <thead>
          <tr>
            <th class="primera-columna">Tamaño</th>
            <th>Ancho Superior (cm)</th>
            <th>Ancho Inferior (cm)</th>
            <th>Largo (cm)</th>
            <th class="ultima-columna">Indicaciones de cuidado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="primera-columna">
              <p><strong>Pequeñas</strong></p>
            </td>
            <td>
              <p>12</p>
            </td>
            <td>
              <p>10.5</p>
            </td>
            <td>
              <p>21</p>
            </td>
            <td rowspan="3" class="ultima-columna">
              <p>Lavar con colores similares, No secar en máquina. No usar blanqueador, no planchar ni lavar en seco.</p>
            </td>
          </tr>
          <tr>
            <td class="primera-columna">
              <p><strong>Medianas</strong></p>
            </td>
            <td>
              <p>10.5</p>
            </td>
            <td>
              <p>8.5</p>
            </td>
            <td>
              <p>21</p>
            </td>
          </tr>
          <tr>
            <td class="primera-columna">
              <p><strong>Grandes</strong></p>
            </td>
            <td>
              <p>8</p>
            </td>
            <td>
              <p>7</p>
            </td>
            <td>
              <p>15</p>
            </td>
          </tr>
        </tbody>
      </table>

      <br>

      <h3>Toallas:</h3>
      <table class="table-medidas">
        <thead>
          <tr>
            <th class="primera-columna">Medidas</th>
            <th>Peso</th>
            <th>Materiales</th>
            <th>Garantía</th>
            <th class="ultima-columna">Indicaciones de cuidado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="primera-columna">
              <h4>Pequeñas</h4>
              <p>50cm x 30cm</p>
            </td>
            <td rowspan="2">
              <p></p>
            </td>
            <td rowspan="2">
              <p>80% Poliéster</p>
              <p>20% Poliamida</p>
            </td>
            <td rowspan="2">
              <p>1 año</p>
            </td>
            <td rowspan="2" class="ultima-columna">
              <p>Lavar con colores similares, No secar en máquina. No usar blanqueador, no planchar ni lavar en seco.</p>
            </td>
          </tr>
          <tr>
            <td class="primera-columna">
              <h4>Grandes</h4>
              <p>152 cm x 70 cm</p>
            </td>
          </tr>
        </tbody>
      </table>

      <br>

    </div>

    <div class="col-xs-20 col-xs-offset-2 garantia">
      <p><strong>Garantía: Solo incluye fallas de daños de fabrica. No cubre daños que han sido hechos por uso cotidiano de la prenda.</strong></p>
    </div>

    <br>

  </div>
</section>

@endsection

@section('scripts')

@endsection