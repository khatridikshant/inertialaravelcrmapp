<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public int $count = 0;
    public string $value="String";

    public function changeCount(){
        $this->count++;
    }
    
    public function subtractCount(){
        
        if($this->count > 0){
            $this->count--;
        }else{
            $this->count = 0;
        }
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
