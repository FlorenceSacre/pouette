<?php

use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::create([
            'id' => '1',
            'titre' => 'Plage vue du ciel',
            'categorie' => 'Paysage',
            'videoBQ' => 'storage/app/public/videos/BeachBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/BeachHQ.mp4',
            'image' => 'storage/app/public/images/Beach.png',
        ]);
        Video::create([
            'id' => '2',
            'titre' => 'Montagnes',
            'categorie' => 'Paysage',
            'videoBQ' => 'storage/app/public/videos/MountainsBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/MountainsHQ.mp4',
            'image' => 'storage/app/public/images/Mountains.png',
        ]);
        Video::create([
            'id' => '3',
            'titre' => 'Cascade',
            'categorie' => 'Paysage',
            'videoBQ' => 'storage/app/public/videos/CascadeBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/CascadeHQ.mp4',
            'image' => 'storage/app/public/images/Cascade.png',
        ]);
        Video::create([
            'id' => '4',
            'titre' => 'Saigon au Vietnam',
            'categorie' => 'Paysage',
            'videoBQ' => 'storage/app/public/videos/SaigonBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/SaigonHQ.mp4',
            'image' => 'storage/app/public/images/Saigon.png',
        ]);
        Video::create([
            'id' => '5',
            'titre' => 'Paysage en Europe',
            'categorie' => 'Paysage',
            'videoBQ' => 'storage/app/public/videos/SkisBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/SkisHQ.mp4',
            'image' => 'storage/app/public/images/Skis.png',
        ]);
        Video::create([
            'id' => '6',
            'titre' => 'Point de vue',
            'categorie' => 'Paysage',
            'videoBQ' => 'storage/app/public/videos/SunriseBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/SunriseHQ.mp4',
            'image' => 'storage/app/public/images/Sunrise.png',
        ]);
        Video::create([
            'id' => '7',
            'titre' => 'Vagues',
            'categorie' => 'Paysage',
            'videoBQ' => 'storage/app/public/videos/WaveBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/WaveHQ.mp4',
            'image' => 'storage/app/public/images/Wave.png',
        ]);
        Video::create([
            'id' => '8',
            'titre' => 'Mouettes',
            'categorie' => 'Paysage',
            'videoBQ' => 'storage/app/public/videos/MouetteBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/MouetteHQ.mp4',
            'image' => 'storage/app/public/images/Mouette.png',
        ]);
        Video::create([
            'id' => '9',
            'titre' => 'Hérisson',
            'categorie' => 'Animaux',
            'videoBQ' => 'storage/app/public/videos/HedgehogBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/HedgehogHQ.mp4',
            'image' => 'storage/app/public/images/Hedgehog.png',
        ]);
        Video::create([
            'id' => '10',
            'titre' => 'Chevreuil',
            'categorie' => 'Animaux',
            'videoBQ' => 'storage/app/public/videos/Roe_DeerBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/Roe_DeerHQ.mp4',
            'image' => 'storage/app/public/images/Roe_Deer.png',
        ]);
        Video::create([
            'id' => '11',
            'titre' => 'Husky',
            'categorie' => 'Animaux',
            'videoBQ' => 'storage/app/public/videos/HuskyBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/HuskyHQ.mp4',
            'image' => 'storage/app/public/images/Husky.png',
        ]);
        Video::create([
            'id' => '12',
            'titre' => 'Poissons',
            'categorie' => 'Animaux',
            'videoBQ' => 'storage/app/public/videos/SeaBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/SeaHQ.mp4',
            'image' => 'storage/app/public/images/Sea.png',
        ]);
        Video::create([
            'id' => '13',
            'titre' => 'Rennes',
            'categorie' => 'Animaux',
            'videoBQ' => 'storage/app/public/videos/ReindeerBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/ReindeerHQ.mp4',
            'image' => 'storage/app/public/images/Reindeer.png',
        ]);
        Video::create([
            'id' => '14',
            'titre' => 'Tortue',
            'categorie' => 'Animaux',
            'videoBQ' => 'storage/app/public/videos/TurtleBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/TurtleHQ.mp4',
            'image' => 'storage/app/public/images/Turtle.png',
        ]);
        Video::create([
            'id' => '15',
            'titre' => 'Oiseau',
            'categorie' => 'Animaux',
            'videoBQ' => 'storage/app/public/videos/BirdBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/BirdHQ.mp4',
            'image' => 'storage/app/public/images/Bird.png',
        ]);
        Video::create([
            'id' => '16',
            'titre' => 'Mouettes',
            'categorie' => 'Animaux',
            'videoBQ' => 'storage/app/public/videos/MouetteBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/MouetteHQ.mp4',
            'image' => 'storage/app/public/images/Mouette.png',
        ]);
        Video::create([
            'id' => '17',
            'titre' => 'Bulle de savon',
            'categorie' => 'Hiver',
            'videoBQ' => 'storage/app/public/videos/Soap_BubbleBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/Soap_BubbleHQ.mp4',
            'image' => 'storage/app/public/images/Soap_Bubble.png',
        ]);
        Video::create([
            'id' => '18',
            'titre' => 'Coucher de soleil',
            'categorie' => 'Hiver',
            'videoBQ' => 'storage/app/public/videos/Sunrise_snowBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/Sunrise_snowHQ.mp4',
            'image' => 'storage/app/public/images/Sunrise_snow.png',
        ]);
        Video::create([
            'id' => '19',
            'titre' => 'Rennes',
            'categorie' => 'Hiver',
            'videoBQ' => 'storage/app/public/videos/ReindeerBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/ReindeerHQ.mp4',
            'image' => 'storage/app/public/images/Reindeer.png',
        ]);
        Video::create([
            'id' => '20',
            'titre' => 'Rivière glacée',
            'categorie' => 'Hiver',
            'videoBQ' => 'storage/app/public/videos/WinterBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/WinterHQ.mp4',
            'image' => 'storage/app/public/images/Winter.png',
        ]);
        Video::create([
            'id' => '21',
            'titre' => 'Paysage en Europe',
            'categorie' => 'Hiver',
            'videoBQ' => 'storage/app/public/videos/SkisBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/SkisHQ.mp4',
            'image' => 'storage/app/public/images/Skis.png',
        ]);
        Video::create([
            'id' => '22',
            'titre' => 'Chute de neige',
            'categorie' => 'Hiver',
            'videoBQ' => 'storage/app/public/videos/SnowBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/SnowHQ.mp4',
            'image' => 'storage/app/public/images/Snow.png',
        ]);
        Video::create([
            'id' => '23',
            'titre' => 'Oiseau',
            'categorie' => 'Hiver',
            'videoBQ' => 'storage/app/public/videos/BirdBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/BirdHQ.mp4',
            'image' => 'storage/app/public/images/Bird.png',
        ]);
        Video::create([
            'id' => '24',
            'titre' => 'Cascade',
            'categorie' => 'Hiver',
            'videoBQ' => 'storage/app/public/videos/CascadeBQ.mp4',
            'videoHQ' => 'storage/app/public/videos/CascadeHQ.mp4',
            'image' => 'storage/app/public/images/Cascade.png',
        ]);
    }
}