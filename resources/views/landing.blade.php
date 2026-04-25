<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brew Cycle - Landing Page</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white antialiased">

    @include('components.navbar')

    <main>
        @include('components.hero')
        @include('components.about')
        @include('components.product')
        @include('components.keunggulan')
        @include('components.invite')
        @include('components.partner')
    </main>

    @include('components.footer')

</body>

</html>