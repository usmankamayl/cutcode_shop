<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite([ 'resources/css/app.css', 'resources/sass/main.sass', 'resources/js/app.js',])
    </head>
    <body class="antialiased">
        <h1 class="text-green-500 text-center mt-5">Hello world!</h1>
        <p class="text-center mt-lg-1 text-red-400">Юнус Юсуп</p>
    </body>
</html>
