<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Kemitraan - BrewCycle</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white antialiased">


    <main>
        @include('components.partnership-hero')
        @include('components.partnership-types')
        @include('components.partnership-faq')
    </main>

    @include('components.footer')

</body>

</html>
