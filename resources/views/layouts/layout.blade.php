
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/panha.css'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
{{--    <script src="{{ asset('js/app.js') }}"></script>--}}
{{--    @vite('resources/js/app.js')--}}
    @vite('resources/js/datepicker.js')

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
