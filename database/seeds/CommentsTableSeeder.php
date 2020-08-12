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
            'id_comments' => '1',
            'comment' => 'J\'adore les huskys'
        ]);
        Comments::create([
            'id_comments' => '2',
            'comment' => 'J\'aimerai les voir en vrai'
        ]);
        Comments::create([
            'id_comments' => '3',
            'comment' => 'Magnifique point de vue'
        ]);
        Comments::create([
            'id_comments' => '4',
            'comment' => 'Cette vue du ciel est belle'
        ]);
        Comments::create([
            'id_comments' => '5',
            'comment' => 'Jolie vid&eacute;o'
        ]);
        Comments::create([
            'id_comments' => '6',
            'comment' => 'Magnifique'
        ]);
        Comments::create([
            'id_comments' => '7',
            'comment' => 'Ca donne envie d\'aller skier'
        ]);
        Comments::create([
            'id_comments' => '8',
            'comment' => 'Joli petit h&eacute;risson'
        ]);
        Comments::create([
            'id_comments' => '9',
            'comment' => 'J\'aimerai les voir en vrai'
        ]);
        Comments::create([
            'id_comments' => '10',
            'comment' => 'Bel oiseau!'
        ]);
    }
}
