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
                <div class="col-sm-12 text-center">
                    <img src="{{ asset($missing->photo) }}" alt="{{ $missing->first_name }}" class="img__missing">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>{{ $missing->first_name }} {{ $missing->last_name }}</h1>
                </div>
            </div>
            {{ Form::model($missing, ['route' => ['missing.update', $missing->id], 'method' => 'PUT', 'files' => true, 'class' => 'text-left']) }}
            <div class="row">
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="status">Estatus <span class="span__required">*</span></label>
                        <select class="form-control" name="status" id="status" value="{{ old('status') }}" required>
                            <option value="">-- Seleccione --</option>
                            <option value="desaparecido">desaparecido</option>
                            <option value="fallecido">fallecido</option>
                            <option value="vivo">vivo</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="last_location">última ubicación? <span class="span__required">*</span></label>
                        <textarea id="last_location" class="form-control" name="last_location" value="{{ old('last_location') }}" rows="5" required></textarea>
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
                        <textarea id="message_user" class="form-control" name="message_user" value="{{ old('message_user') }}" rows="5" required></textarea>
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
                <div class="col-sm-12 col-md-6 col-md-offset-3" style="margin-bottom: 0.8rem">
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