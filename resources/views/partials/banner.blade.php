
<div class="banner">
    {!! Form::open(['route'=>'autocomplete','method' => 'GET','class'=>'form']) !!}
        <h2 class="form__title">Buscar a:</h2>
        <div class="form-group">
            <div class="input-group">
                {!! Form::text('search_user','',['class'=>'form-control','placeholder'=>'Nombre de la persona que buscas','id' => 'search_user']) !!}

                <div class="input-group-addon"><i class="glyphicon glyphicon-search"></i></div>
            </div>
        </div>
        <p>ó</p>
        <a href="{{route('missing.create')}}" class="btn btn-success"><i class="glyphicon glyphicon-user"></i> Registrar desaparecido</a>
    {!! Form::close() !!}
</div>

