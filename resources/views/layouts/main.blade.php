<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME', 'Movie')}} | @yield('title-page', 'Home')</title>

    {{-- Vite --}}
    @vite('resources/js/app.js')
</head>
<body>
    <main>
        @yield('section-movies')
    </main>
</body>
</html>