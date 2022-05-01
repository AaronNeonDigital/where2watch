<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MovieSearch extends Component
{
    public $search='';

    //protected $key = env('TMDB_API_KEY');
 
    public function render()
    {
        return view('livewire.movie-search', [
            'results' => $this->search ? $this->search() : '',
        ]);
    }

    public function search() {
        //https://api.themoviedb.org/3/search/movie?api_key=a48358bdf16533039abfcfb20185aa0c&language=en-US&query=titanic&page=1&include_adult=false
        $moviesSearch = Http::get('https://api.themoviedb.org/3/search/multi', [
           'api_key' => env('TMDB_API_KEY'),
           'query' => $this->search,
           'include_adult' => false
        ]);

        return $moviesSearch['results'];
    }
}
