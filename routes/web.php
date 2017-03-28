<?php

Route::get('/', function () {
  return view('frontend.inicio', [
    'title' => 'INICIO'
  ]);
});

Route::get('/canilleras', function () {
  return view('frontend.canilleras', [
    'title' => 'CANILLERAS'
  ]);
});

Route::get('/toallas', function () {
  return view('frontend.toallas', [
    'title' => 'TOALLAS'
  ]);
});

Route::get('/personalizacion', function () {
  return view('frontend.personalizacion', [
    'title' => 'PERSONALIZACIÓN'
  ]);
});

Route::get('/clientes', function () {
  return view('frontend.clientes', [
    'title' => 'CLIENTES'
  ]);
});

Route::get('/sobre_nosotros', function () {
  return view('frontend.sobre_nosotros', [
    'title' => 'SOBRE NOSOTROS'
  ]);
});

Route::get('/terminos_condiciones', function () {
  return view('frontend.terminos_condiciones', [
    'title' => 'TÉRMINOS Y CONDICIONES'
  ]);
});

Route::get('/preguntas_frecuentes', function () {
  return view('frontend.preguntas_frecuentes', [
    'title' => 'PREGUNTAS FRECUENTES'
  ]);
});

Route::get('/especificaciones_medidas', function () {
  return view('frontend.especificaciones_medidas', [
    'title' => 'ESPECIFICACIONES Y MEDIDAS'
  ]);
});

Route::get('/contacto', function () {
  return view('frontend.contacto', [
    'title' => 'CONTACTO'
  ]);
});

//Módulo Compra
Route::get('/compra', function () {
  return view('frontend.compra', [
    'title' => 'COMPRA'
  ]);
});