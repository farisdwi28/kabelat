<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedNews extends Component
{
    public $title;
    public $date;
    public $image;

    public function __construct($title, $date, $image)
    {
        $this->title = $title;
        $this->date = $date;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.featured-news');
    }
}
