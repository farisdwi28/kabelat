<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pagination extends Component
{
    // public $currentPage;
    // public $lastPage;

    public function __construct()
    {
        // $this->currentPage = $currentPage;
        // $this->lastPage = $lastPage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pagination');
    }
}
