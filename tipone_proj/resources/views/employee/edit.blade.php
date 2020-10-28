@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Employee</h1>
        </div>
        {{-- enctype => multipart/data for file upload --}}
        {!! Form::open(['action' => ['EmployeesController@update', $employee->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="form-group col-md-12">
                                {{Form::label('first_name', 'First Name')}}
                                {{Form::text('first_name', $employee->first_name, ['class' => 'form-control', 'placeholder' => 'First Name'])}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                {{Form::label('last_name', 'Last Name')}}
                                {{Form::text('last_name', $employee->last_name, ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                {{Form::label('email', 'Email')}}
                                {{Form::text('email', $employee->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('phone', 'Phone Number')}}
                                {{Form::text('phone', $employee->phone, ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
                            </div>
                        </div>
                    </div>
                </div>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
