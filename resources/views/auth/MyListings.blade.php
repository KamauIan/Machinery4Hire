@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <ul class="list-inline">
                    <li><h3> All Listings</h3> </li>
                    <li class="pull-right"><a href="{{ url('/create') }}"><button class="btn btn-primary">Post</button></a></li>    
                </ul>
                <!-- $listing->name; -->
                
            <div class="panel-body">
                @foreach($listings as $listing)

                    <table class="table" >
                        
                        <tr>
                            <td class="primary" width="56%" rowspan="4"><img width="300px" height="200px" src="{{$listing->pic_of_machine}}"></td>
                            <td><h1>{{$listing->name}}</h1></td>
                        </tr>

                           <tr><td><h3>{{$listing->categories->name}}</h3></td></tr>
                           
                            <tr>
                                <td><h3>{{$listing->pricing}}</h3></td>
                            </tr>

                            <tr>
                                <td >{{$listing->items_available}} {{$listing->name}} remaining</td>
                            </tr>

                            <tr>
                                <td colspan="2"><p>{{$listing->description}}</p></td>
                            </tr>
                            
                            <tr>
                                <td colspan="2" align="right">
                                    <a class="btn" href="/listings/{{$listing->id}}/edit">
                                        <button class="btn btn-primary glyphicon glyphicon-pencil"><i class="fa fa-btn fa-pencil"></i>edit</button>
                                    </a>
                                </td>
                                
                                <td colspan="2" align="right">
                                    <a class="btn " href="/listings/{{$listing->id}}/delete">
                                        <button type="submit" class="btn btn-danger glyphicon glyphicon-trash"><i class="fa fa-trash">Delete</i></button>
                                    </a>
                                </td>
                                </tr>
                            </tr>
                        
                    </table>
                    <hr>

                    <hr>

                @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection