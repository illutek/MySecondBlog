@if (Session::has('succes'))
    <div class="alert alert-success">
        <strong>Succes: </strong> {{ Session::get('succes') }}
    </div>
@endif

@if (Session::has('deleted'))
    <div class="alert alert-danger">
        <strong>Succes: </strong> {{ Session::get('deleted') }}
    </div>
@endif