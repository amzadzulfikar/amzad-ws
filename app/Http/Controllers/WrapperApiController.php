<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperApiController extends Controller
{
    public function search(){
        $json = Http::get('https://api.giphy.com/gifs/search')->json();
        return response()->json($json);
    }

    public function trending(){
        $json = Http::get('https://api.giphy.com/gifs/trending')->json();
        return response()->json($json);
    }

    public function sticker_search(){
        $json = Http::get('https://api.giphy.com/stickers/trending')->json();
        return response()->json($json);
    }

    public function sticker_trending(){
        $json = Http::get('https://api.giphy.com/stickers/search?q=rocket&limit=25&offset=0&rating=g')->json();
        return response()->json($json);
    }
}
