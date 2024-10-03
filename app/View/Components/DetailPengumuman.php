<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DetailPengumuman extends Component
{
    public $title;
    public $author;
    public $date;
    public $img;
    public $isi;

    public function __construct($title, $author, $date, $img, $isi)
    {
        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
        $this->img = $img;
        $this->isi = $isi;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.detail-pengumuman');
    }
}
