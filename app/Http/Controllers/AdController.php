<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;

class AdController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $ads = Ad::where('is_accepted', true)->take(9)->get()->sortByDesc('created_at');
        return view('ads.index', compact('ads', 'categories'));
    }

    public function create()
    {
        return view('ads.create');
    }

    public function show(Ad $ad)
    {
        return view('ads.show', compact('ad'));
    }

    public function edit(Ad $ad)
    {
        $ad->setAccepted(null);
        return view('ads.edit', compact('ad'));
    }

    public function destroy(Ad $ad)
    {
        $ad->delete();
        return redirect()->route('profile.index')->with('success', 'Annuncio eliminato');
    }

    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
}
