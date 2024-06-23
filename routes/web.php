<?php

use App\Http\Controllers\Adim\ComicController;
use App\Http\Controllers\CestinoComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('comics', ComicController::class);

Route::get('/baskets', [CestinoComicController::class, 'index'])->name('cestino');

Route::put('/baskets/{bascket}', [CestinoComicController::class, 'restoration'])->name('restoration');

Route::delete('/baskets/{bascket}', [CestinoComicController::class, 'delete'])->name('delete');