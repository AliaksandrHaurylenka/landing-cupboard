<?php

$factory->define(App\Service::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
    ];
});
