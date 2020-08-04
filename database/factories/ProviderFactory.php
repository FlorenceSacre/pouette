<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Provider;
//use App\Models\Subscription;
use Faker\Generator as Faker;

$factory->define(Provider::class, function (Faker $faker) {
    //$subscription = Subscription::all()->pluck('id')->toArray();
    return [
        'lastname' => $faker->lastName,
        'firstname' => $faker->firstName,
        //'categoryvideo_id' => $faker->randomElement($categoryvideo),
        //'subscription_id' => $faker->randomElement($subscription),
    ];
});
