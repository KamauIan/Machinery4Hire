<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
	public function categories()
	
	{
		return $this->belongsTo('App\Category','category_id','id');

	}


	public function PriceRating()
	
	{
		return $this->belongsTo('App\PriceRating', 'pricing_rate','id');
	
	
	}

	public function users()
	
	{
		return $this->belongsTo('App\User', 'user_id', 'id');
	
	
	}

	public function location()
	
	{
		return $this->belongsTo('App\Location', 'location_id', 'id');
	
	
	}
			
			
			
			
    
}
