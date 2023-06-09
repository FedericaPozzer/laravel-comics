<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env("APP_NAME") }} </title>

    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')

    {{-- bs icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

    <header>

        @include("partials.header")

    </header>


    <main>
        @yield("main")
    </main>


    <footer>

        @include("partials.footer")

    </footer>
    
</body>
</html>