<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = ['name', 'phone', 'estado', 'placa', 'company_id'];

    public function invoces()
    {
        return $this->hasMany('App\Invoce');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
