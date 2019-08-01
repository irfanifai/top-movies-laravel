<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class IndexController extends Controller
{
    public function index()
    {
        $client = new Client();

        /// Popular Movies
        $response = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie?api_key=d1d2048d1f649312e04abcee7143e4e2&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false');

        $pop = json_decode($response->getBody()->getContents(), true);

        // / Daily Trending Movies
        $response = $client->request('GET', 'https://api.themoviedb.org/3/trending/movie/day?api_key=d1d2048d1f649312e04abcee7143e4e2');

        $result = json_decode($response->getBody()->getContents(), true);

        // Top Rated Movies
        $toprated = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie?api_key=d1d2048d1f649312e04abcee7143e4e2&language=en-US&sort_by=vote_average.desc&include_adult=false&include_video=false&page=1&primary_release_year=2019');

        $top = json_decode($toprated->getBody()->getContents(), true);

        // Menu Genres
        $response = $client->request('GET', 'https://api.themoviedb.org/3/genre/movie/list?api_key=d1d2048d1f649312e04abcee7143e4e2&language=en-US');

        $menu = json_decode($response->getBody()->getContents(), true);

        return view('home.app', [
            'pop' => $pop,
            'result' => $result,
            'top' => $top,
            'menu' => $menu
        ]);
    }

}
