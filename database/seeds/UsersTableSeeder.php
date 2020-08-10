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
            'password' => bcrypt('password'),
            'admin' => 1,
            'role' => 'subscriber',
            'country_id' => '1'
        ]);
        User::create([
            'name' => 'Customer',
            'street' => 'CustomerStreet',
            'postcode' => '5000',
            'city' => 'Namur',
            'email' => 'customer@example.com',
            'password' => bcrypt('customer'),
            'admin' => 0,
            'role' => 'customer',
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
            'country_id' => '1'
        ]);
        factory(User::class, 10)->create();
    }
}
