<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'street' => 'AdminStreet',
            'postcode' => '5000',
            'city' => 'Namur',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
            'admin' => 1,
            'role' => 'subunlimited',
            'remember_token' => Str::random(10),
            'country_id' => '1'
        ]);
        User::create([
            'name' => 'Subscriber',
            'street' => 'SubscriberStreet',
            'postcode' => '5000',
            'city' => 'Namur',
            'email' => 'subscriber@example.com',
            'password' => bcrypt('subscriber'),
            'admin' => 0,
            'role' => 'subscriber',
            'remember_token' => Str::random(10),
            'country_id' => '1'
        ]);
        User::create([
            'name' => 'Subscriber unlimited',
            'street' => 'SubunlimitedStreet',
            'postcode' => '5000',
            'city' => 'Namur',
            'email' => 'subunlimited@example.com',
            'password' => bcrypt('subunlimited'),
            'admin' => 0,
            'role' => 'subunlimited',
            'remember_token' => Str::random(10),
            'country_id' => '1'
        ]);
        factory(User::class, 10)->create();
    }
}
