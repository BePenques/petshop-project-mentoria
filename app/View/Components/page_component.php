<?php

namespace App\View\Components;

use Illuminate\View\Component;

class page_component extends Component
{
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page_component');
    }
}
