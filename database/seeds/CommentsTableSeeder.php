<?php

use Illuminate\Database\Seeder;
use App\Models\Comments;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comments::create([
            'id' => '1',
            'comment' => 'J\'adore les huskys'
        ]);
        Comments::create([
            'id' => '2',
            'comment' => 'J\'aimerai les voir en vrai'
        ]);
        Comments::create([
            'id' => '3',
            'comment' => 'Magnifique point de vue'
        ]);
        Comments::create([
            'id' => '4',
            'comment' => 'Cette vue du ciel est belle'
        ]);
        Comments::create([
            'id' => '5',
            'comment' => 'Jolie vid&eacute;o'
        ]);
        Comments::create([
            'id' => '6',
            'comment' => 'Magnifique'
        ]);
        Comments::create([
            'id' => '7',
            'comment' => 'Ca donne envie d\'aller skier'
        ]);
        Comments::create([
            'id' => '8',
            'comment' => 'Joli petit h&eacute;risson'
        ]);
        Comments::create([
            'id' => '9',
            'comment' => 'J\'aimerai les voir en vrai'
        ]);
        Comments::create([
            'id' => '10',
            'comment' => 'Bel oiseau!'
        ]);
    }
}
