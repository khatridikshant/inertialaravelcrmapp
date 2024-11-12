<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormInput extends Component
{

    public int $count;
    
    public function render()
    {
        return view('livewire.form-input');
    }
}
