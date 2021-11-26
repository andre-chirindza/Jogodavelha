<?php

namespace App\View\Components;

use Illuminate\View\Component;

class square extends Component
{
    public $classController;
    public $classColor;
    public $m;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($m)
    {
        $this->m = $m;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.square');
    }
}
