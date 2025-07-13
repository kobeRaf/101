<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function uploadAnime(Request $request)
    {
        $filename = $this->storeImage($request, 'anime');
        \DB::table('anime')->insert([
            'name' => $request->name,
            'filename' => $filename,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return back()->with('status', 'Anime uploaded successfully!');
    }

    public function uploadPaint(Request $request)
    {
        $filename = $this->storeImage($request, 'paint');
        \DB::table('paint')->insert([
            'name' => $request->name,
            'filename' => $filename,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return back()->with('status', 'Paint uploaded successfully!');
    }

    public function uploadGoods(Request $request)
    {
        $filename = $this->storeImage($request, 'goods');
        \DB::table('goods')->insert([
            'name' => $request->name,
            'filename' => $filename,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return back()->with('status', 'Goods uploaded successfully!');
    }

    private function storeImage(Request $request, string $folder)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        

        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        
   
       $image->move(public_path($folder), $filename);
        
        return $folder . '/' .  $filename; 
    }
}
