<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $categories = Category::all();
      
    

        
        $ads = Ad::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');

        return view('homepage', [
            'categories' => $categories,
            'ads' => $ads]);
    }

    public function searchAds (Request $request)
    {
        $ads = Ad::search($request->searched)->paginate(10);

        return view('ads.index', compact('ads'));
    }
}
