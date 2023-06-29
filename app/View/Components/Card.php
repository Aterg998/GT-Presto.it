<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $price;
    public $description;

    public function __construct($title, $price, $description)
    {
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
