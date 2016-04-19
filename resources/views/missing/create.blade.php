@extends('layout.template')
@section('title','Crear Registro')

@section('content')
    <div class="row">
        <div class="col-sm-12 form__content">
            <h2 class="text-left">Identifica a la persona desaparecida</h2>
            <div class="row">
                <div class="col-sm-12 text-left">
                    @include('flash::message')
                    @include('errors.list')
                </div>
            </div>
            {{ Form::open(['route' => 'missing.store', 'method' => 'POST', 'files' => true, 'class' => 'text-left']) }}
                <div class="row">
                    <div class="col-sm-12"><h3>Datos Básicos:</h3></div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="first_name">Nombre <span class="span__required">*</span></label>
                            <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="last_name">Apellido <span class="span__required">*</span></label>
                            <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="age">Edad <span class="span__required">*</span></label>
                            <input type="text" class="form-control" name="age" id="age" value="{{ old('age') }}" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="gender">Género <span class="span__required">*</span></label>
                            <select class="form-control" name="gender" id="gender" value="{{ old('gender') }}" required>
                                <option value="">-- Seleccione --</option>
                                <option value="Mesculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="address">Ciudad Origen <span class="span__required">*</span></label>
                            <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}" placeholder="Ej: Pedernales" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="last_location">Útimo lugar conocido <span class="span__required">*</span></label>
                            <input type="text" class="form-control" name="last_location" id="last_location" value="{{ old('last_location') }}" placeholder="Ej: Portoviejo" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="photo">Foto <span class="span__required">*</span></label>
                            <input type="file" id="photo" name="photo" value="{{ old('photo') }}">
                            <p class="help-block">Proporciona únicamente fotos jpg o png.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="description">Descripción <span class="span__required">*</span></label>
                            <textarea id="description" class="form-control" name="description" value="{{ old('description') }}" rows="5" required></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12"><h3>Datos del creador del registro:</h3></div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="name">Tu nombre <span class="span__required">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="last_nameR">Tu apellido <span class="span__required">*</span></label>
                            <input type="text" class="form-control" name="last_nameR" value="{{ old('last_nameR') }}" id="last_nameR" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="email">Tu email <span class="span__required">*</span></label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" id="email" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="phone">Tu teléfono <span class="span__required">*</span></label>
                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="phone" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="{{ old('policy') }}" name="policy"> Acepto la política
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Crear Registro</button>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('scripts')

@endsection