@extends('layout.template')

@section('title','home')

@section('content')
    <h2 class="title-persons">Últimas personas agregadas</h2>
    <div class="row">
        <div class="col-sm-12">

            {!! Form::open([''=>'','method'=>'post', 'class'=> 'form-inline text-right filter-persons']) !!}
                <div class="form-group">
                    <select class="form-control" name="status" id="">
                        <option value="">Estado</option>
                        <option value="">Estado uno</option>
                        <option value="">Estado dos</option>
                        <option value="">Estado tres</option>
                    </select>

                </div>
                <div class="form-group">
                    <select class="form-control" name="age" id="">
                        <option value="">Edad</option>
                        <option value="">Edad uno</option>
                        <option value="">Edad dos</option>
                        <option value="">Edad tres</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control" name="gender" id="">
                        <option value="">gender</option>
                        <option value="">Masculino</option>
                        <option value="">Femenino</option>
                    </select>
                </div>

            {!! Form::close() !!}

            <div class="container-persons">
                <div class="person">
                    <img class="person__photo" src="http://lorempixel.com/150/150/people/1" alt="">
                    <ul class="person__data">
                        <li>Nombre: Edwin</li>
                        <li>Apellido:Gustavo</li>
                        <li>Edad: 28</li>
                        <li>Ciudad: Quito</li>
                        <li>Estado: <span class="label label-danger">Desaparecido</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary person__button">
                        <i class="glyphicon glyphicon-eye-open"></i> Ver
                    </a>
                </div>

                <div class="person">
                    <img class="person__photo" src="http://lorempixel.com/150/150/people/1" alt="">
                    <ul class="person__data">
                        <li>Nombre: Edwin</li>
                        <li>Apellido:Gustavo</li>
                        <li>Edad: 28</li>
                        <li>Ciudad: Quito</li>
                        <li>Estado: <span class="label label-danger">Desaparecido</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary person__button">
                        <i class="glyphicon glyphicon-eye-open"></i> Ver
                    </a>
                </div>
                <div class="person">
                    <img class="person__photo" src="http://lorempixel.com/150/150/people/2" alt="">
                    <ul class="person__data">
                        <li>Nombre: Edwin</li>
                        <li>Apellido:Gustavo</li>
                        <li>Edad: 28</li>
                        <li>Ciudad: Quito</li>
                        <li>Estado: <span class="label label-danger">Desaparecido</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary person__button">
                        <i class="glyphicon glyphicon-eye-open"></i> Ver
                    </a>
                </div>
                <div class="person">
                    <img class="person__photo" src="http://lorempixel.com/150/150/people/3" alt="">
                    <ul class="person__data">
                        <li>Nombre: Edwin</li>
                        <li>Apellido:Gustavo</li>
                        <li>Edad: 28</li>
                        <li>Ciudad: Quito</li>
                        <li>Estado: <span class="label label-danger">Desaparecido</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary person__button">
                        <i class="glyphicon glyphicon-eye-open"></i> Ver
                    </a>
                </div>
                <div class="person">
                    <img class="person__photo" src="http://lorempixel.com/150/150/people/4" alt="">
                    <ul class="person__data">
                        <li>Nombre: Edwin</li>
                        <li>Apellido:Gustavo</li>
                        <li>Edad: 28</li>
                        <li>Ciudad: Quito</li>
                        <li>Estado: <span class="label label-danger">Desaparecido</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary person__button">
                        <i class="glyphicon glyphicon-eye-open"></i> Ver
                    </a>
                </div>
                <div class="person">
                    <img class="person__photo" src="http://lorempixel.com/150/150/people/5" alt="">
                    <ul class="person__data">
                        <li>Nombre: Edwin</li>
                        <li>Apellido:Gustavo</li>
                        <li>Edad: 28</li>
                        <li>Ciudad: Quito</li>
                        <li>Estado: <span class="label label-danger">Desaparecido</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary person__button">
                        <i class="glyphicon glyphicon-eye-open"></i> Ver
                    </a>
                </div>
                <div class="person">
                    <img class="person__photo" src="http://lorempixel.com/150/150/people/6" alt="">
                    <ul class="person__data">
                        <li>Nombre: Edwin</li>
                        <li>Apellido:Gustavo</li>
                        <li>Edad: 28</li>
                        <li>Ciudad: Quito</li>
                        <li>Estado: <span class="label label-danger">Desaparecido</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary person__button">
                        <i class="glyphicon glyphicon-eye-open"></i> Ver
                    </a>
                </div>
                <div class="person">
                    <img class="person__photo" src="http://lorempixel.com/150/150/people/7" alt="">
                    <ul class="person__data">
                        <li>Nombre: Edwin</li>
                        <li>Apellido:Gustavo</li>
                        <li>Edad: 28</li>
                        <li>Ciudad: Quito</li>
                        <li>Estado: <span class="label label-danger">Desaparecido</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary person__button">
                        <i class="glyphicon glyphicon-eye-open"></i> Ver
                    </a>
                </div>
                <div class="person">
                    <img class="person__photo" src="http://lorempixel.com/150/150/people/8" alt="">
                    <ul class="person__data">
                        <li>Nombre: Edwin</li>
                        <li>Apellido:Gustavo</li>
                        <li>Edad: 28</li>
                        <li>Ciudad: Quito</li>
                        <li>Estado: <span class="label label-danger">Desaparecido</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary person__button">
                        <i class="glyphicon glyphicon-eye-open"></i> Ver
                    </a>
                </div>
                <div class="person">
                    <img class="person__photo" src="http://lorempixel.com/150/150/people/9" alt="">
                    <ul class="person__data">
                        <li>Nombre: Edwin</li>
                        <li>Apellido:Gustavo</li>
                        <li>Edad: 28</li>
                        <li>Ciudad: Quito</li>
                        <li>Estado: <span class="label label-danger">Desaparecido</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary person__button">
                        <i class="glyphicon glyphicon-eye-open"></i> Ver
                    </a>
                </div>
                <div class="person">
                    <img class="person__photo" src="http://lorempixel.com/150/150/people/1" alt="">
                    <ul class="person__data">
                        <li>Nombre: Edwin</li>
                        <li>Apellido:Gustavo</li>
                        <li>Edad: 28</li>
                        <li>Ciudad: Quito</li>
                        <li>Estado: <span class="label label-danger">Desaparecido</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary person__button">
                        <i class="glyphicon glyphicon-eye-open"></i> Ver
                    </a>
                </div>
                <div class="person">
                    <img class="person__photo" src="http://lorempixel.com/150/150/people/2" alt="">
                    <ul class="person__data">
                        <li>Nombre: Edwin</li>
                        <li>Apellido:Gustavo</li>
                        <li>Edad: 28</li>
                        <li>Ciudad: Quito</li>
                        <li>Estado: <span class="label label-danger">Desaparecido</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary person__button">
                        <i class="glyphicon glyphicon-eye-open"></i> Ver
                    </a>
                </div>
                <div class="person">
                    <img class="person__photo" src="http://lorempixel.com/150/150/people/4" alt="">
                    <ul class="person__data">
                        <li>Nombre: Edwin</li>
                        <li>Apellido:Gustavo</li>
                        <li>Edad: 28</li>
                        <li>Ciudad: Quito</li>
                        <li>Estado: <span class="label label-danger">Desaparecido</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary person__button">
                        <i class="glyphicon glyphicon-eye-open"></i> Ver
                    </a>
                </div>

            </div>{{--FIN CONTAINER PERSON--}}

            {{--PAGINATE---}}
            <nav>
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>{{--FIN COLUMNS--}}
    </div>{{--FIN ROW--}}
@endsection

