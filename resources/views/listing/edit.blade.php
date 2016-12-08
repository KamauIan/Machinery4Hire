@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create A Listing</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
                    {{method_field('PATCH')}}
                        {{ csrf_field() }}

                            <!-- Name lable and input-->
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $listing->name }}">


                                </div>
                            </div>


                            <!-- category lable and input -->
                   
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Category</label>
                        <div class="col-md-6 control-label">
                        <select name="category_id" class="form-control">

                        @foreach($categories as $category)
                            <option value="{{$category->id}}"> {{$category->name}}</option>
                        @endforeach
                                
                        </select>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Location</label>
                                <div class="col-md-6 control-label">
                                <select name="location_id" class="form-control">

                                @foreach($locations as $location)
                                <option value="{{$location->id}}"> {{$location->name}}</option>

                                @endforeach
                                        
                                </select>
                                </div>
                            </div>


                            <!-- Pic of the listing -->
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Upload a pic</label>

                                <div class="col-md-6">
                                    <input id="file" type="file" class="form-control" name="pic_of_machine" >

                                </div>
                            </div>

                            <!-- Description -->
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <textarea id="name" type="text" class= "form-control" name="description">{{$listing->description}}</textarea>   
                                </div>
                            </div>



                            <!-- pricing_rate -->

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Price Rates</label>
                                <div class="col-md-6 control-label">
                                 <select name="pricing_rate" class="form-control">

                                    @foreach($price_ratings as $pricing_rate)
                                    <option value="{{$pricing_rate->id}}" selected> {{$pricing_rate->name}}</option>

                                    @endforeach
                                            
                                </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">pricing</label>

                                <div class="col-md-6">
                                   
                                   <input id="name" type="text" class="form-control" name="pricing" value="{{$listing->pricing}}" >


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Items available</label>

                                <div class="col-md-6">
                                   
                                   <input id="name" type="text" class="form-control" name="items_available" value="{{$listing->items_available}}" >

                                </div>
                            </div>
                            <div class="col-md-2">         
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"> Post </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            

















@endsection