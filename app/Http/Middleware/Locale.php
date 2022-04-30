<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
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
        // if(!in_array($request->segment(1), ['gb'])){
        //     if(app()->getLocale()){
        //         return redirect(app()->getLocale());
        //     }
        //     else {
        //         return redirect(app()->getLocale('gb'));
        //     }
        // }

        if(!app()->getLocale()){
            app()->setLocale('gb');
        }
        return $next($request);
    }
}