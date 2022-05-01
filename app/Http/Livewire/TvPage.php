<?php

namespace App\Http\Livewire;

use App\Models\Tv;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class TvPage extends Component
{
    public $tv_id;
 
    public function mount($tv_id)
    {        
        $this->tv_id = $tv_id;
    }

    public function render()
    {
        $tvCheck = Tv::where('tv_id', $this->tv_id)->first();
        if($tvCheck){
            $tv = $tvCheck->toArray();
        }
        else {
            $tv = Http::get('https://api.themoviedb.org/3/tv/'.$this->tv_id, [
                'api_key' => env('TMDB_API_KEY'),
                'append_to_response' => 'watch/providers'
            ]);
            if($tv){
                $newTv = new Tv();
                $newTv->tv_id = $this->tv_id;
                $newTv->name = $tv['name'];
                $newTv->overview = $tv['overview'];
                $newTv->popularity = $tv['popularity'];
                $newTv->number_of_episodes = $tv['number_of_episodes'];
                $newTv->number_of_seasons = $tv['number_of_seasons'];
                $newTv->episode_run_time = $tv['episode_run_time'][0];
                $newTv->first_air_date = $tv['first_air_date'];
                $newTv->last_air_date = $tv['last_air_date'];
                $newTv->status = $tv['status'];
                $newTv->tagline = $tv['tagline'];
                $newTv->type = $tv['type'];
                $newTv->vote_count = $tv['vote_count'];
                $newTv->vote_average = $tv['vote_average'];
                $newTv->backdrop_path = $tv['backdrop_path'];
                $newTv->poster_path = $tv['poster_path'];
                $newTv->in_production = $tv['in_production'];

                $newTv->created_by = $tv['created_by'];
                $newTv->genres = $tv['genres'];
                $newTv->last_episode_to_air = $tv['last_episode_to_air'];
                $newTv->networks = $tv['networks'];
                $newTv->production_companies = $tv['production_companies'];
                $newTv->providers = $tv['watch/providers'];
                $newTv->seasons = $tv['seasons'];

                $newTv->save();

            }
        }
        return view('livewire.tv-page',[
            'tv' => $tv
        ])->layout('layouts.app');
    }
}
