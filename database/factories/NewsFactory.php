<?php

$factory->define(App\News::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "cocntent" => $faker->name,
    ];
});
