@extends('layouts.app')

@section('content')

<style>

body {background-image:url('/img/header-bg1.jpg');
        background-color:#cccccc;
        /*background-position: center;*/
        background-attachment:fixed;
        background-repeat:no-repeat;
        background-size:100%;
        transparent:25%;

                    }

                        </style>
<div class="container">
    
        <li>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
                <button type="submit" class=" form-control glyphicon glyphicon-search btn btn-primary"></button>
                </div>
                
            </form>
    </li>
    <div class="container">
        <h1 style="color:white; font:bold 59px arial,sans-serif; position:absolute; left:10%; top:40%;">WELCOME TO MACHINERY FOR HIRE!<hr></h1>
        <h1 style="color:white; font: italic bold 40px arial,sans-serif; position:absolute; left:23%; top:55%;">We find any machine you want for free!</h1>
        <a href="/listings"><button style=" position:absolute; left:45%; bottom:20%;" class="btn btn-primary btn-lg">Get Started </button></a>

    </div>



</div>

@endsection
