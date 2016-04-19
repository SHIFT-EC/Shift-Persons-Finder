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
                    <h5><i>Descripción:</i></h5>
                    <p>{{ $missing->description }}</p>
                </div>
                <div class="col-sm-12 col-md-3 col-md-offset-3">
                    <p>Registro creado por: <b>{{ $missing->user->name }}</b></p>
                </div>
                <div class="col-sm-12 col-md-3">
                    <p>Teléfono: <a href="tel:{{$missing->user->phone}}"> <span class="label label-success">{{ $missing->user->phone }}</span></a></p>
                </div>
                <div class="col-sm-12 col-md-3 col-md-offset-3">
                    <p>Mail: <a href="mailto:{{$missing->user->email}}"> <span class="label label-success">{{ $missing->user->email }}</span></a></p>
                </div>
                <div class="col-sm-12 col-md-3">
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
                        <label for="photo">Foto</label>
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
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="last_location">Para actualizar la información ingresa el email de contacto que nos diste cuanto creaste el registro <span class="span__required">*</span></label>
                        {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) }}
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-md-offset-3"><h4>Tienes información? escribenos a través de los comentario y ponte en contacto con la persona que busca información:</h4></div>
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <div id="disqus_thread"></div>
                    <script>
                        /**
                         * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                         */
                        /*
                         var disqus_config = function () {
                         this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
                         this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                         };
                         */
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');

                            s.src = '//emergenciaecuador.disqus.com/embed.js';

                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                </div>
                <!--<div class="col-sm-12 col-md-6 col-md-offset-3 text-center" style="margin-bottom: 0.8rem; margin-top: 0.8rem">
                    <span class="label label-warning">Al enviar este formulario aceptas que estás proporcionando información real</span>
                </div>-->
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('scripts')
    <script id="dsq-count-scr" src="//emergenciaecuador.disqus.com/count.js" async></script>
@endsection