<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Listing;

use App\Category;

use App\PriceModel;

use App\PriceRating;

use Illuminate\Support\Facades\Input;

use Image;

use View;

use App\Location;

class ListingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    // all listings
    public function index()
    
    {
    	$listings = Listing::all();
        $categories = Category::all();
        $pricing_models = PriceModel::all();
        $pricing_rates = PriceRating::all();
        $locations = Location::all();
        
        

    	return view('listing.listing',compact('listings', 'categories','pricing_models','pricing_rates','locations'));

       
    }

    // create a new listing
    public function create()
    {
        $listings = Listing::all();
        $categories = Category::all();
        $pricing_rates = PriceRating::all();
        $locations = Location::all();

        return view('listing.create',compact('listings','categories','pricing_rates', 'locations'));
        return view('home',compact('listings','categories','pricing_rates', 'locations'));
    }


    public function store(Request $request)
    {
        $listing = new Listing;
        $listing->name            = $request->name;
        $listing->category_id     = $request->category_id;
        $listing->pic_of_machine  = $request->pic_of_machine;
        $listing->description     = $request->description;
        $listing->contact         = $request->contact;
        $listing->pricing         = $request->pricing;
        $listing->items_available = $request->items_available;
        $listing->location_id     = $request->location_id;
        $file=Input::file('pic_of_machine');

        $destinationPath = 'upload/listing_images';
        $fileName = str_random(32) . '.' . $file->getClientOriginalExtension();
        Input::file('pic_of_machine')->move($destinationPath, $fileName );
        $listing->pic_of_machine  = $destinationPath. '/' . $fileName;

        $listing->save();




        // $imageName = $listing->id . '.' .$listing->file('image')->getClientOriginalExtension();

        // $request->file('image')->move(base_path() . '/public/images/catalog/', $imageName);

        // return Redirect::back();
        return \Redirect::to('/listings');

        
    }




    // public function edit(Listing $listing){
        
    //     $categories = Category::all();
       
    //     return view('listing.edit', compact('listing','categories'));

    
    // }





    public function edit($id)
        {
            $listing = Listing::find($id);
            $categories = Category::all();
            $price_ratings=PriceRating::all();
            $locations=Location::all();
            return view('listing.edit', compact('listing', 'categories','price_ratings','locations'));

        }



    public function update(Request $request, Listing $listing)
    
    {    
        $listing->update($request->all());

        return \Redirect::to ('/listings');

    }

    public function delete($id)
    
    {
        $listings=Listing::find($id);
        $listings->delete();

        return \Redirect::to ('/listings');
        
    
    
    }

    public function myListing()
    
    {
        $listings = Listing::all();
        $categories = Category::all();
        $price_ratings = PriceRating::all();
        return view('auth.MyListings', 
            compact('listings', 'categories','price_ratings'));
    
    }

    public function viewPost($id)
    
    {

        $listing = Listing::find($id);
        $categories = Category::find($id);
        $price_ratings = PriceRating::find($id);

        return view('listing.view_post',compact('listing', 'categories','price_ratings'));
    
    
    }
            
            
            

            
}












    // protected function validator(array $data)
 //    {
//        return Validator::make($data, [
 //            'name' => 'required|max:255',
 //            'category' => 'required|email|max:255|unique:users',
 //            'pic_of_machine' => 'required|min:1',
 //            'description' => 'required|max:255',
 //            'pricing' => 'required|max:255',
 //            'items_available' => 'required|max:255',
 //        ]);
 //    }




    // public function destroy($id)
    
    // {
    
    
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    

// protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'category' => $data['category'],
    //         'pic_of_machine' => $data['pic_of_machine'],
    //         'description' => $data['description']
    //         'pricing' => $data['pricing']
    //         'items_available' => $data['items_available']
    //     ]);
    // }
