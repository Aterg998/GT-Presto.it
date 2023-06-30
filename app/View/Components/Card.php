<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $ad;

    public function __construct($ad)
    {
        $this->ad = $ad;
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
