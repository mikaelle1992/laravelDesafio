<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine_wallets extends Model
{
    protected $fillable = [
        'user_id',
        'vaccine_id',
        'patient_id',
        'vaccine_date',
    ];
    public function relUser()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    public function relVaccines()
    {
        return $this->hasMany('App\Models\Vaccines','id', 'vaccine_id');
    }
    public function relPatient()
    {
        return $this->hasOne('App\Models\Patient', 'id', 'patient_id');
    }
}
