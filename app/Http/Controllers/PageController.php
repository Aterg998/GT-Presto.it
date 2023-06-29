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
        $ads = Ad::all();
        return view('homepage', [
            'categories' => $categories,
            'ads' => $ads]);
    }
}
