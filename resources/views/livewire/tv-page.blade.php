<div class="flex-1">
    @if ($tv)
    <section class="bg-gray-800 text-gray-100 rounded shadow">
        <div class="w-full p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
            <div class="relative block">
                @if(isset($tv['backdrop_path']))
                    <img src="https://image.tmdb.org/t/p/original/{{$tv['backdrop_path']}}" alt="{{$tv['name']}}" class="rounded-lg rounded-b-none opacity-25">
                @endif
                <div class="lg:absolute top-0 w-full block grid-cols-1 justify-content-center justify-content-middle mt-4">
                    <h2 class="text-3xl font-bold tracking-tight text-center sm:text-5xl text-gray-50">{{$tv['name']}}</h2>
                    <p class="max-w-3xl mx-auto mt-4 text-xl text-center text-gray-400">{{$tv['overview']}}</p>
                </div>
            </div>
            @if (isset($tv['watch/providers']['results'][Cookie::get('locale')]))
                @if (isset($tv['watch/providers']['results'][Cookie::get('locale')]['flatrate']))
                <div>
                    <h2 class="text-3xl font-thin uppercase tracking-tight text-center sm:text-5xl text-gray-50">Subscription streams</h2>
                    
                        <div class="grid lg:grid-cols-3 grid-cols-1 mt-2 gap-4">
                        @foreach($tv['watch/providers']['results'][Cookie::get('locale')]['flatrate'] as $provider) 
                            <div class="flex overflow-hidden rounded-lg bg-gray-900 text-gray-100">
                                <div class="flex items-center justify-center px-4 bg-violet-400 text-gray-800">
                                    <img src="https://image.tmdb.org/t/p/original/{{$provider['logo_path']}}" alt="{{ $provider['provider_name'] }}" class="h-8 rounded mx-4">
                                </div>
                                <div class="flex items-center justify-between flex-1 p-3">
                                    <p>{{ $provider['provider_name'] }}</p>
                                </div>
                            </div>
                        @endforeach
                        </div>
                </div>
                @endif
            @endif
            @if (isset($tv['providers']['results'][Cookie::get('locale')]))
                @if (isset($tv['providers']['results'][Cookie::get('locale')]['flatrate']))
                    <div>
                        <h2 class="text-3xl font-thin uppercase tracking-tight text-center sm:text-5xl text-gray-50">Subscription streams</h2>                        
                            <div class="grid lg:grid-cols-3 grid-cols-1 mt-2 gap-4">
                            @foreach($tv['providers']['results'][Cookie::get('locale')]['flatrate'] as $provider) 
                                <div class="flex overflow-hidden rounded-lg bg-gray-900 text-gray-100">
                                    <div class="flex items-center justify-center px-4 bg-violet-400 text-gray-800">
                                        <img src="https://image.tmdb.org/t/p/original/{{$provider['logo_path']}}" alt="{{ $provider['provider_name'] }}" class="h-8 rounded mx-4">
                                    </div>
                                    <div class="flex items-center justify-between flex-1 p-3">
                                        <p>{{ $provider['provider_name'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                    </div>
                @endif
            @endif

            @if (isset($tv['watch/providers']['results'][Cookie::get('locale')]))
                @if (isset($tv['watch/providers']['results'][Cookie::get('locale')]['rent']))
                <div>
                    <h2 class="text-3xl font-thin uppercase tracking-tight text-center sm:text-5xl text-gray-50">Rentable</h2>
                    
                        <div class="grid lg:grid-cols-3 grid-cols-1 mt-2 gap-4">
                        @foreach($tv['watch/providers']['results'][Cookie::get('locale')]['rent'] as $provider) 
                            <div class="flex overflow-hidden rounded-lg bg-gray-900 text-gray-100">
                                <div class="flex items-center justify-center px-4 bg-blue-400 text-gray-800">
                                    <img src="https://image.tmdb.org/t/p/original/{{$provider['logo_path']}}" alt="{{ $provider['provider_name'] }}" class="h-8 rounded mx-4">
                                </div>
                                <div class="flex items-center justify-between flex-1 p-3">
                                    <p>{{ $provider['provider_name'] }}</p>
                                </div>
                            </div>
                        @endforeach
                        </div>
                </div>
                @endif
            @endif
            @if (isset($tv['providers']['results'][Cookie::get('locale')]))
                @if (isset($tv['providers']['results'][Cookie::get('locale')]['rent']))
                    <div>
                        <h2 class="text-3xl font-thin uppercase tracking-tight text-center sm:text-5xl text-gray-50">Rentable</h2>                        
                            <div class="grid lg:grid-cols-3 grid-cols-1 mt-2 gap-4">
                            @foreach($tv['providers']['results'][Cookie::get('locale')]['rent'] as $provider) 
                                <div class="flex overflow-hidden rounded-lg bg-gray-900 text-gray-100">
                                    <div class="flex items-center justify-center px-4 bg-blue-400 text-gray-800">
                                        <img src="https://image.tmdb.org/t/p/original/{{$provider['logo_path']}}" alt="{{ $provider['provider_name'] }}" class="h-8 rounded mx-4">
                                    </div>
                                    <div class="flex items-center justify-between flex-1 p-3">
                                        <p>{{ $provider['provider_name'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                    </div>
                @endif
            @endif

            @if (isset($tv['watch/providers']['results'][Cookie::get('locale')]))
                @if (isset($tv['watch/providers']['results'][Cookie::get('locale')]['buy']))
                <div>
                    <h2 class="text-3xl font-thin uppercase tracking-tight text-center sm:text-5xl text-gray-50">Available to rent</h2>
                    
                        <div class="grid lg:grid-cols-3 grid-cols-1 mt-2 gap-4">
                        @foreach($tv['watch/providers']['results'][Cookie::get('locale')]['buy'] as $provider) 
                            <div class="flex overflow-hidden rounded-lg bg-gray-900 text-gray-100">
                                <div class="flex items-center justify-center px-4 bg-green-400 text-gray-800">
                                    <img src="https://image.tmdb.org/t/p/original/{{$provider['logo_path']}}" alt="{{ $provider['provider_name'] }}" class="h-8 rounded mx-4">
                                </div>
                                <div class="flex items-center justify-between flex-1 p-3">
                                    <p>{{ $provider['provider_name'] }}</p>
                                </div>
                            </div>
                        @endforeach
                        </div>
                </div>
                @endif
            @endif
            @if (isset($tv['providers']['results'][Cookie::get('locale')]))
                @if (isset($tv['providers']['results'][Cookie::get('locale')]['buy']))
                    <div>
                        <h2 class="text-3xl font-thin uppercase tracking-tight text-center sm:text-5xl text-gray-50">Purchasable</h2>                        
                            <div class="grid lg:grid-cols-3 grid-cols-1 mt-2 gap-4">
                            @foreach($tv['providers']['results'][Cookie::get('locale')]['buy'] as $provider) 
                                <div class="flex overflow-hidden rounded-lg bg-gray-900 text-gray-100">
                                    <div class="flex items-center justify-center px-4 bg-green-400 text-gray-800">
                                        <img src="https://image.tmdb.org/t/p/original/{{$provider['logo_path']}}" alt="{{ $provider['provider_name'] }}" class="h-8 rounded mx-4">
                                    </div>
                                    <div class="flex items-center justify-between flex-1 p-3">
                                        <p>{{ $provider['provider_name'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                    </div>
                @endif
            @endif
            <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">
                <div>
                    <div class="mt-12 space-y-12">

                        @if (isset($tv['genres']))
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-md dark:bg-violet-400 text-gray-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" class="w-7 h-7" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M.1193 494.1c-1.125 9.5 6.312 17.87 15.94 17.87l32.06 .0635c8.125 0 15.21-5.833 16.21-13.83c.7501-4.875 1.869-11.17 3.494-18.17h312c1.625 6.875 2.904 13.31 3.529 18.18c1.125 7.1 7.84 13.94 15.97 13.82l32.46-.0625c9.625 0 17.12-8.374 15.99-17.87c-4.625-37.87-25.75-128.1-119.1-207.7c-17.5 12.37-36.98 24.37-58.48 35.49c6.25 4.625 11.56 9.405 17.06 14.15H159.7c21.25-18.12 47.03-35.63 78.65-51.38c172.1-85.5 203.7-218.8 209.5-266.7c1.125-9.5-6.297-17.88-15.92-17.88L399.6 .001c-8.125 0-14.84 5.832-15.96 13.83c-.7501 4.875-1.869 11.17-3.369 18.17H67.74C66.24 25 65.08 18.81 64.33 13.81C63.21 5.813 56.48-.124 48.36 .001L16.1 .1338c-9.625 0-17.09 8.354-15.96 17.85c5.125 42.87 31.29 153.8 159.9 238.1C31.55 340.3 5.245 451.2 .1193 494.1zM223.9 219.7C198.8 205.9 177.6 191.3 159.7 176h128.5C270.4 191.3 249 206.1 223.9 219.7zM355.1 96c-5.875 10.37-12.88 21.12-21 31.1H113.1c-8.25-10.87-15.3-21.63-21.05-32L355.1 96zM93 415.1c5.875-10.37 12.74-21.13 20.87-32h219.4c8.375 10.87 15.48 21.63 21.23 32H93z"/></svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium leading-6 text-gray-50">Genres</h4>
                                    <div class="mt-2 text-gray-400 grid grid-cols-3 gap-2">
                                        @foreach ($tv['genres'] as $genre)
                                            <div class="rounded-lg bg-blue-500 text-gray-100">
                                                <div class="flex items-center justify-between p-1">
                                                    <p>{{ $genre['name'] }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (count($tv['production_companies']))
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-md bg-violet-400 text-gray-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" class="w-7 h-7"  viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M208 112C208 50.14 258.1 0 320 0C381.9 0 432 50.14 432 112C432 173.9 381.9 224 320 224C258.1 224 208 173.9 208 112zM80 258.7L140.3 339C149.7 351.6 167.7 353.8 179.9 343.8C190.4 335.1 193.1 319.1 186 308.3L164.6 272.5C155.9 258 159.9 239.3 173.7 229.7C187.6 220.1 206.5 222.9 216.1 236L263.5 294.1C279.3 313.1 288 338.6 288 364.1V480C288 497.7 273.7 512 256 512H160C150.3 512 141.1 507.6 135 499.1L14.02 348.8C4.946 337.4 0 323.3 0 308.8V103.1C0 81.91 17.91 63.1 40 63.1C62.09 63.1 80 81.91 80 103.1V258.7zM640 104V308.8C640 323.3 635.1 337.4 625.1 348.8L504.1 499.1C498.9 507.6 489.7 512 480 512H384C366.3 512 352 497.7 352 480V364.1C352 338.6 360.7 313.1 376.5 294.1L423 236C433.5 222.9 452.4 220.1 466.3 229.7C480.1 239.3 484.1 258 475.4 272.5L453.1 308.3C446.9 319.1 449.6 335.1 460.2 343.8C472.3 353.8 490.3 351.6 499.7 339L560 258.7V104C560 81.91 577.9 64 600 64C622.1 64 640 81.91 640 104V104z"/></svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium leading-6 text-gray-50">Production companies</h4>
                                    <div class="mt-2 text-gray-400 grid gap-2">
                                        @foreach ($tv['production_companies'] as $companies)
                                            <div class="rounded-lg bg-blue-500 text-gray-100">
                                                <div class="flex items-center justify-between p-1">
                                                    <p>{{ $companies['name'] }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (count($tv['created_by']))
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-md bg-violet-400 text-gray-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" class="w-7 h-7"  viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M208 112C208 50.14 258.1 0 320 0C381.9 0 432 50.14 432 112C432 173.9 381.9 224 320 224C258.1 224 208 173.9 208 112zM80 258.7L140.3 339C149.7 351.6 167.7 353.8 179.9 343.8C190.4 335.1 193.1 319.1 186 308.3L164.6 272.5C155.9 258 159.9 239.3 173.7 229.7C187.6 220.1 206.5 222.9 216.1 236L263.5 294.1C279.3 313.1 288 338.6 288 364.1V480C288 497.7 273.7 512 256 512H160C150.3 512 141.1 507.6 135 499.1L14.02 348.8C4.946 337.4 0 323.3 0 308.8V103.1C0 81.91 17.91 63.1 40 63.1C62.09 63.1 80 81.91 80 103.1V258.7zM640 104V308.8C640 323.3 635.1 337.4 625.1 348.8L504.1 499.1C498.9 507.6 489.7 512 480 512H384C366.3 512 352 497.7 352 480V364.1C352 338.6 360.7 313.1 376.5 294.1L423 236C433.5 222.9 452.4 220.1 466.3 229.7C480.1 239.3 484.1 258 475.4 272.5L453.1 308.3C446.9 319.1 449.6 335.1 460.2 343.8C472.3 353.8 490.3 351.6 499.7 339L560 258.7V104C560 81.91 577.9 64 600 64C622.1 64 640 81.91 640 104V104z"/></svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium leading-6 text-gray-50">Created by</h4>
                                    <div class="mt-2 text-gray-400 grid gap-2">
                                        @foreach ($tv['created_by'] as $created_by)
                                            <div class="rounded-lg bg-blue-500 text-gray-100">
                                                <div class="flex items-center justify-between p-1">
                                                    <p>{{ $created_by['name'] }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if(isset($tv['networks']))
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-md bg-violet-400 text-gray-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" class="w-7 h-7" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M512 448H127.1C110.3 448 96 462.3 96 479.1S110.3 512 127.1 512h384C529.7 512 544 497.7 544 480S529.7 448 512 448zM592 0h-544C21.5 0 0 21.5 0 48v320C0 394.5 21.5 416 48 416h544c26.5 0 48-21.5 48-48v-320C640 21.5 618.5 0 592 0zM576 352H64v-288h512V352z"/></svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium leading-6 text-gray-50">Networks</h4>
                                    <div class="mt-2 text-gray-400 grid grid-cols-3 gap-2">
                                        @foreach ($tv['networks'] as $network)
                                            <div class="rounded-lg bg-blue-500 text-gray-100">
                                                <div class="flex items-center justify-between p-1">
                                                    <p>{{ $network['name'] }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div aria-hidden="true" class="mt-10 lg:mt-0 relative">
                    @if($tv['poster_path'])
                        <img src="https://image.tmdb.org/t/p/original/{{$tv['poster_path']}}" alt="" class="mx-auto rounded-lg shadow-lg dark:bg-coolGray-500">
                    @endif
                    <span class="absolute top-0 flex">
                        <span class="text-sm font-bold mr-2 px-2.5 py-0.5 rounded bg-purple-900 text-purple-200 uppercase">First aired: {{\Carbon\Carbon::parse($tv['first_air_date'])->format('d/m/y')}}</span>
                    </span>
                </div>
            </div>
            
        </div>
    </section>
        
    @endif
</div>
