@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <ul class="list-inline">
                    <li><h3>{{$listing->name}}</h3> </li>
                    <li class="pull-right"><a href="{{ url('/create') }}"><button class="btn btn-primary">Post</button></a></li>    
                </ul>
                <!-- $listing->name; -->
                
            <div class="panel-body">
            <table class="table" >
                
                <tr>
                    <td class="primary" width="56%" rowspan="5"><img width="400px" height="355px" src="{{$listing->pic_of_machine}}"></td>
                    <td><h1>{{$listing->name}}</h1></td>
                </tr>

                   <tr><td><h3>{{$listing->categories->name}}</h3></td></tr>

                   <tr><td><h4>Located at:{{$listing->location->name}}</h4></td></tr>
                   
                    <tr><td><h3>Pricing:{{$listing->pricing}}</h3></td></tr>

                    <tr><td><h3>contact:{{$listing->contact}}</h3></td></tr>

                    <tr><td >{{$listing->items_available}} {{$listing->name}} remaining</td></tr>

                    <tr><td><h3>Description</h3><p>{{$listing->description}}</p></td></tr>

            </table>
                    <hr>

                    <hr>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection