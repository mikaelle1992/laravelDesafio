<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name',

     ];

    public function relBreed(){
        return $this->hasMany('App\Models\Breed','animal_id');
    }
}
