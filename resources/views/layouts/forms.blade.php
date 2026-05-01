<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brew Cycle - Landing Page</title>

    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white antialiased">

    @include('layouts.navbar')

    @yield('content')

    @include('components.footer')
</body>
</html>