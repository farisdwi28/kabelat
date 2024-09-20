<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CustomInput extends Component
{
    public $label;
    public $name;
    public $type;
    
    /**
     * Create a new component instance.
     *
     * @param string $label
     * @param string $name
     * @param string $type
     */
    public function __construct($label = 'Input', $name = 'input', $type = 'text')
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.custom-input');
    }
}
