<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoce extends Model
{
    protected $fillable = [
        'c_producto', 'c_carrera', 'company_id', 'user_id', 'driver_id', 'client_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function driver()
    {
        return $this->belongsTo('App\Driver');
    }

    public function restaurants()
    {
        return $this->belongsToMany('App\Restaurant')->withPivot('restaurant_id', 'invoce_id');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
