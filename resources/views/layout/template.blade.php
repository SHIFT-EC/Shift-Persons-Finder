<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
    <meta name="description" content="Emergencias ecuador">
    <meta name="author" content="Shift Latam">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <meta content='Emergencias Ecuador' property='og:site_name'/>
    <meta content='Shiflatam' property='og:author'/>
    <meta content='Plataforma para poder encontrar a personas desaparecidas por el terremoto de Ecuador' property='og:description'/>
    <meta content='https://emergenciaecuador.com/images/portada_facebook.jpg' property='og:image'/>

    {{-- CSS--}}
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">

    {{-- FONTS --}}
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,400italic,600italic' rel='stylesheet' type='text/css'>

    {{--ICONS--}}
    <link href="https://file.myfontastic.com/rR5TjJ6V9aDs6jE3PxLZJZ/icons.css" rel="stylesheet">

</head>
<body>

    @include('partials.networks')

    {{-- =======================
         HEADER
         ======================= --}}
    <header>

        <div class="header">

            <a href="{{ route('home') }}" class="header__logo">
                <img src="{{ asset('images/logo.png') }}" width="250" alt="Emergencia Ecuador">
            </a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary header__phones" data-toggle="modal" data-target="#myModal">
                <i class="glyphicon glyphicon-phone"></i>
                Números de Emergencia
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><strong>Números de emergencia</strong></h4>
                        </div>
                        <div class="modal-body text-justify">

                            <h4 class="text-center"><strong class="label label-info">911</strong></h4>
                            <h4 class="text-center"><strong class="label label-info">1800 apoyar</strong></h4>
                            <h4 class="text-center"><strong class="label label-info">Cruz Roja:  022582452 ext. 317</strong></h4>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div> <!-- Fin Modal -->


            <div class="header__skype">
                <a href="https://login.skype.com/login?client_id=578134&redirect_uri=https%3A%2F%2Fweb.skype.com%2F" target="_blank">
                    <img src="/images/logo_skype.png" alt="Skype">
                </a>
                <p>
                    Llamadas a skype gratis
                </p>
            </div>
        </div>
    </header> <!--./ FIN HEADER-->


    @if(Route::is('home'))
        {{--INICIO BANNER--}}
        @include('partials/banner')
    @endif

    {{-- =======================
         START CONTENT
         ======================= --}}
    <div class="container">
        {{-- App Content --}}
        @yield('content')
    </div>

    @if(Route::is('home'))
        {{--INICIO BANNER DONATION--}}
        @include('partials/banner-donation')
    @endif
    
    <footer>
        <div class="footer">
            <a target="_blank" href="http://shiftlatam.com">
                <img src="{{ asset('images/logo_shift.png') }}" alt="Logo Shiftlatam">
            </a>
            <a target="_blank" href="http://www.formaciongerencial.com/">
                <img src="{{ asset('images/logo_formacion.png') }}" alt="Logo formación gerencial">
            </a>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    @yield('scripts')

</body>
</html>