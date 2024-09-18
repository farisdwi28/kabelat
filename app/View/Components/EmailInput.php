<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EmailInput extends Component
{
    public $label;
    public $name;
    
    public function __construct($label = 'Email', $name = 'email')
    {
        $this->label = $label;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.email-input');
    }
}
