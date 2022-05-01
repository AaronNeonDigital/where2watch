<div class="w-full relative py-2" x-data="{ searchresults: true }">
    <input type="search" name="search" class="w-full px-4 py-1 text-gray-800 rounded-full focus:outline-none border boder-gray-300" placeholder="search"
    autocomplete="off" wire:model.debounce.300ms="search" @keyup="searchresults=true">
    
        
    @if ($results)
        <div class="absolute w-full z-[1000] mt-2 grid grid-cols-2 lg:grid-cols-4 gap-4" x-show="searchresults">
                @foreach ($results as $x => $result)
                <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('movie', [$result['id']])}}">
                        @if(isset($result['backdrop_path']))
                            <img class="rounded-t-lg" src="https://image.tmdb.org/t/p/original/{{$result['backdrop_path']}}" alt="{{  $result['original_title']  }}" />
                        @endif
                    </a>
                    <div class="p-5">
                        <a href="{{ route('movie', [ $result['id']])}}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{  $result['original_title']  }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{  substr($result['overview'], 0, 100)  }}...
                        </p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-sm">
                            Popularity: {{  $result['popularity']  }}
                        </p>
                    </div>
                </div>
                @endforeach
        
        </div>
    @endif
</div>