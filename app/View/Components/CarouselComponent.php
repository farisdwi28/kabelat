<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CarouselComponent extends Component
{
    public array $slides;
    public $heading;

    public function __construct(array $slides, $heading)
    {
      $this->slides = $slides;
      $this->heading = $heading;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carousel-component');
    }
}
