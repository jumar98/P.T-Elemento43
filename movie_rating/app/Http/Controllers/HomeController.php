<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Score;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function profile(){
        return view('profile')->with('ratings', Score::all()->where('user_id', Auth::user()->id));
    }
}
