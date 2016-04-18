<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
    <meta name="description" content="Emergencias ecuador">
    <meta name="author" content="Shift">
    <link rel="shortcut icon" href="favicon.ico">

    {{-- CSS Main --}}
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
</head>
<body>

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