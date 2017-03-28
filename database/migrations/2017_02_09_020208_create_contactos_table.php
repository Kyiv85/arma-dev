<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
  public function up()
  {
    Schema::create('contactos', function (Blueprint $table) {
      $table->increments('id');
      $table->string('nombre');
      $table->string('correo');
      $table->string('telefono')->nullable();
      $table->text('comentarios')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('contactos');
  }
}
