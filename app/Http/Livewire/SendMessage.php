<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SendMessage extends Component
{


    public function dispatchMessage(){
        $this->emit('thisisdispatchmessage');
    }
    public function render()
    {
        return view('livewire.send-message');
    }
}
