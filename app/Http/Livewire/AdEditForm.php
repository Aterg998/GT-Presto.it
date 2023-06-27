<?php

namespace App\Http\Livewire;

use App\Models\Ad;
use Livewire\Component;

class AdEditForm extends Component
{
    public $title, $price, $description, $image; 

    public Ad $ad;

    protected $rules = [
        'title' => 'required|min:10',
        'price' => 'required',
        'description' => 'required|min:10|max:500',
    ];

    public function mount()
    {
        $this->title = $this->ad->title;
        $this->price = $this->ad->price;
        $this->description = $this->ad->description;
        $this->image = $this->ad->image;
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
            'image' => $this->image,
        ]);

        session()->flash('success', 'Annuncio modificato con successo!');
    }


    public function render()
    {
        return view('livewire.ad-edit-form');
    }
}
