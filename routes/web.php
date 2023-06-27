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
    $links = config('store.someLinks');
    $comics = config('comics');
    $action = config('store.section1Footer');
    return view('welcome', compact('links','comics','action'));
});

Route::get('/otherpage', function () {
    $links = config('store.someLinks');
    return view('other', compact('links'));
});

Route::get('/comics/{series}', function (string $series) {
    // Header Data
    $links = config('store.someLinks');
    // Content Data
    $comic = config('comics');
    $slides = array('comics' => $comic, 'serie' => $series);

    // Footer Data

    return view('other', compact('links', 'comic','slides'));
});