<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Song::create([
            'title' => 'test1',
            'artist' => 'honoka1',
            'src' => 'audio/audio1.mp3',
            'cover' => 'images/honoka2.png'
        ]);

        Song::create([
            'title' => 'test2',
            'artist' => 'honoka2',
            'src' => 'audio/audio2.mp3',
            'cover' => 'images/honoka3.png'
        ]);

        Song::create([
            'title' => 'test3',
            'artist' => 'honoka3',
            'src' => 'audio/audio3.mp3',
            'cover' => 'images/honoka4.png'
        ]);

        Song::create([
            'title' => 'test4',
            'artist' => 'honoka4',
            'src' => 'audio/audio4.mp3',
            'cover' => 'images/honoka5.png'
        ]);
    }
}
