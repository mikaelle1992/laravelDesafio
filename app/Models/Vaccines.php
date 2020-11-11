<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccines extends Model
{
    protected $fillable = [
        'name',

    ];
    public function relVaccine_wallet()
    {
        return $this->hasMany('App\Models\Vaccine_wallets', 'id', 'vaccine_id');
    }
}
