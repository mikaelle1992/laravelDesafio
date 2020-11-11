<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name',

     ];

    public function relBreeds(){
        return $this->hasOne('App\Models\Breed','animal_id');
    }
}
