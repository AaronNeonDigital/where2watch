<div class="flex-1 mt-24">
    @if ($result)
    <section class="bg-gray-800 text-gray-100 rounded shadow">
        <div class="w-full p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
            <div>                    
                <h2 class="text-3xl font-bold tracking-tight text-center sm:text-5xl text-gray-50">Recently Viewed</h2>
            </div>
            <div class="relative block">
                
                @if(isset($result->backdrop_path))
                    <img src="https://image.tmdb.org/t/p/original/{{$result->backdrop_path}}" alt="{{$result->name ?? $result->title}}" class="rounded-lg rounded-b-none opacity-25">
                @endif
                <div class="lg:absolute top-0 w-full block grid-cols-1 justify-content-center justify-content-middle mt-4">
                    <h2 class="text-3xl font-bold tracking-tight text-center sm:text-5xl text-gray-50">{{ $result->name ?? $result->title  }}</h2>
                    <p class="max-w-3xl mx-auto mt-4 text-xl text-center text-gray-400">{{$result->overview}}</p>
                </div>
            </div>            
        </div>
    </section>
        
    @endif
</div>

