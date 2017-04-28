@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Keeper Record</div>
                
            </div>
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
            <td>Name</td>
            <td>Email</td>
            <td>Type</td>
            <td>Age</td>
        </tr>
    </thead>
    <tbody>
    <?php 
    $Keeper = App\Keeper::all();
    ?>
    
    @foreach($Keeper as $kep)
        <tr>
            <td>{{ $kep->id }}</td>
            <td>{{ $kep->name }}</td>
            <td>{{ $kep->email }}</td>
            <td>{{ $kep->type }}</td>
            <td>{{ $kep->age }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
    </div>
   </div>
</div>
@endsection