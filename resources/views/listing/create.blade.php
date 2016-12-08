@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create A Listing</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/create" enctype="multipart/form-data">
                        {{ csrf_field() }}

                            <!-- Name lable and input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">


                                </div>
                            </div>


                            <!-- category lable and input -->
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Category</label>
                                <div class="col-md-6 control-label">
                                <select name="category_id" class="form-control">

                                @foreach($categories as $category)
                                <option value="{{$category->id}}"> {{$category->name}}</option>

                                @endforeach
                                        
                                </select>
                                </div>
                            </div>


                            {{-- Location  --}}



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

                            {{-- contact --}}
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Contact</label>

                                <div class="col-md-6">
                                   
                                   <input value="+254" id="name" type="text" class="form-control" name="contact" >

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
                                    <textarea id="name" type="text" class= "form-control" name="description"></textarea>   
                                </div>
                            </div>



                            <!--Pricing and pricing_rate -->

                            

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">pricing</label>

                                <div class="col-md-2">
                                   
                                   <input id="name" type="text" class="form-control" name="pricing" >

                                   </div>
                                    <label for="name" class="col-md-1 control-label">per</label>
                                <div class="col-md-2 control-label">
                                <select name="pricing_rate" class="form-control">

                                @foreach($pricing_rates as $pricing_rate)
                                <option value="{{$pricing_rate->id}}" selected> {{$pricing_rate->name}}</option>

                                @endforeach
                                        
                                </select>
                            </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Items available</label>

                                <div class="col-md-6">
                                   
                                   <input id="name" type="text" class="form-control" name="items_available" >

                                </div>
                            </div>
                            <div class="col-md-2">         
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><a href="/myListings"></a> Post </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            

















@endsection