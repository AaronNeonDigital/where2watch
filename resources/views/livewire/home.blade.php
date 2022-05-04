<div>    
    @livewire('movie-search')

    @if (Session::has('lastViewed'))
        @livewire('recently-viewed')
    @endif
   
</div>
