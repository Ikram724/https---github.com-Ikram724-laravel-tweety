<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite([ 'resources/css/app.css'])



</head>

<body>
    <div id="app">
        <section class="px-8 py-4 mb-4">
            <header class="container mx-auto">
                <h1>
                    <img src="https://raw.githubusercontent.com/laracasts/Tweety/6b1b30e7fba003d08e0274f7f8fc6a804c9bfe7b/public/images/logo.svg" alt="">
                </h1>

            </header>
        </section>


        {{ $slot }}
    </div>
    <script src="http://unpkg.com/turbolinks"></script>
</body>

</html>