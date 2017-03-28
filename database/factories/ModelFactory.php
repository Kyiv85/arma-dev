<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
  static $password;

  return [
    'name' => $faker->name,
    'email' => $faker->unique()->safeEmail,
    'password' => $password ?: $password = bcrypt('secret'),
    'remember_token' => str_random(10),
  ];
});

$factory->define(App\Contacto::class, function (Faker\Generator $faker) {
  return [
    'nombre' => $faker->name,
    'telefono' => '0' . $faker->numberBetween(2, 9) . '-' . $faker->randomDigit() . $faker->numberBetween(1000000, 9999999),
    'correo' => $faker->email(),
    'comentarios' => $faker->paragraph(3, true),
    'enviar_correo' => false,
  ];
});
