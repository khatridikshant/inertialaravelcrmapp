<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\AnimalModelController;
use App\Models\AnimalModel;
use Illuminate\Http\Request;

class FormInput extends Component
{

    public int $count;
    public string $name;
    public string $notes;

    public function store(Request $request){




        $this->validate([
            "name"=>"required|max:55"
        ]);
        
        
        AnimalModelController::store(["name"=>$this->name,"notes"=>$this->notes]);
        $this->name="";
        $this->notes="";

    }
    public function render()
    {

        $animals = AnimalModel::all();
        return view('livewire.form-input',['message' => "This is from render function","animals"=>$animals]);
    }
}
