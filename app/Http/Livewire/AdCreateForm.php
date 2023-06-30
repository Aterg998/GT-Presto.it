<?php

namespace App\Http\Livewire;

use App\Http\Requests\StoreAdRequest;
use App\Models\Ad;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdCreateForm extends Component
{

    use WithFileUploads;

    public $title, $price, $description, $image, $category_id, $user_id;

    protected $rules = [
        'title' => 'required|min:10',
        'price' => 'required',
        'description' => 'required|min:10|max:500',
        'category_id' => 'required'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }


    public function store()
    {
        
        $this->validate();

        // $path_image = 'https://cdn-img.moto.it/images/26440477/1000x/vespa-elettrica-red-2022-01.jpg';

        /* if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path_image = $request->file('image')->store('public/images');
        } */

        Ad::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $this->image->store('ads_image'),
            'category_id' => $this->category_id,
            'user_id' => $this->user_id=Auth::user()->id
        ]);

        session()->flash('success', 'Annuncio inserito con successo!');
        $this->reset(['title', 'price', 'description', 'image', 'category_id']);
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.ad-create-form', compact('categories'));
    }
}
