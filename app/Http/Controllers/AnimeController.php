<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;


class AnimeController extends Controller
{
    public function view()
    {
        $anime = Anime::all();

        return view('page.anime', compact('anime'));
    }
}
