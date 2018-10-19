<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theater;
use App\Movie;

class MovieController extends Controller
{
    
    public function index($theater_id){
        $movies = Theater::find($theater_id)->movies;
        $data = array(
            'name' => Theater::find($theater_id)->name,
            'movies' => $movies
        );
        
        return view('movies')->with('data', $data);
    }

    /*
    public function calcularRating($movie_id){
        $rating = 0;
        foreach(Movie::find($movie_id)->scores as $score){
            $rating += $score->rating;
        }
        $r = $rating / count(Movie::find($movie_id)->scores);
        return $r;
    }*/
}
