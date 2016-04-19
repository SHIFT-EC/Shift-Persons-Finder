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

$factory->define(Spf\User::class, function (Faker\Generator $faker) {
    return [
        'name'      => $faker->name,
        'last_name' => $faker->lastName,
        'email'     => $faker->safeEmail,
        'phone'     => $faker->phoneNumber,
        'policy'    => $faker->randomElement([ 1, 0 ])
    ];
});

$factory->define(Spf\Shift\Entities\Missing::class, function (Faker\Generator $faker) {
    return [

        'first_name'        => $faker->firstName,
        'second_first_name' => $faker->lastName,
        'last_name'         => $faker->firstName,
        'second_last_name'  => $faker->lastName,
        'age'               => $faker->numberBetween(1, 85),
        'gender'            => $faker->randomElement([ 'masculino', 'femenino' ]),
        'photo'             => 'avatar.jpg',
        'description'       => $faker->paragraph(1),
        'message_user'      => $faker->paragraph(1),
        'status'            => $faker->randomElement([ 'fallecido', 'desaparecido', 'vivo' ]),
        'address'           => $faker->address,
        'last_location'     => $faker->address,
        'user_id'           => $faker->numberBetween(1, 200)

    ];
});
