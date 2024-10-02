<?php

namespace App\Http\Controllers;

use App\Models\WatchList;
use Illuminate\Http\Request;
use Auth;

class WatchListController extends Controller
{
    public function index()
    {
        $watchlists = WatchList::where('user_id', Auth::id())->get();
        return view('watchlist.index', compact('watchlists'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'category_id' => 'required|exists:categories,id',
            'movie_name' => 'required|string|max:255',
            'release_year' => 'required|integer',
        ]);

        $validated['user_id'] = Auth::id();

        WatchList::create($validated);

        return redirect()->route('watchlist.index')->with('success', 'Movie added to your watchlist.');
    }

    public function destroy($id)
    {
        $watchlist = WatchList::findOrFail($id);
        if ($watchlist->user_id != Auth::id()) {
            return redirect()->back()->withErrors('Unauthorized action.');
        }

        $watchlist->delete();
        return redirect()->route('watchlist.index')->with('success', 'Movie removed from your watchlist.');
    }
}