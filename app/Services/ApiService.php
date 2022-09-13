<?php

namespace App\Services;

use App\Models\RememberToken;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class ApiService
{
    public static function getNowPlaying($page = 1) {

        $response = Http::acceptJson()->get(env('API_MOVIE_URL'). '/now_playing',[
            'api_key' => env('API_MOVIE_KEY'),
            'language' => 'id-ID',
            'page' => $page,
        ]);
        return json_decode($response?->getBody()?->getContents())->results;
    }

    public static function getPopular() {

        $response = Http::acceptJson()->get(env('API_MOVIE_URL'). '/popular',[
            'api_key' => env('API_MOVIE_KEY'),
            'language' => 'id-ID',
            'page' => 1,
        ]);
        return json_decode($response?->getBody()?->getContents())->results;
    }

    public static function getTopRated() {

        $response = Http::acceptJson()->get(env('API_MOVIE_URL'). '/top_rated',[
            'api_key' => env('API_MOVIE_KEY'),
            'language' => 'id-ID',
            'page' => 1,
        ]);
        return json_decode($response?->getBody()?->getContents())->results;
    }

    public static function getUpcoming() {

        $response = Http::acceptJson()->get(env('API_MOVIE_URL'). '/upcoming',[
            'api_key' => env('API_MOVIE_KEY'),
            'language' => 'id-ID',
            'page' => 1,
        ]);
        return json_decode($response?->getBody()?->getContents())->results;
    }


    public static function getDetail($id) {

        $response = Http::acceptJson()->get(env('API_MOVIE_URL'). '/' . $id,[
            'api_key' => env('API_MOVIE_KEY'),
            'language' => 'id-ID',
        ]);
        return json_decode($response?->getBody()?->getContents());
    }

}
