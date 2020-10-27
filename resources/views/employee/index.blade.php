@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Employee List</h1>
        </div>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Employee Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Company</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr class="table-dark text-dark">
                    <td><a href="/employee/{{$employee->id}}">{{$employee->first_name}} {{$employee->last_name}}</a></td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->phone}}</td>
                    <td>
                        <a href="/company/{{$employee->company->id}}">{{$employee->company->name}}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
