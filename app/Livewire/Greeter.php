<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $name = "ADIB";

    public function changeName(){
        // $this->name = $name;
    }
    
    public function render()
    {
        return view('livewire.greeter');
    }
}
