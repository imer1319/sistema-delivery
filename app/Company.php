<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'phone', 'porcentaje'];
    
    public function clients()
    {
        return $this->hasMany('App\Client');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function invoces()
    {
        return $this->hasMany('App\Invoce');
    }
}
