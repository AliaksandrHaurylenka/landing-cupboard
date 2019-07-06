<?php

$factory->define(App\Galery1::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "content" => $faker->name,
    ];
});
