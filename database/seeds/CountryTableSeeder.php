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
            'name' => 'Belgique'
        ]);
        Country::create([
            'id' => '2',
            'name' => 'Italie'
        ]);
        Country::create([
            'id' => '3',
            'name' => 'Espagne'
        ]);
        Country::create([
            'id' => '4',
            'name' => 'Portugal'
        ]);
    }
}
