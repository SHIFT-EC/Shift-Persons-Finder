<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
    <meta name="description" content="Emergencias ecuador">
    <meta name="author" content="Shift">
    <link rel="shortcut icon" href="favicon.ico">

    {{-- CSS--}}
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">

    {{-- FONTS --}}
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,400italic,600italic' rel='stylesheet' type='text/css'>
</head>
<body>

    {{-- =======================
         HEADER
         ======================= --}}
    <header>

        <div class="header">

            <a class=header__ecu href="http://www.ecu911.gob.ec/">
                <img src="/images/logo_ecu_911.png" alt="Logo 911">
            </a>

            {{--<a class="header__home" href="#"><i class="glyphicon glyphicon-home"></i> Inicio</a>--}}

            <div class="header__skype">
                <a href="http://sk.ype.ms/8Ecn5H">
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

        {{--INICIO BANNER DONATION--}}
        @include('partials/banner-donation')
    @endif

    {{-- =======================
         START CONTENT
         ======================= --}}
    <div class="container">
        {{-- App Content --}}
        @yield('content')
    </div>
    
    <footer>
        <div class="footer">
            <a target="_blank" href="http://shiftlatam.com">
                <img src="/images/logo_shift.png" alt="Logo Shiftlatam">
            </a>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    @yield('scripts')

</body>
</html>