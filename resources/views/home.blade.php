@extends('layouts.app')

@section('content')

<style>

body {background-image:url('/img/header-bg1.jpg');
        background-color:#cccccc;
        /*background-position: center;*/
        background-attachment:fixed;
        background-repeat:no-repeat;
        background-size:100%;

                    }

                        </style>
<div class="container">
    
        <li>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-primary">search</button>
            </form>
    </li>

        <h1 style="color:white; font:bold 59px arial,sans-serif; position:absolute; left:10%; top:40%;">WELCOME TO MACHINERY FOR HIRE!</h1>
</div>
<div class="container">
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



@endsection
