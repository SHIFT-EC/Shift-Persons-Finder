@extends('layout.template')
@section('title', 'Información sobre ' . $missing->first_name)

@section('content')
    <div class="row">
        <div class="col-sm-12 form__content">
            <h2>¿Tienes información sobre esta persona?</h2>
            <div class="row">
                <div class="col-sm-12 text-left">
                    @include('flash::message')
                    @include('errors.list')
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <img src="{{ asset($missing->photo) }}" alt="{{ $missing->first_name }}" class="img__missing">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <h1>{{ $missing->first_name }} {{ $missing->last_name }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <h5>Descripción</h5>
                    <p>{{ $missing->description }}</p>
                    <p>Registro creado por <b>{{ $missing->user->name }}</b></p>
                    <p>Estatus actual:
                        @if($missing->status == 'desaparecido')
                            <span class="label label-warning">{{ $missing->status }}</span>
                        @elseif($missing->status == 'vivo')
                            <span class="label label-success">{{ $missing->status }}</span>
                        @else
                            <span class="label label-danger">{{ $missing->status }}</span>
                        @endif
                    </p>
                </div>
            </div>
            {{ Form::model($missing, ['route' => ['missing.update', $missing->id], 'method' => 'PUT', 'files' => true, 'class' => 'text-left']) }}
            <div class="row">
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="status">Estatus <span class="span__required">*</span></label>
                        {{ Form::select('status', array('desaparecido' => 'Desaparecido', 'fallecido' => 'Fallecido', 'vivo' => 'Vivo'), null, ['placeholder' => 'Selecciona el estatus', 'class' => 'form-control', $missing->status != 'desaparecido' ? 'disabled' : '', 'required', 'id' => 'status']) }}
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="last_location">Última ubicación? <span class="span__required">*</span></label>
                        {{ Form::textarea('last_location', null, ['class' => 'form-control', 'id' => 'last_location', 'rows' => "5", 'required']) }}
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="photo">Foto <span class="span__required">*</span></label>
                        <input type="file" id="photo" name="photo" value="{{ old('photo') }}">
                        <p class="help-block">Proporciona únicamente fotos jpg o png.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="message_user">Mensaje adicional <span class="span__required">*</span></label>
                        {{ Form::textarea('message_user', null, ['class' => 'form-control', 'id' => 'message_user', 'rows' => "5", 'required']) }}
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-md-offset-3"><h3>Datos del creador del registro:</h3></div>
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="name">Tu nombre <span class="span__required">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="last_nameR">Tu apellido <span class="span__required">*</span></label>
                        <input type="text" class="form-control" name="last_nameR" value="{{ old('last_nameR') }}" id="last_nameR" required>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="email">Tu email <span class="span__required">*</span></label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" id="email" required>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="phone">Tu teléfono <span class="span__required">*</span></label>
                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="phone" required>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-md-offset-3 text-center" style="margin-bottom: 0.8rem">
                    <span class="label label-warning">Al enviar este formulario aceptas que estás proporcionando información real</span>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('scripts')

@endsection