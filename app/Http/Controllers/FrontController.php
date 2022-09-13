<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Http;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $np = ApiService::getNowPlaying();
        $popular = ApiService::getPopular();
        $tr = ApiService::getTopRated();
        $uc = ApiService::getUpcoming();

        return view('beranda',[
            'nowPlaying' => $np,
            'popular' => $popular,
            'topRated' => $tr,
            'upComing' => $uc,
        ]);
    }

    public function nowPlaying()
    {
        return view('now-playing');
    }

    public function popular()
    {
        $popular = ApiService::getPopular();
        return view('popular',[
            'popular' => $popular,
        ]);
    }

    public function topRated()
    {
        $topRated = ApiService::getTopRated();
        return view('top-rated',[
            'topRated' => $topRated,
        ]);
    }


    public function upComing()
    {
        $upComing = ApiService::getUpcoming();
        return view('up-coming',[
            'upComing' => $upComing,
        ]);
    }

    public function detail($id)
    {
        $data = ApiService::getDetail($id);
        return view('detail',[
            'data' => $data,
        ]);
    }



}
