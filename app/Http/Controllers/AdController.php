<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Http\Requests\StoreAdRequest;
use App\Http\Requests\UpdateAdRequest;

class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::all();
        return view('ads.index', compact('ads'));
    }

    public function create()
    {
        return view('ads.create');
    }

    public function store(StoreAdRequest $request)
    {
        
    }

    public function show(Ad $ad)
    {
        //
    }

    public function edit(Ad $ad)
    {
        //
    }

    public function update(UpdateAdRequest $request, Ad $ad)
    {
        //
    }

    public function destroy(Ad $ad)
    {
        //
    }
}
