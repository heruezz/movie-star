<?php

namespace App\Http\Controllers;

use App\Services\ApiMovieService;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class MainController extends Controller
{
    public function index()
    {
        $np = ApiMovieService::getNowPlaying(request('page'));
        $dataNP = $np->results;
        $popular = ApiMovieService::getPopular(request('page'));
        $dataPopular = $popular->results;
        $topRated = ApiMovieService::getTopRated(request('page'));
        $dataTopRated = $topRated->results;
        $upcoming = ApiMovieService::getUpcoming(request('page'));
        $dataUpcoming = $upcoming->results;
        return view('home', [
            'title' => 'Home',
            'nowPlaying' => $dataNP,
            'popular' => $dataPopular,
            'topRated' => $dataTopRated,
            'upcoming' => $dataUpcoming
        ]);
    }

    public function nowPlaying()
    {
        $np = ApiMovieService::getNowPlaying(request('page'));
        $perPage = 20;
        $data = new LengthAwarePaginator($np->results, $np->total_results, $perPage,request('page'), [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        return view('now-playing', [
            'title' => 'Now Playing',
            'nowPlaying' => $data
        ]);
    }

    public function popular()
    {
        $popular = ApiMovieService::getPopular(request('page'));
        $perPage = 20;
        $data = new LengthAwarePaginator($popular->results, $popular->total_results, $perPage,request('page'), [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);
        return view('popular', [
            'title' => 'Popular',
            'popular' => $data
        ]);
    }

    public function topRated()
    {
        $topRated = ApiMovieService::getTopRated(request('page'));
        $perPage = 20;
        $data = new LengthAwarePaginator($topRated->results, $topRated->total_results, $perPage,request('page'), [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);
        return view('top-rated', [
            'title' => 'Top Rated',
            'topRated' => $data
        ]);
    }

    public function upcoming()
    {
        $upcoming = ApiMovieService::getUpcoming(request('page'));
        $perPage = 20;
        $data = new LengthAwarePaginator($upcoming->results, $upcoming->total_results, $perPage,request('page'), [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);
        return view('upcoming', [
            'title' => 'Upcoming',
            'upcoming' => $data
        ]);
    }

    public function detail($id)
    {
        $detail = ApiMovieService::getDetail($id);
        return view('detail', [
            'title' => 'Detail',
            'detail' => $detail
        ]);
    }

    public function search()
    {
        $search = ApiMovieService::getMovie(request('search'), request('page'));
        $perPage = 20;
        $data = new LengthAwarePaginator($search->results, $search->total_results, $perPage,request('page'), [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);
        return view('search', [
            'title' => 'Search',
            'titlePage' => request('search'),
            'data' => $data
        ]);
    }
}
