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
    	<div class="col-md-10 col-md-offset-1">
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
            <td>Actions</td>
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
            <td>{{ substr($app->appointmentType, 0, 50) }}{{ strlen($app->appointmentType) > 50 ? "..." : "" }}</td>
            <td>{{ $app->date }}</td> 
            <td>{{ $app->time }}</td>
            <td><a href="{{ route('appointments.show', $app->id) }}" class="btn btn-default">View</a> <a href="{{ route('appointments.edit', $app->id) }}" class="btn btn-default">Edit</a> <a href="{{ route('appointments.destroy', $app->id) }}" class="btn btn-default">Cancel</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
    </div>
   </div>
</div>
@endsection