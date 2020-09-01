<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'id' => '1',
            'name' => 'Allemagne'
        ]);
        Country::create([
            'id' => '2',
            'name' => 'Autriche'
        ]);
        Country::create([
            'id' => '3',
            'name' => 'Belgique'
        ]);
        Country::create([
            'id' => '4',
            'name' => 'Croatie'
        ]);
        Country::create([
            'id' => '5',
            'name' => 'Espagne'
        ]);
        Country::create([
            'id' => '6',
            'name' => 'Finlande'
        ]);
        Country::create([
            'id' => '7',
            'name' => 'Grèce'
        ]);
        Country::create([
            'id' => '8',
            'name' => 'Irlande'
        ]);
        Country::create([
            'id' => '9',
            'name' => 'Italie'
        ]);
        Country::create([
            'id' => '10',
            'name' => 'Portugal'
        ]);
    }
}
