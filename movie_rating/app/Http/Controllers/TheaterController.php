<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theater;

class TheaterController extends Controller
{
    
    public function index(){       
        return view('theaters')->with('theaters', Theater::all());
    }
}
