<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalModel extends Model
{
    use HasFactory;
    protected $table = "animals";
    protected $guarded = [];
}
