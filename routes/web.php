<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\AuthController;

Route::get("/", function() {
    $genres = [
        [
            "name" => "Action",
            "movies" => [
                [
                    "title" => "Action Movie 1",
                    "rating" => 5,
                    "image" => Storage::url('public/images/movie1.jpg')
                ],
                [
                    "title" => "Action Movie 2",
                    "rating" => 4,
                    "image" => Storage::url('public/images/movie2.jpg')
                ],
                [
                    "title" => "Action Movie 3",
                    "rating" => 3,
                    "image" => Storage::url('public/images/movie3.webp')
                ],
                [
                    "title" => "Action Movie 4",
                    "rating" => 2,
                    "image" => Storage::url('public/images/movie4.jpg')
                ],
                [
                    "title" => "Action Movie 5",
                    "rating" => 1,
                    "image" => Storage::url('public/images/movie5.jpeg')
                ],
                [
                    "title" => "Action Movie 6",
                    "rating" => 5,
                    "image" => Storage::url('public/images/movie6.jpg')
                ]
            ]
        ],
        [
            "name" => "Comedy",
            "movies" => [
                [
                    "title" => "Comedy Movie 1",
                    "rating" => 5,
                    "image" => Storage::url('public/images/movie1.jpg')
                ],
                [
                    "title" => "Comedy Movie 2",
                    "rating" => 4,
                    "image" => Storage::url('public/images/movie2.jpg')
                ],
                [
                    "title" => "Comedy Movie 3",
                    "rating" => 3,
                    "image" => Storage::url('public/images/movie3.webp')
                ],
                [
                    "title" => "Comedy Movie 4",
                    "rating" => 2,
                    "image" => Storage::url('public/images/movie4.jpg')
                ],
                [
                    "title" => "Comedy Movie 5",
                    "rating" => 1,
                    "image" => Storage::url('public/images/movie5.jpeg')
                ],
                [
                    "title" => "Comedy Movie 6",
                    "rating" => 5,
                    "image" => Storage::url('public/images/movie6.jpg')
                ]
            ]
        ],
        [
            "name" => "Drama",
            "movies" => [
                [
                    "title" => "Drama Movie 1",
                    "rating" => 5,
                    "image" => Storage::url('public/images/movie1.jpg')
                ],
                [
                    "title" => "Drama Movie 2",
                    "rating" => 4,
                    "image" => Storage::url('public/images/movie2.jpg')
                ],
                [
                    "title" => "Drama Movie 3",
                    "rating" => 3,
                    "image" => Storage::url('public/images/movie3.webp')
                ],
                [
                    "title" => "Drama Movie 4",
                    "rating" => 2,
                    "image" => Storage::url('public/images/movie4.jpg')
                ],
                [
                    "title" => "Drama Movie 5",
                    "rating" => 1,
                    "image" => Storage::url('public/images/movie5.jpeg')
                ],
                [
                    "title" => "Drama Movie 6",
                    "rating" => 5,
                    "image" => Storage::url('public/images/movie6.jpg')
                ]
            ]
        ],
        [
            "name" => "Sci-Fi",
            "movies" => [
                [
                    "title" => "Sci-Fi Movie 1",
                    "rating" => 5,
                    "image" => Storage::url('public/images/movie1.jpg')
                ],
                [
                    "title" => "Sci-Fi Movie 2",
                    "rating" => 4,
                    "image" => Storage::url('public/images/movie2.jpg')
                ],
                [
                    "title" => "Sci-Fi Movie 3",
                    "rating" => 3,
                    "image" => Storage::url('public/images/movie3.webp')
                ],
                [
                    "title" => "Sci-Fi Movie 4",
                    "rating" => 2,
                    "image" => Storage::url('public/images/movie4.jpg')
                ],
                [
                    "title" => "Sci-Fi Movie 5",
                    "rating" => 1,
                    "image" => Storage::url('public/images/movie5.jpeg')
                ],
                [
                    "title" => "Sci-Fi Movie 6",
                    "rating" => 5,
                    "image" => Storage::url('public/images/movie6.jpg')
                ]
            ]
        ]
    ];
    return view('pages.homepage', ['genres' => $genres]);
});

Route::get("/movies", [MoviesController::class, "index"]);

Route::get("/populars", function() {
    return view('pages.populars');
});
Route::get("/tvshows", function() {
    return view('pages.tvShows');
});

Route::get("/register", [AuthController::class, "registerIndex"]);

Route::middleware(['auth'])->group(function () {
    Route::get('/watchlist', [WatchListController::class, 'index'])->name('watchlist.index');
    Route::post('/watchlist', [WatchListController::class, 'store'])->name('watchlist.store');
    Route::delete('/watchlist/{id}', [WatchListController::class, 'destroy'])->name('watchlist.destroy');
});