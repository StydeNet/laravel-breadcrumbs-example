<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        return view('genres.index', compact('genres'));
    }

    public function show(Genre $genre)
    {
        return view('genres.show', compact('genre'));
    }
}
