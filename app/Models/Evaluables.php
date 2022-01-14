<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluables extends Model
{
    use HasFactory;

    public function Agents(){
        return $this->belongsTo('App\Models\Agents');
    }

    public function Evaluations(){
        return $this->belongsTo('App\Models\Evaluations');
    }
}
