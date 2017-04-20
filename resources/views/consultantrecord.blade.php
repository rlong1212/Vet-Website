@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Consultant Record</div>
                
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
            <td>Username</td>
            <td>Password</td>
        </tr>
    </thead>
    <tbody>
    <?php 
    $consultant = App\consultantModel::all();
    ?>
    
    @foreach($consultant as $con)
        <tr>
            <td>{{ $con->id }}</td>
            <td>{{ $con->username }}</td>
            <td>{{ $con->password }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
    </div>
   </div>
</div>
@endsection