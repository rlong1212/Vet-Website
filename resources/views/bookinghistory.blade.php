@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Appointments</div>  
            </div>
        </div>
    </div>

    <div class="row">
    <!-- used https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers -->
    	<div class="col-md-8 col-md-offset-2">
    		<hr>
    		<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Animal ID</td>
            <td>Keeper ID</td>
            <td>Consultant ID</td>
            <td>Appointment Type</td>
            <td>Date</td>
            <td>Time</td>
        </tr>
    </thead>
    <tbody>
    <?php 
    $appointment = App\Appointment::all();
    ?>
    @foreach($appointment as $app)
        <tr>
            <td>{{ $app->id }}</td>
            <td>{{ $app->animalID }}</td>
            <td>{{ $app->keeperID }}</td>
            <td>{{ $app->consultantID }}</td>
            <td>{{ $app->appointmentType }}</td>
            <td>{{ $app->date }}</td>
            <td>{{ $app->time }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
    </div>
   </div>
</div>
@endsection