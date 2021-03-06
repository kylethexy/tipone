@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Company List</h1>
        </div>
        <div class="col">
            <a href="{{ url('/company/create') }}" type="button" class="btn btn-success float-right">Add Company</a>
        </div>
    </div>
    @if(count($companies) > 0)
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
                @foreach($companies as $company)
                    <tr class="table-dark text-dark">
                        <td><a href="/company/{{$company->id}}">{{$company->name}}</a></td>
                        <td>
                            @if(!$company->email == null)
                                {{$company->email}}
                            @else
                                No Email Found
                            @endif
                        </td>
                        <td>
                            @if(!$company->website == null)
                                <a href="{{$company->website}}">{{$company->website}}</a>
                            @else
                                No Website Found
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('/company/'.$company->id.'/edit')}}" type="button"
                                    class="btn btn-warning pull-left">Edit</a>
                            <button type="button" class="btn btn-danger pull-right" onClick="confirmDelete({{$company->id}})">Delete</button>
                            {!!Form::open(['action' => ['CompaniesController@destroy', $company->id],
                                            'method' => 'POST', 'class' => 'pull-right', 'id' => 'form_delete'.$company->id])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                            {!!Form::close()!!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$companies->links()}}
    @else
        <hr>
        <div class="row">
            <div class="col">
                <p>No companies found</p>
            </div>
        </div>
    @endif
</div>

<script>

    /**
     * This function is used to display a prompt confirming
     * the user to proceed with the delete function
     * @param int $var
     */

    function confirmDelete($var){
        if (confirm("Are you sure you want to delete this record? This action cannot be undone.")) {
            document.getElementById("form_delete" + $var).submit();
        } else {

        }
    }
</script>

@endsection
