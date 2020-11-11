<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    protected $fillable = [
        'name',
        'animal_id',

     ];
    public function relAnimal(){
        return $this->hasOne('App\Models\Animal','id','animal_id');
    }
    public function relPacient(){
        return $this->hasMany('App\Models\Pacient','breed_id');
    }
}
