@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <ul class="list-inline">
                    <li class="col-md-10 col-md-offset-1"><h1><u> ALL LISTINGS</u><a href="{{ url('/create') }}"><button class="btn btn-primary pull-right btn-lg">Create Post</button></a></li></h1>
                        
                </ul>
                <!-- $listing->name; -->
                
            <div class="panel-body">
                @foreach($listings as $listing)
            <section>
                    <table class="table table-hover" >
                        
                        <tr>
                            <td class="primary" width="56%" rowspan="6"><img width="400px" height="300px" src="{{$listing->pic_of_machine}}"></td>
                            <td><h4>{{$listing->name}}</h4></td>
                        </tr>

                           <tr><td>{{$listing->categories->name}}</td></tr>

                           <tr><td><h4>Located at:{{$listing->location->name}}</h4></td></tr>
                           
                            <tr><td><h3>Pricing:{{$listing->pricing }}</h3></td></tr>

                            <tr><td >{{$listing->items_available}} {{$listing->name}} remaining</td></tr>


                            <td><a href= "/listings/{{$listing->id}}/view_post"><button class="btn btn-primary pull-right">View</button></a></td>
                            
                    </table>
                    <hr>

                    <hr>
            </section>
                @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection