<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Episode;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $genres = Genre::all();
        $movies = Movie::all();
        return view('home', compact('genres','movies'));
    }

    public function detail(Request $request){
        $movie = Movie::where('id', $request->id)->get()->first();
        $totalEpisode = Episode::where('movie_id', $request->id)->get()->count();
        // $episodes = Episode::where('movie_id', $request->id)->simplePaginate(3);
        $episodes = Episode::where('movie_id', $request->id)->paginate(3);
        return view('detail', compact('movie','totalEpisode', 'episodes'));
    }

    public function category(Request $request){
        $genre = Genre::where('id', $request->id)->get()->first();
        $movies =  Movie::where('genre_id', $request->id)->get();
        return view('genre', compact('genre', 'movies'));
    }
}


