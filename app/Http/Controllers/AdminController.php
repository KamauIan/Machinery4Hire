<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use App\PriceModel;

use App\PriceRating;

use App\Location;

class AdminController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	
	{
		$categories = Category::all();
		$pricingmodel = PriceModel::all();
		$pricingrate = PriceRating::all();
		$location = Location::all();
		
		return view('auth.Admin', 
			['categories'=>$categories,
			'pricing_models'=>$pricingmodel,
			'pricing_rates'=>$pricingrate,
			'locations'=>$location
			]);
	
	}

	// Add Modules
	// Add a categrory
	public function AddCateg(Request $request)
	
	{
		$categories = new Category;

        $categories->name = $request->name;
       	$categories->save();

       	return \Redirect::to('/admin');

	
	}
	// Add location
	public function AddLocation(Request $request)
	
	{
		$locations = new Location;
        $locations->name = $request->name;
       	$locations->save();

       	return \Redirect::to('/admin');

	
	}

	// Add a Price rate
	public function AddPricing_Rate(Request $request)
	
	{
		$pricingrate = new PriceRating;
        $pricingrate->name = $request->name;
       	$pricingrate->save();

       	return \Redirect::to('/admin');

	
	}





	// Delete Modules
	// Delete a category 
	public function deleteCateg($id)
	
	{
		$categories=Category::find($id);
        $categories->delete();

        return \Redirect::to('/admin');
	
	}
	// Delete a location
	public function deleteLocal($id)
	
	{
		$locations=Location::find($id);
        $locations->delete();

        return \Redirect::to('/admin');
	
	}
	// Delete a Price Rate
	public function deletePrice_rate($id)
	
	{
		$pricing_rate=PriceRating::find($id);
        $pricing_rate->delete();

        return \Redirect::to('/admin');
	
	}

			
    //
}
