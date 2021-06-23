<?php

namespace App\Http\Controllers;

use App\movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index(){

        $movies = movie::all();
        /* dump($movies); */


        return view('home', ['movies' => $movies]);
    }
    
}
