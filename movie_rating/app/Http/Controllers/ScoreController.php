<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Theater;
use App\Score;
use Illuminate\Support\Facades\DB;

class ScoreController extends Controller
{
    
    public function index($movie_id){
        $rating = 0;
        $r = 0;
        foreach(Movie::find($movie_id)->scores as $score){
            $rating += $score->rating;
        }
        if(count(Movie::find($movie_id)->scores) !== 0){
            $r = $rating / count(Movie::find($movie_id)->scores);
        }
        
        $data = [
            'name' => Movie::find($movie_id)->name,
            'theater' => Theater::find(Movie::find($movie_id)->theater_id)->name,
            'rating' => $r
        ];
        
        return view('score')->with('data', $data);
    }

    public function qualify($movie_id){
        $data = [
            'name' => Movie::find($movie_id)->name,
            'movie_id' => $movie_id
        ];
        return view('qualify')->with('data', $data);
    
    }

    public function store(Request $request){
        $some = DB::select('SELECT * FROM scores WHERE movie_id = ? and user_id = ?', [$request->input('movie_id'), $request->input('user_id')] );
        if(count($some) === 0){                
            $score = new Score;
            $score->movie_id = $request->input('movie_id');
            $score->user_id = $request->input('user_id');
            $score->rating = $request->input('score');
            $score->save();
            return redirect('theaters')->with('message', "1");
        }else{
            return redirect('theaters')->with('message', "2");
        }
    }

    public function list($user_id){     

        return view('score-list')->with('scores', Score::all()->where('user_id', $user_id));

    }


}
