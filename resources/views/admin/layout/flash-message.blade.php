@if(session()->has('success'))
    <div class="alert alert-success d-flex justify-content-center">
        {{ session('success') }}
    </div>
@endif

@if(session()->has('delete'))
    <div class="alert alert-danger d-flex justify-content-center">
        {{ session('delete') }}
    </div>
@endif
