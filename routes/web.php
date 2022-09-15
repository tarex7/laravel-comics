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
    $links = config('menu');
    $comics = config('comics');
    $bannerItems = config('bannerItems');

    return view('home', ['links' => $links, 'comics' => $comics, 'bannerItems' => $bannerItems]);
});
