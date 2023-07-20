<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function homepage()
    {
        $categories = Category::all();        
        $ads = Ad::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');

        return view('homepage', [
            'categories' => $categories,
            'ads' => $ads
        ]);
    }

    public function searchAds (Request $request)
    {
        $categories = Category::all();
        $ads = Ad::search($request->searched)->where('is_accepted', true)->paginate(9);

        if(!$request->searched){
            $ads = Ad::where('is_accepted', true)->take(9)->get()->sortByDesc('created_at');
        }

        switch ($request->orderBy) {
            case 'date_desc':
            case 'none':
                if ($request->category == "none") {
                    $ads = Ad::where('is_accepted', true)->take(9)->get()->sortByDesc('created_at');
                }
                else {
                    $ads = Ad::where([
                        ['is_accepted', true],
                        ['category_id', $request->category]
                    ])->take(9)->get()->sortByDesc('created_at');
                }
                break;

            case 'date_asc':
                if ($request->category == "none") {
                    $ads = Ad::where('is_accepted', true)->take(9)->get()->sortBy('created_at');
                }
                else {                    
                    $ads = Ad::where([
                        ['is_accepted', true],
                        ['category_id', $request->category]
                    ])->take(9)->get()->sortBy('created_at');
                }
                break;
            
            case 'price_desc':
                if ($request->category == "none") {
                    $ads = Ad::where('is_accepted', true)->take(9)->get()->sortByDesc('price');
                }
                else {                    
                    $ads = Ad::where([
                        ['is_accepted', true],
                        ['category_id', $request->category]
                    ])->take(9)->get()->sortByDesc('price');
                }
                break;
            
            case 'price_asc':
                if ($request->category == "none") {
                    $ads = Ad::where('is_accepted', true)->take(9)->get()->sortBy('price');
                }
                else {                    
                    $ads = Ad::where([
                        ['is_accepted', true],
                        ['category_id', $request->category]
                    ])->take(9)->get()->sortBy('price');
                }
                break;

            default:
                break;
        }

        return view('ads.index', compact('ads'))->with(compact('categories'));
    }

    public function setLanguage($lang)
    {
        session()->put('locale', $lang);

        $jsonFile = base_path('storage/app/public/categories.json');
        $jsonContent = file_get_contents($jsonFile);
        $data = json_decode($jsonContent, true);

        switch ($lang) {
            case "it":
                for ($i = 0; $i < 10; $i++) {
                    DB::table('categories')
                        ->where('id', $i+1)
                        ->update(['name' => $data[0][$i]]);
                }
                break;
            case "gb":
                for ($i = 0; $i < 10; $i++) {
                    DB::table('categories')
                        ->where('id', $i+1)
                        ->update(['name' => $data[1][$i]]);
                }
                break;
            case "de":
                for ($i = 0; $i < 10; $i++) {
                    DB::table('categories')
                        ->where('id', $i)
                        ->update(['name' => $data[2][$i]]);
                }
                break;
            default:
                break;
        }

        return redirect()->back();
    }
}
