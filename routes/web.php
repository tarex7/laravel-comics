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
    $links = [
        ['name'=>'characters'],
        ['name'=>'comics'],
        ['name'=>'movies'],
        ['name'=>'tv'],
        ['name'=>'games'],
        ['name'=>'collectibles'],
        ['name'=>'videos'],
        ['name'=>'fans'],
        ['name'=>'news'],
        ['name'=>'characters'],
        
    ];
    return view('home', compact('links'));
});
