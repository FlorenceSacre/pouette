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
            'users_id' => mt_rand(4, 13),
            'video_id' => '10',
        ]);
        Comments::create([
            'id_comments' => '2',
            'comment' => 'J\'aimerais les voir en vrai',
            'users_id' => mt_rand(4, 13),
            'video_id' => '9',
        ]);
        Comments::create([
            'id_comments' => '3',
            'comment' => 'Magnifique point de vue',
            'users_id' => mt_rand(4, 13),
            'video_id' => '6',
        ]);
        Comments::create([
            'id_comments' => '4',
            'comment' => 'Cette vue du ciel est belle',
            'users_id' => mt_rand(4, 13),
            'video_id' => '1',
        ]);
        Comments::create([
            'id_comments' => '5',
            'comment' => 'Jolie vidéo',
            'users_id' => mt_rand(4, 13),
            'video_id' => '5',
        ]);
        Comments::create([
            'id_comments' => '6',
            'comment' => 'Magnifique',
            'users_id' => mt_rand(3, 13),
            'video_id' => '13',
        ]);
        Comments::create([
            'id_comments' => '7',
            'comment' => 'Ca donne envie d\'aller skier',
            'users_id' => mt_rand(4, 13),
            'video_id' => '5',
        ]);
        Comments::create([
            'id_comments' => '8',
            'comment' => 'Joli petit hérisson',
            'users_id' => mt_rand(4, 13),
            'video_id' => '15',
        ]);
        Comments::create([
            'id_comments' => '9',
            'comment' => 'J\'aimerais les voir en vrai',
            'users_id' => mt_rand(4, 13),
            'video_id' => '11',
        ]);
        Comments::create([
            'id_comments' => '10',
            'comment' => 'Bel oiseau!',
            'users_id' => mt_rand(4, 13),
            'video_id' => '14',
        ]);
        Comments::create([
            'id_comments' => '11',
            'comment' => 'Ca donne envie d\'aller à la plage',
            'users_id' => mt_rand(4, 13),
            'video_id' => '8',
        ]);
        Comments::create([
            'id_comments' => '12',
            'comment' => 'Je n\'aimerai pas tomber dans l\'eau',
            'users_id' => mt_rand(4, 13),
            'video_id' => '20',
        ]);
        Comments::create([
            'id_comments' => '13',
            'comment' => 'C\'est vraiment beau',
            'users_id' => mt_rand(4, 13),
            'video_id' => '17',
        ]);
        Comments::create([
            'id_comments' => '14',
            'comment' => 'Belle ville',
            'users_id' => mt_rand(4, 13),
            'video_id' => '4',
        ]);
        Comments::create([
            'id_comments' => '15',
            'comment' => 'J\'adore les mouvements des vagues',
            'users_id' => mt_rand(4, 13),
            'video_id' => '7',
        ]);
    }
}
