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

    public function popular()
    {
        $popular = ApiMovieService::getPopular();
        return view('popular', [
            'title' => 'Popular',
            'popular' => $popular
        ]);
    }

    public function topRated()
    {
        $topRated = ApiMovieService::getTopRated();
        return view('top-rated', [
            'title' => 'Top Rated',
            'topRated' => $topRated
        ]);
    }

    public function upcoming()
    {
        $upcoming = ApiMovieService::getUpcoming();
        return view('upcoming', [
            'title' => 'Upcoming',
            'upcoming' => $upcoming
        ]);
    }
}
