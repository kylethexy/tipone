@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Add Company</h1>
        </div>
        {{-- enctype => multipart/data for file upload --}}
        {!! Form::open(['action' => 'CompaniesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-8">
                        {{Form::label('name', 'Company Name')}}
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Company Name'])}}
                    </div>
                    <div class="form-group col-md-4">
                        {{Form::label('logo', 'Company Logo')}}
                        {{Form::file('logo')}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        {{Form::label('email', 'Email')}}
                        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
                    </div>
                    <div class="form-group col-md-6">
                        {{Form::label('website', 'Website')}}
                        {{Form::text('website', '', ['class' => 'form-control', 'placeholder' => 'Website'])}}
                    </div>
                </div>
                {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
