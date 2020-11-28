<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //movie
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'The World of The Married',
            'photo' => 'movieone.jpg', 
            'description' => 'The series is the highest-rated drama in Korean cable television history, overtaking SKY Castle with its final episode reaching a nationwide rating of 28.371%',
            'rating' => '4'
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Boys Over Flowers',
            'photo' => 'boyover.jpg', 
            'description' => 'Boys Over Flowers is a 2009 South Korean television series that is based on the Japanese shōjo manga series Boys Over Flowers',
            'rating' => '5'
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Descendant of The Sun',
            'photo' => 'ofthesun.jpg', 
            'description' => 'Descendant of The Sun is a 2016 South Korean television series starring Song Joong-ki, Song Hye-kyo, Jin Goo, and Kim Ji-won.',
            'rating' => '4'
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Hotel Del Luna',
            'photo' => 'hoteldel.jpg', 
            'description' => 'Hotel del Luna is a 2019 South Korean television series, starring IU and Yeo Jin Goo as the owner and manager, respectively, of the eponymous hotel that caters only to ghosts. Written by the Hong sisters, it aired on tvN from July 13 to September 1, 2019.',
            'rating' => '4'
        ]);

        //Kids
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Boboiboy',
            'photo' => 'boboiboy.jpg', 
            'description' => 'BoBoiBoy is a Malaysian animated series and franchise produced by Animonsta Studios. In this story, a teenage boy has superpowers that is based on elementals. He has the ability to separate into three.',
            'rating' => '4'
        ]);
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Naruto',
            'photo' => 'naruto.jpg', 
            'description' => 'Naruto is a Hokage in Konoha and he is an orphan who has a dangerous fox-like entity known as Kurama the Nine-Tailed Fox sealed within his body by his father, the Fourth Hokage Minato Namikaze.',
            'rating' => '4'
        ]);
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Super Wings',
            'photo' => 'superwings.jpg', 
            'description' => 'Series revolves around an adorable jet plane named Jett who travels the world delivering packages to children. With every delivery, Jett encounters a new problem that he and his friends the Super Wings must work together to solve.',
            'rating' => '4'
        ]);
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Pokemon',
            'photo' => 'pokemon.jpg', 
            'description' => 'The Pokémon franchise revolves around 898 fictional species of collectible monsters, each having unique designs and skills.',
            'rating' => '4'
        ]);

        //TvShow
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Money Heist',
            'photo' => 'moneyheist.jpg', 
            'description' => 'Eight thieves take hostages and lock themselves in the Royal Mint of Spain as a criminal mastermind manipulates the police to carry out his plan.',
            'rating' => '4'
        ]);
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Stranger Things',
            'photo' => 'strangerthings.jpg', 
            'description' => 'When a young boy vanishes, a small town uncovers a mystery involving secret experiments, terrifying supernatural forces and one strange little girl',
            'rating' => '4'
        ]);
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'You',
            'photo' => 'you.jpg', 
            'description' => 'A young man who is absurdly charming but too obsessive is willing to do anything to be a part of the lives of those who have stolen his heart.',
            'rating' => '4'
        ]);
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Dark',
            'photo' => 'dark.jpg', 
            'description' => 'A missing child sets four families on a frantic hunt for answers as they unearth a mind-bending mystery that spans three generations.',
            'rating' => '4'
        ]);
    }
}
