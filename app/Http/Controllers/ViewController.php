<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\Paint;
use App\Models\Goods;


class ViewController extends Controller
{
        public function index()
        {
         if (auth()->check()) {
            // Redirect authenticated users to /home
            return redirect()->route('home');
        }
            $anime = Anime::all();
            $paint = Paint::take(4)->get();
            $goods = Goods::all();

            return view('welcome', compact('anime', 'paint', 'goods'));
        }
}
