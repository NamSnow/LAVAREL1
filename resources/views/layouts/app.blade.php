<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhóm 1 Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
</head>
<body style="min-height: 100vh;" class="bg-black">
    <header class="pt-[9px] pb-3 fixed top-0 flex" style="z-index: 1000; border-bottom: 1px solid rgba(138, 152, 226, 0.3); width: 100%; border-top: none; background: linear-gradient(to right, rgb(16, 22, 41) 0%, rgb(43, 17, 26) 100%);">
        <div class="px-0 flex items-center justify-between w-full mx-4 lg:mx-8">
            <a href="/" class="text-base md:text-xl lg:text-2xl font-bold text-red-700">
                LaravelMovies
            </a>
            <nav class="flex items-center text-xs md:text-sm lg:text-base space-x-3 md:space-x-4 lg:space-x-6 text-gray-200">
                <a href="/" style="{{ request()->is('/') ? 'text-shadow: 1px 2px 7px rgba(249, 12, 98, 1)' : '' }}" class='{{ request()->is('/') ? "text-red-500 scale-[1.17] px-[2px] md:px-[6px] lg:px-3" : "hover:text-red-700 duration-300 border-b border-b-transparent" }}' >
                    Home
                </a>
                <div class="relative">
                    <a href="/tvshows" id="showsDD" style="{{ request()->is('tvshows') ? 'text-shadow: 1px 2px 7px rgba(249, 12, 98, 1); transform: scale(1.17); display: inline-block;' : '' }}" class='{{ request()->is('tvshows') ? "text-red-500 px-[2px] md:px-[6px] lg:px-3" : "hover:text-red-700 duration-300 border-b border-b-transparent" }}' >
                        TV Shows
                    </a>
                    <div class="absolute navbar-dd invisible left-0 mt-2 ml-0 w-28 lg:w-48 bg-[#101422] border border-[#6c6a75bd] text-zinc-50 rounded-lg opacity-0 transition-all duration-[350ms] ease-in-out z-10" style="box-shadow: rgba(64, 105, 105, 0.25) 0px 32px 60px, rgba(64, 105, 105, 0.15) 0px -12px 30px, rgba(64, 105, 105, 0.15) 0px 4px 6px, rgba(64, 105, 105, 0.2) 0px 12px 13px, rgba(64, 105, 105, 0.12) 0px -3px 5px;">
                        <ul class="px-[6px] pb-3 pt-2 flex flex-col justify-center gap-1">
                            <a href="#" class="rounded-md hover:bg-gray-700 transition py-[4px] px-3">Featured Channels</a>
                            <a href="#" class="rounded-md hover:bg-gray-700 transition py-[4px] px-3">Most watched</a>
                        </ul>
                    </div>
                </div>
                <div class="relative">
                    <a href="/movies" id="moviesDD" style="{{ request()->is('movies') ? 'text-shadow: 1px 2px 7px rgba(249, 12, 98, 1); transform: scale(1.17); display: inline-block;' : '' }}" class='{{ request()->is('movies') ? "text-red-500 px-[2px] md:px-[6px] lg:px-3" : "hover:text-red-700 duration-300 border-b border-b-transparent" }}' >
                        Movies
                    </a>
                    <div class="absolute navbar-dd invisible left-0 mt-2 ml-0 w-28 lg:w-48 bg-[#101422] border border-[#6c6a75bd] text-zinc-50 rounded-lg opacity-0 transition-all duration-[350ms] ease-in-out z-10" style="box-shadow: rgba(64, 105, 105, 0.25) 0px 32px 60px, rgba(64, 105, 105, 0.15) 0px -12px 30px, rgba(64, 105, 105, 0.15) 0px 4px 6px, rgba(64, 105, 105, 0.2) 0px 12px 13px, rgba(64, 105, 105, 0.12) 0px -3px 5px;">
                        <ul class="px-[6px] pb-3 pt-2 flex flex-col justify-center gap-1">
                            <a href="#" class="rounded-md hover:bg-gray-700 transition py-[4px] px-3">Featured Movies</a>
                            <a href="#" class="rounded-md hover:bg-gray-700 transition py-[4px] px-3">Favorites</a>
                        </ul>
                    </div>
                </div>
                <div class="relative">
                    <a href="/populars" id="popularsDD" style="{{ request()->is('populars') ? 'text-shadow: 1px 2px 7px rgba(249, 12, 98, 1); transform: scale(1.17); display: inline-block;' : '' }}" class='{{ request()->is('populars') ? "text-red-500 px-[2px] md:px-[6px] lg:px-3" : "hover:text-red-700 duration-300 border-b border-b-transparent" }}' >
                        New & Popular
                    </a>
                    <div class="absolute navbar-dd invisible left-0 mt-2 ml-0 w-28 lg:w-48 bg-[#101422] border border-[#6c6a75bd] text-zinc-50 rounded-lg opacity-0 transition-all duration-[350ms] ease-in-out z-10" style="box-shadow: rgba(64, 105, 105, 0.25) 0px 32px 60px, rgba(64, 105, 105, 0.15) 0px -12px 30px, rgba(64, 105, 105, 0.15) 0px 4px 6px, rgba(64, 105, 105, 0.2) 0px 12px 13px, rgba(64, 105, 105, 0.12) 0px -3px 5px;">
                        <ul class="px-[6px] pb-3 pt-2 flex flex-col justify-center gap-1">
                            <a href="#" class="rounded-md hover:bg-gray-700 transition py-[4px] px-3">Newest Content</a>
                            <a href="#" class="rounded-md hover:bg-gray-700 transition py-[4px] px-3">Most Popular</a>
                        </ul>
                    </div>
                </div>
                <a href="#" style="{{ false ? 'text-shadow: 1px 2px 7px rgba(249, 12, 98, 1)' : '' }}" class='{{ false ? "text-red-500 scale-[1.17] px-[2px] md:px-[6px] lg:px-3" : "hover:text-red-700 duration-300 border-b border-b-transparent" }}' >My List</a>
            </nav>
            <div class="flex items-center space-x-1 md:space-x-3 lg:space-x-5 pt-1 text-xs md:text-lg lg:text-xl text-gray-300">
                <i class="fas fa-search w-5 h-5"></i>
                <i class="fas fa-bell w-5 h-5 hidden md:block"></i>
                <a href="/register" class="flex pb-[1px] md:pb-[2px]" style="text-decoration: none;">
                    <i class="fas fa-user w-5 h-5"></i>
                </a>
            </div>
        </div>
    </header>

    <main style="flex: 1;" class="bg-gray-950 text-gray-100 min-h-screen mt-12 md:mt-[51px] lg:mt-[54px]">
        @yield('content')
    </main>

    <footer class="bg-gray-800 py-3">
        <div class="container mx-auto px-4 text-center text-gray-400">
            <p>&copy; 2030 LaravelMovies. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>