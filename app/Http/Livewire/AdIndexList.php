<?php

namespace App\Http\Livewire;

use App\Models\Ad;
use Livewire\Component;

class AdIndexList extends Component
{
    public function render()
    {
        $ads = Ad::all();
        return view('livewire.ad-index-list', compact('ads'));
    }
}
