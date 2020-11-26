<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => "<p>".implode("</p>\n\n<p>", $faker->paragraphs(rand(3,6)))."</p>",
        'author' => $faker->name,

    ];
});
