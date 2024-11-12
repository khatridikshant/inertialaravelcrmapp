<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class ReceiveMessage extends Component
{



    public string $value = "";

   
    protected $listeners = ['thisisdispatchmessage'=>'dispatch'];

    public function dispatch(){

        $this->value = "The Dispatched Message";


    }

    public function render()
    {
        return view('livewire.receive-message');
    }
}
