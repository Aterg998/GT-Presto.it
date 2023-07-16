<?php

namespace App\Http\Livewire;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdEditForm extends Component
{

    use WithFileUploads; 

    public $title, $price, $description, $category_id, $user_id; 

    public Ad $ad;

    protected $rules = [
        'title' => 'required|min:3',
        'price' => 'required',
        'description' => 'required|min:3|max:500',
        'category_id' => 'required'
    ];

    public function mount()
    {
        $this->title = $this->ad->title;
        $this->price = $this->ad->price;
        $this->description = $this->ad->description;
        $this->category_id = $this->ad->category_id;
        $this->user_id = $this->user_id;
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }


    public function update()
    {
        
        $this->validate();

        $this->ad->update([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id=Auth::user()->id
        ]);

        session()->flash('success', 'Annuncio modificato con successo!');
    }


    public function render()
    {
        $categories = Category::all();
        return view('livewire.ad-edit-form',compact('categories'));
    }
}
