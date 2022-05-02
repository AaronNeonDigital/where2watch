<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\MoviePage;
use App\Http\Livewire\TvPage;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
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

    Route::get('/', Home::class)->name('home');

    Route::get('/policy', function (){
        return view('privacy-policy');
    })->name('policy');

    Route::get('/movie/{movie_id}', MoviePage::class)->name('movie');
    Route::get('/tv/{tv_id}', TvPage::class)->name('tv');

    Route::get('test', function () {
        $movie = Http::get('https://api.themoviedb.org/3/tv/1399', [
            'api_key' => env('TMDB_API_KEY'),
            'append_to_response' => 'watch/providers'
        ]);

        return json_decode($movie->body(), true);
    });
