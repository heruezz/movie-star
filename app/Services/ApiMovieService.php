<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ApiMovieService
{
    public static function getNowPlaying($page) {
        $response = Http::acceptJson()->get(env('APP_MOVIE_URL'). '/now_playing',[
            'api_key' => env('APP_MOVIE_KEY'),
            'language' => 'en-US',
            'page' => $page
        ]);
        return json_decode($response?->getBody()?->getContents());
    }

    public static function getPopular($page){
        $response = Http::acceptJson()->get(env('APP_MOVIE_URL'). '/popular',[
            'api_key' => env('APP_MOVIE_KEY'),
            'language' => 'en-US',
            'page' => $page
        ]);
        return json_decode($response?->getBody()?->getContents());
    }

    public static function getTopRated($page){
        $response = Http::acceptJson()->get(env('APP_MOVIE_URL'). '/top_rated',[
            'api_key' => env('APP_MOVIE_KEY'),
            'language' => 'en-US',
            'page' => $page
        ]);
        return json_decode($response?->getBody()?->getContents());
    }

    public static function getUpcoming($page){
        $response = Http::acceptJson()->get(env('APP_MOVIE_URL'). '/upcoming',[
            'api_key' => env('APP_MOVIE_KEY'),
            'language' => 'en-US',
            'page' => $page
        ]);
        return json_decode($response?->getBody()?->getContents());
    }

    public static function getDetail($id) {
        $response = Http::acceptJson()->get(env('APP_MOVIE_URL'). '/' . $id,[
            'api_key' => env('APP_MOVIE_KEY'),
            'language' => 'en-US',
        ]);
        return json_decode($response?->getBody()?->getContents());
    }

    public static function getMovie($search) {
        $response = Http::acceptJson()->get(env('APP_SEARCH_MOVIE_URL'),[
            'query' => $search,
            'api_key' => env('APP_MOVIE_KEY'),
            'language' => 'en-US',
        ]);
        return json_decode($response?->getBody()?->getContents())->results;
    }
}
