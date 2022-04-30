<?php

namespace App\Console\Commands;

use App\Models\Genre;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class updateGenres extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:genres';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update genres';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $key = env('TMDB_API_KEY');

        $genres = Http::get('https://api.themoviedb.org/3/genre/movie/list', [
           'api_key' => $key
        ]);
        
        $currentGenres = Genre::get()->pluck('id')->toArray();

        foreach($genres['genres'] as $x => $genre){
            /**
             * Check if we have this provider already stored.
             */
            if(!in_array($genre['id'], $currentGenres)){

                /**
                 * This is a new provider, and will store it in the database, so we can reference it without accessing the api on a search.
                 */

                $newGenre = new Genre();
                $newGenre->id = $genre['id'];
                $newGenre->name = $genre['name'];
                $newGenre->save();
            }
        }
    }
}
