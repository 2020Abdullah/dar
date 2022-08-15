@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $error }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
@endif

@if(Session::has('Add'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('Add') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(Session::has('update'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('update') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(Session::has('del'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('del') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(Session::has('faild'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('faild') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
