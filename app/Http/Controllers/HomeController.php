<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    private const OMDB_API_KEY = '64d32012';

    public function show()
    {
        $movie = $this->getMoviesList();

        return view('home', [
            'title' => $movie['Title'],
            'director' => $movie['Director'],
            'released' => $movie['Released'],
            'rating' => $movie['Rated'],
            'year' => $movie['Year'],
            'genre' => $movie['Genre']
        ]);
    }

    private function getMoviesList()
    {
        return Http::get('http://www.omdbapi.com/?apikey=' . self::OMDB_API_KEY . '&t=A');
    }
}