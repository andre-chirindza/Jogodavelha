<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Square extends Component
{
    public $status = 1;



    public function render()
    {
        return view('livewire.square');
    }
}
