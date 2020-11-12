<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name',
        'date_birth',
        'gender',
        'breed_id',
        'client_id',

     ];
     public function relBreed(){
        return $this->hasOne('App\Models\Breed','id','breed_id');
    }
    public function relClient(){
        return $this->hasOne('App\Models\Client','id','client_id');
    }
    public function relVaccine_wallets()
    {
        return $this->hasMany('App\Models\Vaccine_wallets', 'id', 'patient_id');
    }
}
