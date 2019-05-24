<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use guiasbn\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'category_id' => function(){
            return guiasbn\Category::inRandomOrder()->first()->id;
        },
		'street_id' => function(){
            return guiasbn\Street::inRandomOrder()->first()->id;
        },
		'name' => $faker->name,
		'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'cel' => $faker->phoneNumber,
		'email' => $faker->email,
		'postalcode' => $faker->postcode,
		'image' => 'https://via.placeholder.com/300x150',
        'description' => $faker->realText(rand(50, 240)),
        'map' => $faker->latitude . $faker->longitude,
        'active' => $faker->boolean,
        'featured' => $faker->boolean
    ];
});
