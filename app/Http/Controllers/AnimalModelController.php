<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnimalModel;

class AnimalModelController extends Controller
{
    
    public static function store($data){
     


        // $data->validate([
        //     "name"=>"required|max:55"
        // ]);
        
        AnimalModel::create([
            "name" => $data["name"],
            "notes" => $data["notes"]
        ]);
    }
}
