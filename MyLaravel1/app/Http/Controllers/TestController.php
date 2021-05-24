<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class TestController extends Controller
{
    public function home()
    {
        $movies = Movies::all();
        return view('pages.home', compact('movies'));
    }

    public function film($id) {
        $film = Movies::all();
        $film = Movies::findOrFail($id);
        return view('pages.film', compact('film'));
    }
}
