@extends('layouts.app')

@section('content')

<div class="relative" style="min-height: calc(80vh);">
    <div class="w-[70%] right-0 z-0 absolute" style="height: 80vh;">
        <video autoplay loop muted class="inset-0 w-full object-cover" style="height: 80vh;">
            <source src="{{ asset('storage/videos/bg-banner-vid.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0" style="background: linear-gradient(to left, transparent, #030712);"></div>
        <div class="absolute inset-0 h-1/2 bottom-0 mt-auto" style="background: linear-gradient(to bottom, transparent, #030712);"></div>
    </div>
    
    <div class="relative z-2 text-white w-[50%] flex flex-col justify-center items-center text-center" style="height: 80vh;">
        <h1 class="text-4xl font-bold mb-3 lg:mb-7">Featured Movie: Laravel</h1>
        <p class="text-lg mb-0">LaravelMovies có rất ít movie nhưng lại có rất nhiều laravel</p>
        <p class="text-lg mb-3 lg:mb-6">Đăng ký ngay để có thêm movie.</p>
        <a href="/register" class="px-4 py-1 md:py-2 rounded-[6px] bg-red-600 hover:bg-red-700 flex items-center md:pt-[6px]">
            Sign up now
            <i class="fa-solid fa-right-to-bracket w-4 h-4 ml-2 pt-[2px]"></i>
        </a>
    </div>

    <main class="container mx-auto px-4 py-8 pt-0">
        @foreach ($genres as $genre)
        <section class="mb-12">
            <h2 class="text-2xl font-semibold mb-4">{{ $genre['name'] }} Movies</h2>
            <div class="grid grid-cols-3 md:grid-cols-6 gap-3 md:gap-4">
                @foreach ($genre['movies'] as $movie)
                <div>
                    <div class="relative group movies-bg h-36 lg:h-60 rounded-lg overflow-hidden">
                        <img
                            alt="{{ $movie['title'] }}"
                            class="w-full h-full object-cover rounded-lg transition-transform duration-200 group-hover:scale-110"
                            src="{{ $movie['image'] }}"
                        />
                        <div class="absolute top-[4%] translate-y--1/2 h-[92%] left-[4%] translate-x--1/2 w-[92%] inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-80 transition-opacity duration-200 rounded-lg lg:rounded-[6px] flex flex-col items-center justify-center opacity-0 group-hover:opacity-100">
                            <h3 class="text-base lg:text-xl font-semibold text-center mb-1 lg:mb-2">{{ $movie['title'] }}</h3>
                            <div class="flex items-center text-sm mb-1 lg:mb-[14px]">
                                <i class="fas fa-clock w-4 h-4 mr-1"></i>
                                <span>2h 15m</span>
                            </div>
                            <x-button variant="ghost" size="sm" class="text-sm lg:text-base py-[2px] lg:py-[5px] px-[6px] lg:px-4 text-white transition duration-300 hover:bg-[#a0b6b4] hover:text-[#1b1215]">
                                <i class="fas fa-play w-4 h-4 mr-2"></i>
                                Play
                            </x-button>
                        </div>
                    </div>
                    <div class="mt-2 text-sm lg:text-base">
                        <p class="font-semibold">{{ $movie['title'] }}</p>
                        <p class="text-gray-400">2021</p>
                        {{-- <i class="fas fa-star text-[#fff38a]"></i>
                        <span class="">{{ $movie['rating'] }}</span> --}}
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        @endforeach
    </main>
</div>

@endsection