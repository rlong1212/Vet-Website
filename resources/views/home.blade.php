@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Keeper Dashboard</div>

                <div class="panel-body">
                    You are logged in as <strong>{{ Auth::user()->username }}</strong>
                </div>
            </div>

            <div class="content">            
                <div class="links">
                    <a href="{{ url('/animalrecords') }}">View Animal Records</a>
                    <a href="{{ url('/bookinghistory') }}">View Appointments</a>
                    <a href="{{ url('/booknewappointment') }}">Book New Appointment</a>
                    <a href="{{ url('/editcancelappointment') }}">Edit/Cancel Appointment</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop