<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Cargo::class, function(Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'nome'       => $faker->name
    ];
});

$factory->define(App\Pessoa::class, function(Faker\Generator $faker) {
    return [
        'nome'          => $faker->name,
        'cpf'           => $faker->randomElement(['F', 'M']),
        'fone'          => $faker->phoneNumber,
        'cel'           => $faker->phoneNumber,
        'endereco'      => $faker->address,
        'bairro'        => $faker->address,
        'cidade'        => $faker->city,
        'uf'            => $faker->randomElement(['SP', 'MG', 'RJ', 'SC', 'RO', 'PA', 'PB', 'BA', 'MA', 'AC']),
        'cep'           => '14.200-000',
        'data_nasc'     => $faker->dateTime,
        'created_at'    => $faker->dateTime,
        'updated_at'    => $faker->dateTime
    ];
});

$factory->define(App\Cliente::class, function(Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'pessoa_id'  => function() {
            return factory(App\Pessoa::class)->create()->id;
        }
    ];
});
