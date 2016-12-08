<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function listings()
    
    {
    	return $this->hasMany('App\Listing', 'location', 'id');
    }
}
