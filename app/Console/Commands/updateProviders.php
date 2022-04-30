<?php

namespace App\Console\Commands;

use App\Models\Provider;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class updateProviders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:providers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update and add new providers to database.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $key = env('TMDB_API_KEY');

        $providers = Http::get('https://api.themoviedb.org/3/watch/providers/movie', [
           'api_key' => $key
        ]);
        
        $currentProviders = Provider::get()->pluck('provider_id')->toArray();

        foreach($providers['results'] as $x => $provider){
            /**
             * Check if we have this provider already stored.
             */
            if(!in_array($provider['provider_id'], $currentProviders)){

                /**
                 * This is a new provider, and will store it in the database, so we can reference it without accessing the api on a search.
                 */

                $newProvider = new Provider();
                $newProvider->provider_id = $provider['provider_id'];
                $newProvider->provider_name = $provider['provider_name'];
                $newProvider->save();
            }
        }
    }
}
