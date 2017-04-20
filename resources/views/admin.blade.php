@extends('layouts.app')

@section('content')     
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Management Dashboard</div>
                <div class="panel-body">
                    You are logged in as <strong>{{ Auth::user()->username }}</strong>
                </div>
            </div>
            <div class="content">
            <div class="panel panel-default">
            <div class="panel-body">
                <div class="links">
                    <a href="{{ url('/keeperrecord') }}">Keeper Record</a>
                    <a href="{{ url('/consultantrecord') }}">Consultant Record</a>
                    <a href="{{ url('/animalrecords') }}">Animal Record</a>
                </div>
                </div>
            </div>                            
            </div>
        </div>
    </div>
</div>
@@stop