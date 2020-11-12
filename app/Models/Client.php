<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
       'name',
       'phone',
       'email',

    ];
    public function relPatients(){
        return $this->hasMany('App\Models\Patient','client_id');
    }
}
