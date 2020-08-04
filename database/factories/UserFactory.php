<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Models Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
//    $gender = ['male', 'female'];
//    $role = ['customer'];
//    //$subscription = Subscription::all()->pluck('id')->toArray();
//    return [
//        'username' => $faker->userName,
//        'lastname' => $faker->lastName,
//        'firstname' => $faker->firstName,
//        'gender' => $faker->randomElement($gender),
//        'birthday' => $faker->dateTimeBetween('1900-01-01 00:00:00', '1999-12-31 23:59:59'),
//        'postal_code' => $faker->postcode,
//        'city' => $faker->city,
//        'country'=> $faker->country,
//        'email' => $faker->unique()->safeEmail,
//        'email_verified_at' => now(),
//        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//        'role' => $faker->randomElement($role),
//        'remember_token' => Str::random(10),
//        'created_at' => now(),
//        'updated_at' => now(),
//        'subscription_id' => $faker->randomElement($subscription),
    $role = ['customer', 'subscriber'];
    return [
        'name' => $faker->Name,
        'street' => $faker->streetAddress,
        'postcode' => $faker->postcode,
        'city' => $faker->city,
        'country'=> $faker->country,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'role' => $faker->randomElement($role),
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});