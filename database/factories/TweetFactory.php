<?php

use Faker\Generator as Faker;

$factory->define(App\Tweet::class, function (Faker $faker) {
    return [
        'body'	=> $faker->sentence,
    ];
});
