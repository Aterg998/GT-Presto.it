<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Http\Requests\StoreAdRequest;
use App\Http\Requests\UpdateAdRequest;

class AdController extends Controller
{
    public function index()
    {
        
        $ads = Ad::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');
        return view('ads.index', compact('ads'));
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
        $this->middleware('auth');
    }
}
