<?php

use Faker\Generator as Faker;

// For post assign client_it and create new client
$factory->define(App\Post::class, function ($faker) {
    return [
        'number' => $faker->phonenumber,
        'client_id' => function () {
            return factory(App\Client::class)->create()->id;
        }



    ];
});
