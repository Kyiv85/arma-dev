<?php

use Illuminate\Http\Request;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');*/


Route::post('v1/enviar_contacto', 'Api\V1\ContactosController@enviar_contacto')->name('api.v1.enviar_contacto');