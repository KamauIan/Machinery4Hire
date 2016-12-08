<!DOCTYPE html>
<html lang="en">
<head>

    <title>Machinery4Hire</title>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css" >
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">


</head>

<script src="/js/boostrap.js" type="text/javascript"></script>

<script src="/js/bootstrap.min.js" type="text/javascript" ></script>

<body id="page-top" class="index">
    <nav id="mainNav" class="navbar">
        <div class="container">
            <div class="navbar-header page-scroll">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand page-scroll" href="/">
                    Machinery4Hire
                </a>
            </div>



            <div class="collapse navbar-collapse" >
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                <li class="hidden">
                        <a href="#page-top"></a>
                </li>
                <li class="page-scroll"><a href="{{ url('/listings') }}">Listings</a></li>

                </ul>

                @if (Auth::guest())
                <!-- Listings link -->
                <ul class="nav navbar-nav">

                </ul>

                @endif

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else

                        <li class="dropdown">

                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                            <span class="glyphicon glyphicon-user"></span>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/myListings') }}">MyListings</a></li>
                                <li><a href="{{ url('/editprofile') }}">Edit Profile</a></li>
                            </ul>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <hr class="alert-success">

@yield('content')

</body>
</html>
