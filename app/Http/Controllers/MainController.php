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

}
