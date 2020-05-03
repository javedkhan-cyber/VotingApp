<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Voting') }}</title> 

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style type="text/css">
        .nav
        {
         margin-left:20px;
        }
        .icon{
         margin-left: 2px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav  class="navbar navbar-expand-md bg-dark navbar-light shadow-sm">
            <div class="container">
               <!--  <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Voting') }} 
                  
                </a> -->
                <img src="images/new.png" style="height:2rem;margin-left:-3.5rem;"> <h4 style="color:white;margin-top: 20px;margin-left: 3px;"><b> I Vote</b> </h4>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                   <!--  <ul class="navbar-nav mr-auto" s>
                     <li class="nav"><a href="{{ url('/') }}" class="active"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                         <li class="nav"><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>About</a></li>
                          <li class="nav"><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>Contact Us</a></li>
                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                   <ul class="navbar-nav ml-auto">
                         <li class="nav"><a href="{{ url('/') }}"><h6 style="color:white !important;"><i class="fa fa-home" aria-hidden="true"></i>Home</h6></a></li>
                         <li class="nav"><a href="{{ route('home.about') }}"><h6 style="color:white !important;"><i class="fa fa-info-circle" aria-hidden="true"></i>About Us</h6></a></li>
                          <li class="nav"><a href="{{ route('home.contact') }}"><h6 style="color:white !important;"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>Contact Us</h6></a></li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav">
                                <a href="{{ route('login') }}"><h6 style="color:white !important;"><i class="fa fa-sign-in" aria-hidden="true"></i>{{ __('Login') }}</h6></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav">
                                    <a href="{{ route('register') }}"><h6 style="color:white !important;"><i class="fa fa-user-plus" aria-hidden="true"></i>{{ __('Register') }}</h6></a>
                                </li>
                            @endif
                        @else
                            <li class="nav dropdown" >
                                <a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><h6 style="color:white !important;"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    {{ Auth::user()->name }} <!-- <span class="caret"></span> --></h6>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="background-color: #008080"><!-- 
            <div style="background-image: url('images/bg1.jpg');opacity: 0.5"></div> -->
            @yield('content')

        </main>
<div id="page-content" class="footer" style="color: white !important; background-color: #008080" >
    <div class="container text-center footer-main">
      <div class="row justify-content-center">
        <div class="col-md-4 ftr-grid" style="background: #146eb4;">
                    <div class="col-md-2 address">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 address add">
                        <h4>Address</h4>
                        <span class="ftr-line"> </span>
                        <p>2nd Floor, JB Emperor Square,
                        Kanpur - Lucknow Rd,near Apollo Medics Hospital
                        LDA Colony, Lucknow, Uttar Pradesh 226012</p>
                        
                    </div>
                <div class="clearfix"> </div>
                </div>
     <div class="col-md-4 ftr-grid" style="background: #ff4f81;">
                    <div class="col-md-2 address">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 address add">
                        <h4>Call Us</h4>
                        <span class="ftr-line"> </span>
                        <p>+91-9580511301 India</p>
                        <p>+1 213 7882911 Los Angeles, CA, United States</p>
                    </div>
                
<i class="fa fa-linkedin-square" aria-hidden="true" style="margin-right:10px;"></i>
<i class="fa fa-facebook-square" aria-hidden="true" style="margin-right:10px;"></i>
<i class="fa fa-instagram" aria-hidden="true" style="margin-right:10px;"></i>
<i class="fa fa-pinterest" aria-hidden="true" style="margin-right:10px;"></i>

<div class="clearfix"> </div>
                

        </div>
        <div class="col-md-4 ftr-grid" style="background: #146eb4;">
                    <div class="col-md-2 address">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10 address add">
                        <h4>Email</h4>
                        <span class="ftr-line"> </span>
                        <p>info@iphtechnologies.com</p>
                        <p>info@iphtechnologies.com</p>
                    </div>
                <div class="clearfix"> </div>
                </div>
      </div>
    </div>
  </div>
<footer id="sticky-footer" class="py-4 bg-dark text-white-50" >
    <div class="container text-center">
      <small>Copyright &copy;Voting System</small>
    </div>
  </footer>
    </div>

</body>
</html>