@extends('layout.template')
@section('title','Crear Registro')

@section('content')
    <div class="row">
        <div class="col-sm-12 form__content">
            <h2 class="text-left">Identifica a la persona desaparecida</h2>
            {{ Form::open(['route' => 'create-missing.store', 'method' => 'POST', 'files' => true, 'class' => 'text-left']) }}
                <div class="row">
                    <div class="col-sm-12"><h3>Datos Básicos:</h3></div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="first_name">Nombre</label>
                            <input type="text" class="form-control" name="first_name" id="first_name">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="last_name">Apellido</label>
                            <input type="text" class="form-control" name="last_name" id="last_name">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="age">Edad</label>
                            <input type="text" class="form-control" name="age" id="age">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="gender">Género</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="">-- Seleccione --</option>
                                <option value="Mesculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="address">Lugar Origen</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Ej: Pedernales">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="last_location">Útimo lugar conocido</label>
                            <input type="text" class="form-control" name="last_location" id="last_location" placeholder="Ej: Portoviejo">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="photo">Foto</label>
                            <input type="file" id="photo" name="photo">
                            <p class="help-block">Proporciona únicamente fotos jpg o png.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="gender">Descripción</label>
                            <textarea id="gender" class="form-control" name="gender" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12"><h3>Datos del creador del registro:</h3></div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="name">Tu nombre</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="last_nameR">Tu apellido</label>
                            <input type="text" class="form-control" name="last_nameR" id="last_nameR">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="email">Tu email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="phone">Tu teléfono</label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="policy"> Acepto la política
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