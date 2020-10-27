@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-primary">
        <div class="card-header">
            <h1>Employee Details</h1>
        </div>

        <div class="card-body">
            <h5 class="card-title">Name</h5>
                <p class="card-text">{{$employee->first_name}} {{$employee->last_name}}</p>
            <hr>
            <h5 class="card-title">Email</h5>
                <p class="card-text">{{$employee->email}}</p>
            <hr>
            <h5 class="card-title">Phone</h5>
                <p class="card-text">{{$employee->phone}}</p>
            <hr>
            <h5 class="card-title">Company</h5>
                <a href="/company/{{$employee->company->id}}" class="card-text">{{$employee->company->name}}</a>
            <hr>
        </div>
    </div>
</div>
@endsection
