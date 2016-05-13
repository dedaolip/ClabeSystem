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

$factory->define(App\Veiculo::class, function(Faker\Generator $faker) {
    return [
        'responsavel_id' => $faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', ]),
        'placa' => $faker->randomElement(['asd-4567', 'ghl-5487', 'sfd-5418', 'rte-6348', 'qyt-3756', 'gdo-2720', 'qbc-9675', 'pum-0745', 'lag-3854', 'fqw-4196']),
        'ano'  => $faker->randomElement(['2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2007', '2008']),
        'registro'  => $faker->randomElement(['146745', '468567', '567856', '568978', '467456', '32567', '98678', '373456', '9867', '456745']),
        'tipo'  => $faker->randomElement(['Onibus', 'Van', 'Carro', 'Moto']),
    ];
});



$factory->define(App\Funcionario::class, function(Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'pessoa_id'  => function() {
            return factory(App\Pessoa::class)->create()->id;
        },
        'cargo_id'  =>$faker->randomElement(['1', '2', '3'])
    ];
});

