<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluations extends Model
{
    use HasFactory;

    public function Evaluations(){
        return $this->hasMany('App\Models\Evaluables');
    }
}
