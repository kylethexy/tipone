@extends('layouts.app')

@section('content')

<div class="container">
    <div style="float:left">
        <h1>Company List</h1>
    </div>
    <div style="float:right">
        <a href="{{ url('/company/create') }}" type="button" class="btn btn-success">Add Company</a>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Company Name</th>
                <th scope="col">Email</th>
                <th scope="col">Website</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

@endsection
