<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Where2Watch</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{--
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
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



    {{-- <div class="h-screen">
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <a href="/" class="flex-shrink-0">
                            <img class="w-48 my-2" src="/storage/img/where2watch.png"
                                alt="Where2Watch">
                        </a>
                        
                    </div>
                </div>
            </div>
        </nav>
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 relative">
                <!-- Replace with your content -->
                <div class="px-4 py-6 sm:px-0">
                    <div class="border-gray-200 rounded-lg h-96">
                        @if( !request()->routeIs('home') )
                            <div class="w-full">
                                <a type="button" href="/" class="text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-4 h-4 text-white" fill="currentColor">
                                        <path d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"/>
                                    </svg>
                                </a>
                            </div>
                        @endif

                        {{ $slot }}
                    </div>

                </div>
                <!-- /End replace -->
                
            </div>         
        </main>        
    </div>
    <footer class="mt-20 relative">
        <div class="container flex flex-col p-4 mx-auto md:p-8 lg:flex-row">
            <ul class="self-center py-6 space-y-4 text-center sm:flex sm:space-y-0 sm:justify-around sm:space-x-4 lg:flex-1 lg:justify-start">
                <li>About</li>
                <li>Blog</li>
                <li>Projects</li>
                <li>Contact</li>
            </ul>
            <div class="flex flex-col justify-center pt-6 lg:pt-0">
                <div class="flex justify-center space-x-4">
                    <a rel="noopener noreferrer" href="#" class="flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 dark:bg-violet-400 text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-4 h-4">
                            <path d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959 2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z"></path>
                        </svg> 
                    </a>
                </div>
            </div>
        </div>
    </footer>  --}}
    
    

    @livewireScripts
    <script src="{{  mix('js/app.js')  }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J1ZVVVL421"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-J1ZVVVL421');
    </script>
</body>

</html>