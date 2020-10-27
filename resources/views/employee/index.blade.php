@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Employee List</h1>
        </div>
    </div>
    @if(count($employees) > 0)
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
                        <td>
                            @if(!$employee->email == null)
                                {{$employee->email}}
                            @else
                                No Email Found
                            @endif
                        </td>
                        <td>
                            @if(!$employee->phone == null)
                                <a href="{{$employee->phone}}">{{$employee->phone}}</a>
                            @else
                                No Phone Found
                            @endif
                        </td>
                        <td>
                            <a href="/company/{{$employee->company->id}}">{{$employee->company->name}}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$employees->links()}}
    @else
        <hr>
        <div class="row">
            <div class="col">
                <p>No employees found</p>
            </div>
        </div>
    @endif
</div>
@endsection
