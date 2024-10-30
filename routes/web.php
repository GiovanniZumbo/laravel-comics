<?php

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

    $comics = config("comics");

    $navLinks = ["characters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "news"];

    return view('pages.homepage', compact("comics", "navLinks"));
})->name("home");


Route::get('/comic/{index}', function (string $index) {

    $comics = config("comics");
    if (isset($comics[$index])) {

        $comic = $comics[$index];
        $navLinks = ["characters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "news"];
        return view('pages.show', compact("comic", "navLinks"));
    } else {
        abort(404); // Lancio un errore
    }
})->name("comic.show");
