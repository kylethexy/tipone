@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" id="danger-alert">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success" id="success-alert">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" id="error-alert">
        {{session('error')}}
    </div>
@endif
