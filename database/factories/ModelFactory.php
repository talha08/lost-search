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
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Found::class, function (Faker\Generator $faker) {
    return [
        'user_id' => 1,
        'is_lost' => 'lost',
        'title' =>  $faker->title,
        'lost_place' =>  $faker->streetName,
        'lost_date' => $faker->date('Y_m-d'),
        'lost_time' => $faker->time('H:i:s'),
        'description' => $faker->sentence(30)
    ];
});



$factory->define(App\FoundAttachment::class, function (Faker\Generator $faker) {
    return [
        'found_id' => 1,
        'image' => $faker->imageUrl(620,413),
        'icon' =>  $faker->imageUrl(240,200),
    ];
});


$factory->define(App\FoundAttachment::class, function (Faker\Generator $faker) {
    return [
        'found_id' => 1,
        'name' => $faker->name,
        'email' =>  $faker->email,
        'description' =>  $faker->sentence(50)
    ];
});