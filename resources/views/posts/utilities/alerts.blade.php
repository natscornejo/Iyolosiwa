@if(Session::has('Exito'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><h3>¡Exito!</h3></strong> <p>{{Session::get('Exito')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        	<span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(Session::has('Borrado'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong><h3>¡Eliminado!</h3></strong> <p>{{Session::get('Borrado')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        	<span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


@if(Session::has('Actulizado'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><h3>¡Actulizado!</h3></strong> <p>{{Session::get('Actulizado')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        	<span aria-hidden="true">&times;</span>
        </button>

    </div>
@endif
