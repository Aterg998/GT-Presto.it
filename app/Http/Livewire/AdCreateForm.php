<?php

namespace App\Http\Livewire;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdCreateForm extends Component
{
    use WithFileUploads;

    public $title, $price, $description, $temporary_images, $images = [], $category_id, $user_id, $ad;

    protected $rules = [
        'title' => 'required|min:3',
        'price' => 'required',
        'description' => 'required|min:10|max:500',
        'images' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
        'category_id' => 'required'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.ad-create-form', compact('categories'));
    }

    public function removeImage($key){
        if (in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate(['temporary_images.*' => 'image|max:1024'])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function store()
    {
        $placeholder = 'https://www.mrw.it/img/cope/0iwkf4_1609360688.jpg';

        $this->validate();

        // Ad::create([
        //     'title' => $this->title,
        //     'price' => $this->price,
        //     'description' => $this->description,
        //     'category_id' => $this->category_id,
        //     'user_id' => $this->user_id=Auth::user()->id
        // ]);

        Ad::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id=Auth::user()->id
        ]);

        if(count($this->images)){
            foreach ($this->images as $image) {
                $this->ad->images()->create(['path' => $image->store('images', 'public')]);
            }
        }

        session()->flash('success', 'Annuncio inserito! Sarà pubblicato dopo la revisione');
        $this->cleanForm();
        return view('livewire.ad-create-form');
    }

    public function cleanForm()
    {
        $this->title = '';
        $this->price = '';
        $this->description = '';
        $this->temporary_images = [];
        $this->images = [];
        $this->category_id = '';
    }
}
