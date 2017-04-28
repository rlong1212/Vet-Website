<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
      
        <link rel="stylesheet" type="text/css" href="/css/app.css">
       
        
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    About
                </div>

                <div class="links">
                    <a href="{{ url('/welcome') }}">Home</a>
                    <a href="{{ url('/about') }}">About</a>
                    <a href="{{ url('/location') }}">Location</a>
                    <a href="{{ url('/contact') }}">Contact</a>
                </div>

                <div>
                    Management system for consultants, managers, and keepers of our zoo.
                </div>
            </div>
        </div>
    </body>
</html>