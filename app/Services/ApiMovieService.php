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
}
