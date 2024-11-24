<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    private const OMDB_API_KEY = '64d32012';

    public function show()
    {
        return view('home', [
            'response' => $this->getMoviesList()
        ]);
    }

    private function getMoviesList()
    {
        $response = Http::get('http://www.omdbapi.com/?apikey=' . self::OMDB_API_KEY . '&t=A')->body();

        return $response;
    }
}