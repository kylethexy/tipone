@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Company Details</h1>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addEmployeeModal">
                    Add Employee
                </button>
            </div>
        </div>
        <hr>

        <div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="addEmployeeModalLabel">Add New Employee</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                {!! Form::open(['action' => 'EmployeesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="modal-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    {{Form::label('first_name', 'First Name')}}
                                    {{Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}
                                </div>
                                <div class="form-group col-md-12">
                                    {{Form::label('last_name', 'Last Name')}}
                                    {{Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    {{Form::label('email', 'Email')}}
                                    {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('phone', 'Phone Number')}}
                                    {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
                                </div>
                            </div>
                            {{Form::hidden('company_id', $company->id)}}
                        </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
                </div>
                {!! Form::close() !!}
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 text-center">
                <img class="img-thumbnail" style="max-width: 200px; max-height: 200px;" src="{{asset('storage/images/'.$company->logo)}}">
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col">
                        <p>Company Name: {{$company->name}}</p>
                        <p>Company Email:
                            @if(!$company->email == null)
                                {{$company->email}}
                            @else
                                No Email Found
                            @endif
                        </p>
                        <p>Company Website:
                            @if(!$company->website == null)
                                {{$company->website}}
                            @else
                                No Website Found
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h1>Employee List</h1>
        @if(count($employees) > 0)
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
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
                                    {{$employee->phone}}
                                @else
                                    No Phone Found
                                @endif
                            </td>
                            <td>
                                <a href="/employee/{{$employee->id}}/edit" type="button" class="btn btn-warning">Edit</a>
                                <button type="button" class="btn btn-danger pull-right" onClick="confirmDelete({{$employee->id}})">Delete</button>
                                {!!Form::open(['action' => ['EmployeesController@destroy', $employee->id],
                                            'method' => 'POST', 'class' => 'pull-right', 'id' => 'form_delete'.$employee->id])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                {!!Form::close()!!}
                            </td>
                            </tr>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <hr>
            <div class="row">
                <div class="col">
                    <p>No employees found</p>
                </div>
            </div>
        @endif
    </div>

<script>
    function confirmDelete($var){
        if (confirm("Are you sure you want to delete this record? This action cannot be undone.")) {
            document.getElementById("form_delete" + $var).submit();
        } else {

        }
    }
</script>
@endsection
