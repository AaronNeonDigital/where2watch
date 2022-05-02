<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
class Locale
{
    /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
    public function handle(Request $request, Closure $next)
    {
        if(!Cookie::has('locale')){
            $getCode = Http::get('https://api.ipgeolocation.io/ipgeo',[
                'apiKey' => env('IP_GEO_API_KEY'),
                'ip' => env('APP_ENV') == 'production' ? $request->ip() : '198.7.59.119'
            ]);
            Cookie::queue('locale', $getCode['country_code2'], 43200);
        }
        return $next($request);
    }
}