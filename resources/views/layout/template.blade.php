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
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <div class="header">
                    <img src="/images/logo_ecu_911.png" alt="Logo 911">
                    <a href="#">Home</a>
                    <img src="/images/logo_skype.png" alt="Skyoe">
                </div>
            </div>
        </div>
    </header>

    {{-- =======================
         START CONTENT
         ======================= --}}
    <div class="container-fluid">
        {{-- App Content --}}
        @yield('content')
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    @yield('scripts')

</body>
</html>