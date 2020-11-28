<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'phone', 'company_id'];
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function invoces()
    {
        return $this->hasMany('App\Invoce');
    }

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }
}
