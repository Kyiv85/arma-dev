const elixir = require('laravel-elixir');

const node_folder = './node_modules/';

elixir(mix => {
  mix.copy(node_folder + "bootstrap-sass/assets/fonts/bootstrap", 'public/fonts/bootstrap');
  mix.copy(node_folder + "font-awesome/fonts", 'public/fonts');

  mix.copy(node_folder + "animate.css/animate.css", 'public/css');

  mix.sass('app.scss')
    .webpack('app.js');

  mix.sass('lightslider.scss')
    .webpack('lightslider.js');

  //mix.webpack('scroll.min.js');

  mix.sass('inicio.scss');

  mix.sass('canilleras.scss')
    .webpack('canilleras.js');

  mix.sass('toallas.scss')
    .webpack('toallas.js');

  mix.sass('personalizacion.scss')
    .webpack('personalizacion.js');

  mix.sass('somos.scss');

  mix.sass('clientes.scss');

  mix.sass('contenido_estatico.scss');

  mix.sass('contacto.scss')
    .webpack('contacto.js');
});
