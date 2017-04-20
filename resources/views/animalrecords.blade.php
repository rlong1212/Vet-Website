
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Animal Records</div>
                
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
            <td>Type</td>
            <td>Age</td>
        </tr>
    </thead>
    <tbody>
    <?php 
    $animal = App\animal::all();
    ?>
    
    @foreach($animal as $ani)
        <tr>
            <td>{{ $ani->id }}</td>
            <td>{{ $ani->name }}</td>
            <td>{{ $ani->type }}</td>
            <td>{{ $ani->age }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
    </div>
   </div>
</div>
@endsection

