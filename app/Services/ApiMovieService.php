<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ApiMovieService
{
    public static function getNowPlaying() {
        $response = Http::acceptJson()->get(env('APP_MOVIE_URL'). '/now_playing',[
            'api_key' => env('APP_MOVIE_KEY'),
            'language' => 'en-US'
        ]);
        return json_decode($response?->getBody()?->getContents())->results;
    }

    public static function getPopular(){
        $response = Http::acceptJson()->get(env('APP_MOVIE_URL'). '/popular',[
            'api_key' => env('APP_MOVIE_KEY'),
            'language' => 'en-US'
        ]);
        return json_decode($response?->getBody()?->getContents())->results;
    }

    public static function getTopRated(){
        $response = Http::acceptJson()->get(env('APP_MOVIE_URL'). '/top_rated',[
            'api_key' => env('APP_MOVIE_KEY'),
            'language' => 'en-US'
        ]);
        return json_decode($response?->getBody()?->getContents())->results;
    }

    public static function getUpcoming(){
        $response = Http::acceptJson()->get(env('APP_MOVIE_URL'). '/upcoming',[
            'api_key' => env('APP_MOVIE_KEY'),
            'language' => 'en-US'
        ]);
        return json_decode($response?->getBody()?->getContents())->results;
    }

    public static function getDetail($id) {
        $response = Http::acceptJson()->get(env('APP_MOVIE_URL'). '/' . $id,[
            'api_key' => env('APP_MOVIE_KEY'),
            'language' => 'en-US',
        ]);
        return json_decode($response?->getBody()?->getContents());
    }
}
