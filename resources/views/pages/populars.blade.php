@extends('layouts.app')

@section('content')

<div class="bg-gray-950 text-gray-100">
    <div class="container mx-auto pt-2 pb-6">
        <x-hover-card>
            <x-slot name="trigger">
                <x-button>@laravelTesting</x-button>
            </x-slot>
            <x-slot name="content">
                <div class="flex justify-between space-x-4">
                    <x-avatar src="https://img.stackshare.io/service/992/AcA2LnWL_400x400.jpg" fallback="VC" />
                    <div class="space-y-1">
                        <h4 class="text-sm font-semibold">@laravelPHP</h4>
                        <p class="text-sm">
                            LaravelMovies. Test component đừng có động vào. Test tính năng hover card component
                        </p>
                        <div class="flex items-center pt-2">
                            <svg class="mr-2 h-4 w-4 opacity-70" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10m-5 4v5m-4-5h8m-8 0a4 4 0 108 0H8z" />
                            </svg>
                            <span class="text-xs text-gray-500">
                                Joined December 2021
                            </span>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-hover-card>
    </div>
</div>

@endsection