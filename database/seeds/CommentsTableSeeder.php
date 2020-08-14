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
            'comment' => 'J\'adore les huskys',
            'users_id' => mt_rand(3, 13),
            'video_id' => '11',
        ]);
        Comments::create([
            'id_comments' => '2',
            'comment' => 'J\'aimerais les voir en vrai',
            'users_id' => mt_rand(3, 13),
            'video_id' => '4',
        ]);
        Comments::create([
            'id_comments' => '3',
            'comment' => 'Magnifique point de vue',
            'users_id' => mt_rand(3, 13),
            'video_id' => '6',
        ]);
        Comments::create([
            'id_comments' => '4',
            'comment' => 'Cette vue du ciel est belle',
            'users_id' => mt_rand(3, 13),
            'video_id' => '1',
        ]);
        Comments::create([
            'id_comments' => '5',
            'comment' => 'Jolie vidéo',
            'users_id' => mt_rand(3, 13),
            'video_id' => '5',
        ]);
        Comments::create([
            'id_comments' => '6',
            'comment' => 'Magnifique',
            'users_id' => mt_rand(3, 13),
            'video_id' => '2',
        ]);
        Comments::create([
            'id_comments' => '7',
            'comment' => 'Ca donne envie d\'aller skier',
            'users_id' => mt_rand(3, 13),
            'video_id' => '21',
        ]);
        Comments::create([
            'id_comments' => '8',
            'comment' => 'Joli petit hérisson',
            'users_id' => mt_rand(3, 13),
            'video_id' => '9',
        ]);
        Comments::create([
            'id_comments' => '9',
            'comment' => 'J\'aimerais les voir en vrai',
            'users_id' => mt_rand(3, 13),
            'video_id' => '11',
        ]);
        Comments::create([
            'id_comments' => '10',
            'comment' => 'Bel oiseau!',
            'users_id' => mt_rand(3, 13),
            'video_id' => '15',
        ]);
    }
}
