<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardComponent extends Component
{
    public $image;
    public $title;
    public $date;
    public $description;

    public function __construct($image, $title, $date = null, $description = null)
    {
        $this->image = $image;
        $this->title = $title;
        $this->date = $date;
        $this->description = $description;
    }
    
    public function render(): View|Closure|string
    {
        return view('components.card-component');
    }
}
