<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paint;


class PaintController extends Controller
{
    public function view()
    {
        $paint = Paint::all();
        return view('page.paint', compact('paint'));
    }
}
