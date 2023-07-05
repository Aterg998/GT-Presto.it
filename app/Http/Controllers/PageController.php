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
       /*  $ads = Ad::all(); */
    

        //$ads = Ad::orderBy('created_at','desc')->take(6)->get();
        $ads = Ad::where('is_accepted', true)->orderBy('created_at','desc')->take(6)->get();

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
