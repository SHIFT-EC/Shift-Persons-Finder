@if ($errors->any())
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Corrige los siguientes errores!</h4>
        @foreach( $errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif