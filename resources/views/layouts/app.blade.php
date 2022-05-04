<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Aaron Lawrence">
    <meta name="description" content="
    {{ $description ?? 'Search which platforms your film or TV series is on, netflix, Amazon Prime, Disney Plus and many many more, also including 55+ countries. 
        So you are never far from knowing where your favourite Film is.'}}
    ">
    <meta name="keywords" content="
        Search, Movies, Series, TV, Shows, Netflix, Amazon, Amazon Prime, ITV, BBC, Streaming, Services, Watch, Where to watch, Platforms, BritBox, Disney plus, Sky Go,
        Now TV, Virgin TV, Online search, Films, Streaming, Watching, {{$keywords ?? ''}}
    ">
    <meta name="publisher" content="https://github.com/AaronNeonDigital">

    <meta property="og:locale" content="{{Cookie::get('locale')}}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $title ?? 'Where 2 Watch | Search for your favourite programmes'}}" />
    <meta property="og:description" content="{{ $description ?? 'Search which platforms your film or TV series is on, netflix, Amazon Prime, Disney Plus and many many more, also including 55+ countries. 
        So you are never far from knowing where your favourite Film is.'}}" />
    <meta property="og:url" content="{{ $canonical ?? 'https://www.where2wat.ch' }}" />
    <meta property="og:site_name" content="Where2Watch" />
    <meta property="og:image" content="{{ $image ?? '/storage/img/where2watch.png'}}" />
    <link rel="image_src" href="{{ $image ?? '/storage/img/where2watch.png'}}"/>

    <link rel="canonical" href="{{ $canonical ?? 'https://www.where2wat.ch' }}" />
    <link rel="icon" type="image/x-icon" href="{{ $image ?? '/storage/img/where2watch.png'}}">
    <title>{{ $title ?? 'Where 2 Watch | Search for your favourite programmes'}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @livewireStyles

    <script type="text/javascript">
        window._mNHandle = window._mNHandle || {};
        window._mNHandle.queue = window._mNHandle.queue || [];
        medianet_versionId = "3121199";
    </script>
    <script src="https://contextual.media.net/dmedianet.js?cid=8CUEEAM88" async="async"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J1ZVVVL421"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-J1ZVVVL421');
    </script>
</head>

<body class="antialiased bg-gray-900">
    <div class="h-max bg-gray-900 text-gray-100">
        <div class="space-y-8">
            <header class="w-full flex items-center justify-center px-4 mx-auto rounded bg-gray-900">
                <a rel="noopener noreferrer" href="/" aria-label="Homepage" class="self-center">
                    <img class="w-64 my-2" src="/storage/img/where2watch.png" alt="Where2Watch" title="Where2Watch Logo">
                </a>
            </header>
            <main>
                <div class="w-full h-max mx-auto space-y-2 mb-64">
                    <section class="grid gap-1">
                        <div class="w-full p-1 rounded-md sm:p-16 xl:col-span-2 bg-gray-900">
                            <div id="416181528">
                                <script type="text/javascript">
                                    try {
                                        window._mNHandle.queue.push(function (){
                                            window._mNDetails.loadTag("416181528", "728x90", "416181528");
                                        });
                                    }
                                    catch (error) {}
                                </script>
                            </div>
                            @if( !request()->routeIs('home') )
                                <div class="w-full">
                                    <a type="button" href="/" class="text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-4 h-4 text-white" fill="currentColor">
                                            <path d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"/>
                                        </svg>
                                    </a>
                                </div>
                            @endif
                            {{  $slot  }}
                        </div>
                    </section>
                </div>
            </main>
            <footer class="fixed bottom-0 w-full">
                <div class="w-full flex justify-between p-6 mx-auto lg:p-8 bg-gray-900">
                    <a rel="noopener noreferrer" href="#" class="font-bold">Where2Watch @ 2022</a>
                    <div class="flex space-x-2">
                        <a aria-label="Email" href="https://www.themoviedb.org/" class="flex items-center justify-center text-gray-400">
                            Creditation to The Movie Database
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    

    @livewireScripts
    
    <script src="{{  mix('js/app.js')  }}"></script>

    
</body>

</html>