
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/img/logo/sharesquare-logo.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/panha.css','resources/css/admin.css','resources/css/saovty.css'])
    @vite('resources/js/datepicker.js')
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
{{--    <script src="{{ asset('js/app.js') }}"></script>--}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b0e5d03480.js" crossorigin="anonymous"></script>

</head>

<body>
    <header class="sticky top-0 z-20">
        @include('layouts.header')
    </header>

    @yield('contents')

    <!-- Footer -->
    <footer>
        {{-- @include('layouts.footer') --}}
    </footer>
</body>

</html>
