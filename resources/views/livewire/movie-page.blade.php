<div class="grid grid-cols-3 gap-4">
    @if ($movie)
    <div class="flex justify-center">
        <div class="rounded-lg shadow-lg bg-gray-700 text-white max-w-sm">
            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                @if ($movie['backdrop_path'])
                    <img src="https://image.tmdb.org/t/p/original/{{$movie['backdrop_path']}}"
                    alt="{{$movie['title']}}" class="w-full h-64 rounded-lg rounded-b-none">
                @endif
            </a>
            <div class="p-6">
                <h5 class="text-white text-xl font-medium mb-2"><a href="https://www.imdb.com/title/{{$movie['imdb_id']}}" target="_blank">{{$movie['title']}}</a></h5>
                <p class="text-white text-base mb-4">
                    {{$movie['overview']}}
                </p>
                <p class="text-white text-base mb-4">
                    {{ $movie['status'] }} 
                    <span class="text-gray-200">
                        {{$movie['release_date']}}
                    </span>
                </p>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="rounded-lg shadow-lg bg-gray-700 text-white w-full">
            @if (isset($movie['genres']))
                <div class="px-6 py-2 flex flex-wrap">
                    <h1>Genres</h1>
                </div>
                <div class="px-6 py-2">
                    @foreach ($movie['genres'] as $genre)
                        <span class="text-sm font-medium mr-2 px-2.5 py-0.5 rounded bg-purple-200 text-purple-900">{{$genre['name']}}</span>
                    @endforeach
                </div>
            @endif
            @if (isset($movie['production_companies']))
                <div class="px-6 py-2 flex flex-wrap">
                    <h1>Production companies</h1>
                </div>
                <div class="px-6 py-2 flex flex-wrap">
                    @foreach ($movie['production_companies'] as $companies)
                        <span class="text-sm font-medium mr-2 mb-2 px-2.5 py-0.5 rounded bg-blue-200 text-blue-900">{{$companies['name']}}</span>
                    @endforeach
                </div>
            @endif
            <div class="p-6">
                <h5 class="text-white text-xl font-medium mb-2">About {{$movie['title']}}</h5>
                <div class="text-white text-base mb-4">
                    <span class="text-gray-200 font-semibold">
                        Rating 
                    </span>
                    <span class="text-gray-200 font-normal">
                        {{$movie['vote_average']}} <span class="text-xs">( {{number_format($movie['vote_count'])}} )</span>
                    </span>
                </div>
                <div class="text-white text-base mb-4">
                    <span class="text-gray-200 font-semibold">
                        Run time
                    </span>
                    <span class="text-gray-200 font-normal">
                        {{$movie['runtime']}} minutes
                    </span>
                </div>
            </div>
        </div>
    </div>
    @if (isset($movie['watch/providers']['results']['GB']))
        <div class="flex justify-center">
            <div class="rounded-lg shadow-lg bg-gray-700 text-white w-full">
                <div class="p-6">
                    @if (isset($movie['watch/providers']['results']['GB']['flatrate']))
                        <h5 class="text-white text-xl font-medium mb-2">Subscription streaming</h5>
                        @foreach($movie['watch/providers']['results']['GB']['flatrate'] as $provider)                        
                            <h5 class="text-white text-xl font-medium mb-2 flex mt-2">
                                <img src="https://image.tmdb.org/t/p/original/{{$provider['logo_path']}}" alt="{{ $provider['provider_name'] }}" class="h-8 rounded-lg rounded-b-none mx-4">
                                {{ $provider['provider_name'] }}
                            </h5>
                        @endforeach
                    @endif

                    @if (isset($movie['watch/providers']['results']['GB']['rent']))
                        <h5 class="text-white text-xl font-medium mb-2">Rent</h5>
                        @foreach($movie['watch/providers']['results']['GB']['rent'] as $provider)                        
                            <h5 class="text-white text-xl font-medium mb-2 flex mt-2">
                                <img src="https://image.tmdb.org/t/p/original/{{$provider['logo_path']}}" alt="{{ $provider['provider_name'] }}" class="h-8 rounded-lg rounded-b-none mx-4">
                                {{ $provider['provider_name'] }}
                            </h5>
                        @endforeach
                    @endif
                    @if (isset($movie['watch/providers']['results']['GB']['buy']))
                        <h5 class="text-white text-xl font-medium mb-2">Buy</h5>
                        @foreach($movie['watch/providers']['results']['GB']['buy'] as $provider)                        
                            <h5 class="text-white text-xl font-medium mb-2 flex mt-2">
                                <img src="https://image.tmdb.org/t/p/original/{{$provider['logo_path']}}" alt="{{ $provider['provider_name'] }}" class="h-8 rounded-lg rounded-b-none mx-4">
                                {{ $provider['provider_name'] }}
                            </h5>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    @endif
    @if (isset($movie['providers']['results']['GB']))
        <div class="flex justify-center">
            <div class="rounded-lg shadow-lg bg-gray-700 text-white w-full">
                <div class="p-6">
                    @if (isset($movie['providers']['results']['GB']['flatrate']))
                        <h5 class="text-white text-xl font-medium mb-2">Subscription streaming</h5>
                        @foreach($movie['providers']['results']['GB']['flatrate'] as $provider)                        
                            <h5 class="text-white text-xl font-medium mb-2 flex mt-2">
                                <img src="https://image.tmdb.org/t/p/original/{{$provider['logo_path']}}" alt="{{ $provider['provider_name'] }}" class="h-8 rounded-lg rounded-b-none mx-4">
                                {{ $provider['provider_name'] }}
                            </h5>
                        @endforeach
                    @endif

                    @if (isset($movie['providers']['results']['GB']['rent']))
                        <h5 class="text-white text-xl font-medium mb-2">Rent</h5>
                        @foreach($movie['providers']['results']['GB']['rent'] as $provider)                        
                            <h5 class="text-white text-xl font-medium mb-2 flex mt-2">
                                <img src="https://image.tmdb.org/t/p/original/{{$provider['logo_path']}}" alt="{{ $provider['provider_name'] }}" class="h-8 rounded-lg rounded-b-none mx-4">
                                {{ $provider['provider_name'] }}
                            </h5>
                        @endforeach
                    @endif
                    @if (isset($movie['providers']['results']['GB']['buy']))
                        <h5 class="text-white text-xl font-medium mb-2">Buy</h5>
                        @foreach($movie['providers']['results']['GB']['buy'] as $provider)                        
                            <h5 class="text-white text-xl font-medium mb-2 flex mt-2">
                                <img src="https://image.tmdb.org/t/p/original/{{$provider['logo_path']}}" alt="{{ $provider['provider_name'] }}" class="h-8 rounded-lg rounded-b-none mx-4">
                                {{ $provider['provider_name'] }}
                            </h5>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    @endif

    @endif
</div>