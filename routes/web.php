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
// Route::get('/{locale?}', function ($locale = null) {
//     if (isset($locale) && in_array($locale, config('app.available_locales'))) {
//         app()->setLocale($locale);
//     }
    
//     return view('/');
// });

// Route::get('language/{locale}', function ($locale) {
//     app()->setLocale($locale);
//     session()->put('locale', $locale);
//     return redirect()->back();
// });

// Route::get('/', function () {
//     return redirect(app()->getLocale());
// });

// Route::prefix(app()->getLocale())->group(function () {
    Route::get('/', Home::class)->name('home');

    Route::get('/movie/{movie_id}', MoviePage::class)->name('movie');
    Route::get('/tv/{tv_id}', TvPage::class)->name('tv');

    Route::get('test', function () {
        $movie = Http::get('https://api.themoviedb.org/3/tv/1399', [
            'api_key' => env('TMDB_API_KEY'),
            'append_to_response' => 'watch/providers'
        ]);
        // $moviesSearch = Http::get('https://api.themoviedb.org/3/search/multi', [
        //     'api_key' => env('TMDB_API_KEY'),
        //     'query' => 'foo'
        // ]);

        return json_decode($movie->body(), true);
    });
// });
