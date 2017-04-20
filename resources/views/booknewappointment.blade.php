@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Book New Appointment</div>
            </div>
        </div>
    </div>
    <div class="row">
    <!-- used https://www.youtube.com/watch?v=El4yziFuygQ tutorial for help on creating forms, adapted by creating different elements -->
    	<div class="col-md-8 col-md-offset-2">
    		<hr>
    			{!! Form::open(array('route' => 'appointments.store')) !!} 
    				{{ Form::label('animalID', 'Animal ID:') }}
    				<hr>
    				{{ Form::label('keeperID', 'Keeper ID:') }}
    				<hr>
    				{{ Form::label('consultantID', 'Consultant ID:') }}
    				<hr>
    				{{ Form::label('appointmentType', 'Appointment Type:') }}
    				{{ Form::textarea('appointmentType', 'Brief description of appointment type', array('class' => 'form-control')) }}
    				<hr>
    				{{ Form::label('date', 'Date:') }}
    				{{ Form::text('date', 'Choose a date', array('id' => 'datepicker')) }}
    				<hr>
    				{{ Form::label('time', 'Time:') }}
    				{{ Form::select('time', ['9' => '0900', '93' => '0930', '10' => '1000', '103' => '1030', '11' => '1100', '113' => '1130', '12' => '1200', '123' => '1230', '2' => '1400', '23' => '1430','3' => '1500', '33' => '1530', '4' => '1600', '43' => '1630', '5' => '1700', '53' => '1730']) }}
    				<hr>
    				{{ Form::submit('Book Appointment', array('class' => 'btn btn-success btn-block', 'style' => 'margin-bottom: 20px;')) }}

                {!! Form::close() !!}    		
    	</div>
    </div>
</div>
@endsection 

