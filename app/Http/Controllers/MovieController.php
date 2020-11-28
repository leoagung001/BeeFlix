<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movies;
use App\episodes;

use function GuzzleHttp\Promise\all;

class MovieController extends Controller
{
    public function home_page(){
        //$movie_drama = movies::all()->where('genre_id', 1);
        $movie_drama = movies::where('genre_id',1)->get();
        $movie_kids = movies::where('genre_id',2)->get();
        $movie_tvShow = movies::where('genre_id',3)->get();
        
        $movie = [
            "Drama" => $movie_drama,
            "Kids" => $movie_kids,
            "Tv Show" => $movie_tvShow
        ];

        return view('home_page')->with('movie', $movie);
    }

    public function detail($filmId) {
        $detail = movies::where('id', $filmId) -> first();
        $detail_episode = episodes::where ('movie_id', $filmId) -> paginate(3);
        
        return view('detail') -> with('detail', $detail) -> with('episodes', $detail_episode);
    }

    public function categories(Request $request) {
        if ($request -> genre_name === 'drama') {
            $result = movies::where('genre_id', 1)->get();
        }else if ($request -> genre_name === 'kids') {
            $result = movies::where('genre_id', 2)->get();
        }else if ($request -> genre_name === 'tvshows') {
            $result = movies::where('genre_id', 3)->get();
        }

        return view('categories') -> with('result', $result);
    }

}
