@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
	            <ul class="panel-heading">
	                <h3> These are the Listings available <hr>
                    <h4><a href="{{ url('/create') }}"><button class="btn btn-primary">Post a New Listing</button></a></h4>
    	            </h3>    
	            </ul>
            <div class="panel-body">
                @foreach($listings as $listing)
                	<h1><u>{{$listing->name}}</u></h1>
                	<h2>{{$listing->category}}</h2>
                	<p>{{$listing->description}}</p>
                	<h3>{{$listing->pricing}}</h3>
                	<p>{{$listing->items_available}} {{$listing->name}} remaining</p>
                @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection