<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UploadController; 
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\ViewController;
use App\Http\Controllers\PaintController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\SocialController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [ViewController::class, 'index']);

// pagesphp artisan route:list
Route::get('page/paint', [PaintController::class, 'view'])->name('paint');
Route::get('page/anime', [AnimeController::class, 'view'])->name('anime');
Route::get('page/goods', [GoodsController::class, 'view'])->name('goods');
Route::get('page/social', [SocialController::class, 'view'])->name('social');


Route::get('page/contact', function () {
     return view('page.contact');
})->name('contact');


// controller
Route::post('/upload-anime', [UploadController::class, 'uploadAnime'])->name('upload.anime');
Route::post('/upload-paint', [UploadController::class, 'uploadPaint'])->name('upload.paint');
Route::post('/upload-goods', [UploadController::class, 'uploadGoods'])->name('upload.goods');