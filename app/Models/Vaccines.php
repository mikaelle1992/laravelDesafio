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
        return $this->hasOne('App\Models\Vaccine_wallets','vaccine_id');
    }
}
