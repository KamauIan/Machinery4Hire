<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class PriceRating extends Model
{
	public function listings()
    
    {
    	return $this->hasMany('App\Listing', 'pricing_rate', 'id');
    }
    //
}
