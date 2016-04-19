@extends('layout.template')
@section('title','Crear Registro')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-left">Identifica a la persona desaparecida</h2>
            {{ Form::open(['route' => 'create-missing.store', 'method' => 'POST', 'files' => true, 'class' => 'text-left']) }}
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="first_name">Nombre</label>
                            <input type="text" class="form-control" id="first_name">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="last_name">Apellido</label>
                            <input type="text" class="form-control" id="last_name">
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
                                <option>-- Seleccione --</option>
                                <option value="Mesculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputFile">Género</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-default">Crear Registro</button>
            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('scripts')

@endsection