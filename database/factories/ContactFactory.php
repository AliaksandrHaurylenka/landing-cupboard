<?php

$factory->define(App\Contact::class, function (Faker\Generator $faker) {
    return [
        "phone" => $faker->name,
        "email" => $faker->name,
        "address" => $faker->name,
    ];
});
