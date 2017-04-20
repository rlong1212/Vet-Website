<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact</title>

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
                    Contact
                </div>

                <div class="links">
                    <a href="{{ url('/welcome') }}">Home</a>
                    <a href="{{ url('/about') }}">About</a>
                    <a href="{{ url('/location')}}">Location</a>
                    <a href="{{ url('/contact')}}">Contact</a>
                </div>

                <div id ="contactform">
                <form = action="{{url('contact')}}" method="POST">
                {{ csrf_field() }}
                    <div class ="formgroup">
                        <label name ="name">Name</label>
                        <input id ="name" name = "name" class="form-control">
                    </div>
                     <div class ="formgroup">
                        <label name ="email">Email</label>
                        <input id ="email" name = "email" class="form-control">
                    </div>

                    <div class ="formgroup">
                        <label name ="subject">Subject</label>
                        <input id ="subject" name = "subject" class="form-control">
                    </div>

                     <div class ="formgroup">
                        <label name ="message">Message:</label>
                        <textarea id="message" name = "message" class="form-control"></textarea>
                    </div>

                    <input type="submit" value="Send Message" class="btn btn-success">
                </form>

                </div>
            </div>
        </div>
    </body>
</html>