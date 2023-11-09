<?php

namespace App\Http\Controllers;

use App\Services\ApiMovieService;

class MainController extends Controller
{
    public function index()
    {
        $np = ApiMovieService::getNowPlaying();
        // dd($np);

        return view('home', [
            'title' => 'Home',
            'nowPlaying' => $np,
        ]);
    }

    public function nowPlaying()
    {
        $np = ApiMovieService::getNowPlaying();
        return view('now-playing', [
            'title' => 'Now Playing',
            'nowPlaying' => $np,
        ]);
    }
}
