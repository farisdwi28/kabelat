<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProgramDispusip extends Component
{
    public $title;
    public $subtitle;
    public $description1;
    public $description2;
    public $description3;
    public $image;

    /**
     *
     *
     * @param string $title
     * @param string $description1
     * @param string|null $subtitle
     * @param string|null $description2
     * @param string|null $description3
     * @param string|null $image
     */
    public function __construct($title, $description1, $subtitle = null, $description2 = null, $description3 = null, $image = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description1 = $description1;
        $this->description2 = $description2;
        $this->description3 = $description3;
        $this->image = $image;
    }

    /**
     * 
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.program-dispusip');
    }
}
