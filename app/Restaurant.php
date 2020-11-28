<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['name', 'phone', 'direccion'];

    public function invoces()
    {
        return $this->belongsToMany('App\Invoce')->withPivot('restaurant_id', 'invoce_id');
    }
}
