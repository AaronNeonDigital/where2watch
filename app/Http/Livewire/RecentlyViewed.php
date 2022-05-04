<?php

namespace App\Http\Livewire;

use App\Models\Movies;
use App\Models\Tv;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class RecentlyViewed extends Component
{
    //public $result;

    public function render()
    {
        //dd(explode('-', Session::get('lastViewed')));
        if(Session::has('lastViewed')){
            $lastViewed = Session::get('lastViewed');
            $getId = explode('-', $lastViewed)[1];
            $getType = explode('-', $lastViewed)[0];

            if($getType == 'tv'){
                $result = Tv::where('tv_id', $getId)->first();
            }
            else {
                $result = Movies::where('movie_id', $getId)->first();
            }
        }
        return view('livewire.recently-viewed', [
            'result' => $result
        ]);
    }
}
