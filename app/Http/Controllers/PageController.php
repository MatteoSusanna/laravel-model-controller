<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index(){
        $movie = Movie::all();

        var_dump($movie);


        return view('homepage', ['film' => $movie]);
    }
}
