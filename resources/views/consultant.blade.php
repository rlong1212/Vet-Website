@extends('layouts.app')

@section('content')
<head>
</head>
<!-- Styles -->
        
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Consultant Dashboard</div>

                <div class="panel-body">
                    You are logged in as <strong>{{ Auth::user()->username }}</strong>
                </div>
            </div>
            <div class="content">
            <div class="panel panel-default">
            <div class="panel-body">
                <div class="links">
                    <a href="https://laravel.com/docs">View Animal Records</a>
                    <a href="https://laravel-news.com">View Appointments</a>
                    <a href="https://forge.laravel.com">Edit/Cancel Appointment</a>
                </div>
                </div>
            </div>                            
            </div>
<<<<<<< HEAD
</body>
@stop
=======
        </div>
    </div>
</div>
@endsection
>>>>>>> origin/master
