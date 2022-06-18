<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('homepage');
    
    Route::get('/characters', function () {
    return 'characters page';
})->name('characters');

Route::get('/comics', function () {
    $comics = config('db.comics');
    return view('comics.index',compact('comics'));
})->name('comics');

Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    //dd($comics[$id]);
    if(is_numeric($id) && $id >= 0 && $id < count($comics)){
        $comic = $comics[$id];
        return view('comics.show',compact('comic'));
    }else{
        abort(404);
    }
})->name('comic');
    
    Route::get('/movies', function () {
    return 'movies page';
})->name('movies');

Route::get('/tv', function () {
    return 'tv page';
})->name('tv');

Route::get('/games', function () {
    return 'games page';
})->name('games');

Route::get('/collectibles', function () {
    return 'collecctibles page';
})->name('collectibles');

Route::get('/videos', function () {
    return 'videos page';
})->name('videos');

Route::get('/fans', function () {
    return 'fans page';
})->name('fans');

Route::get('/news', function () {
    return 'news page';
})->name('news');

Route::get('/shop', function () {
    return 'shop page';
})->name('shop');