@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Your Watchlist</h1>
        <ul>
            @foreach ($watchlists as $watchlist)
                <li>
                    {{ $watchlist->movie_name }} ({{ $watchlist->release_year }})
                    <form action="{{ route('watchlist.destroy', $watchlist->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
