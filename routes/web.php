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
    $DCcomicsLinks = config('DCcomicsLinks');
    $DClinks = config('DClinks');
    $sites = config('sites');

    return view('/home', 
    [
        'links' => $links,
        'comics' => $comics,
        'bannerItems' => $bannerItems,
        'DCcomicsLinks' => $DCcomicsLinks ,
        'DClinks' => $DClinks,
        'sites' => $sites
    ]);

})->name('home');

Route::get('/comics', function () {
    $links = config('menu');
    $comics = config('comics');
    $bannerItems = config('bannerItems');
    $DCcomicsLinks = config('DCcomicsLinks');
    $DClinks = config('DClinks');
    $sites = config('sites');

    return view('/comics.index', 
    [
        'links' => $links,
        'comics' => $comics,
        'bannerItems' => $bannerItems,
        'DCcomicsLinks' => $DCcomicsLinks ,
        'DClinks' => $DClinks,
        'sites' => $sites
    ]);

})->name('comics.index');

Route::get('/movies', function () {
    $links = config('menu');
    $comics = config('comics');
    $bannerItems = config('bannerItems');
    $DCcomicsLinks = config('DCcomicsLinks');
    $DClinks = config('DClinks');
    $sites = config('sites');

    return view('/movies.index', 
    [
        'links' => $links,
        'comics' => $comics,
        'bannerItems' => $bannerItems,
        'DCcomicsLinks' => $DCcomicsLinks ,
        'DClinks' => $DClinks,
        'sites' => $sites
    ]);

})->name('movies.index');



Route::get('/comic/{id}', function ($id) {
    $links = config('menu');
    $comics = config('comics');
    $bannerItems = config('bannerItems');
    $DCcomicsLinks = config('DCcomicsLinks');
    $DClinks = config('DClinks');
    $sites = config('sites');

    $comic = $comics[$id];
    $artists = $comics[$id]['artists'];
    $writers = $comics[$id]['writers'];
    

    if(!is_numeric($id) || $id < 0  || $id >= count($comics))
        abort(404);
    

    return view('/comics.show', 
    [
        'links' => $links,
        'comics' => $comics,
        'bannerItems' => $bannerItems,
        'DCcomicsLinks' => $DCcomicsLinks ,
        'DClinks' => $DClinks,
        'sites' => $sites,
        'comic' => $comic,
        'artists' => $artists,
        'writers' => $writers,
    ]);
})->name('comics.show');


