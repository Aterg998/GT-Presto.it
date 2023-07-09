<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        
            $ads = Ad::where('user_id', Auth::User()->id)->get();
        
        
        return view('profile.index', compact('ads', 'categories'));
    }
}
