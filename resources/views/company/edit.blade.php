@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Company</h1>
        </div>
        {{-- enctype => multipart/data for file upload --}}
        {!! Form::open(['action' => ['CompaniesController@update', $company->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="form-group col-md-12">
                                {{Form::label('name', 'Company Name')}}
                                {{Form::text('name', $company->name, ['class' => 'form-control', 'placeholder' => 'Company Name'])}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                {{Form::label('email', 'Email')}}
                                {{Form::text('email', $company->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('website', 'Website')}}
                                {{Form::text('website', $company->website, ['class' => 'form-control', 'placeholder' => 'Website'])}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        {{Form::label('logo', 'Company Logo')}}
                        <hr>
                        @if($company->logo == 'noimage.jpg')
                            <img id="logo" class="img-thumbnail" style="max-width:200px; max-height:200px;" src="{{asset('storage/'.$company->logo)}}">
                        @else
                            <img class="img-thumbnail" style="max-width: 200px; max-height: 200px;" src="{{asset('storage/images/'.$company->logo)}}">
                        @endif
                        <hr>
                        {{Form::file('logo', ['onchange' => 'changeImage()'])}}
                    </div>
                </div>
                {{Form::hidden('_method', 'PUT')}}
                {{-- Add image upload option --}}
                {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}
    </div>
</div>

<script>
    /**
     * This function is used to dynamically change the image preview
     * as the user uploads an logo
     * @return void
     */

    function changeImage(){
        var selectedFile = event.target.files[0];
        var reader = new FileReader();

        var imgtag = document.getElementById("logo");
        imgtag.title = selectedFile.name;

        reader.onload = function(event) {
            imgtag.src = event.target.result;
        };

        reader.readAsDataURL(selectedFile);
    }
</script>
@endsection
