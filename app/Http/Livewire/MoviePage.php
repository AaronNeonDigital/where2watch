<?php

namespace App\Http\Livewire;

use App\Models\Movies;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MoviePage extends Component
{
    public $movie_id;
 
    public function mount($movie_id)
    {        
        $this->movie_id = $movie_id;
    }

    public function render()
    {
        $movieCheck = Movies::where('movie_id', $this->movie_id)->first();
        if($movieCheck){
            $movie = $movieCheck->toArray();
        }
        else {
            $movie = Http::get('https://api.themoviedb.org/3/movie/'.$this->movie_id, [
                'api_key' => env('TMDB_API_KEY'),
                'append_to_response' => 'watch/providers'
            ]);

            if($movie){
                $newMovie = new Movies();
                $newMovie->movie_id = $this->movie_id;
                $newMovie->imdb_id = $movie['imdb_id'];
                $newMovie->title = $movie['title'];
                $newMovie->overview = $movie['overview'];
                $newMovie->backdrop_path = $movie['backdrop_path'];
                $newMovie->poster_path = $movie['poster_path'];
                $newMovie->budget = $movie['budget'];
                $newMovie->revenue = $movie['revenue'];
                $newMovie->release_date = $movie['release_date'];
                $newMovie->runtime = $movie['runtime'];
                $newMovie->status = $movie['status'];
                $newMovie->tagline = $movie['tagline'];
                $newMovie->vote_average = $movie['vote_average'];
                $newMovie->vote_count = $movie['vote_count'];

                $newMovie->genres = $movie['genres'];
                $newMovie->production_companies = $movie['production_companies'];
                $newMovie->providers = $movie['watch/providers'];

                $newMovie->save();

            }
        }
        return view('livewire.movie-page',[
            'movie' => $movie
        ])->layout('layouts.app');
    }
}
