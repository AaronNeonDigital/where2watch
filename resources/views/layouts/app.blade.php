<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="
        Search, Movies, Series, TV, Shows, Netflix, Amazon, Amazon Prime, ITV, BBC, Streaming, Services, Watch, Where to watch, Platforms, BritBox, Disney plus, Sky Go,
        Now TV, Virgin TV, Online search, Films, Streaming, Watching
    ">

    <title>Where2Watch</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{--
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8828295715005095"
     crossorigin="anonymous"></script>

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
            <header class="w-full flex items-center justify-between h-16 px-4 mx-auto rounded bg-gray-900">
                <a rel="noopener noreferrer" href="#" aria-label="Homepage">
                    <img class="w-48 my-2" src="/storage/img/where2watch.png" alt="Where2Watch">
                </a>
                {{-- <div class="items-center hidden space-x-8 lg:flex">
                    <div class="space-x-4">
                        <a rel="noopener noreferrer" href="#">Link</a>
                        <a rel="noopener noreferrer" href="#">Link</a>
                        <a rel="noopener noreferrer" href="#">Link</a>
                    </div>
                    <button class="px-4 py-2 rounded-md dark:bg-violet-400 text-gray-900">Sign up</button>
                </div> --}}
            </header>
            <main>
                <div class="w-full h-max mx-auto space-y-2 mb-64">
                    <section class="grid gap-1">
                        <div class="w-full p-1 rounded-md sm:p-16 xl:col-span-2 bg-gray-900">
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