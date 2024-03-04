<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Movie;

class MovieController extends Controller
{
    public function index() 
    {

        $movies = Movie::all();             // :: fa riferimento a qualcosa di statico legato alla classe e non alle singole istanze

         // dd($movies);

        return view('movies.index', compact('movies'));

    }
}
