!<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Framework Web - Pertemuan 2</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <script src="{{ asset('js/bootstrap.min.js') }}" />
    </body>
</html>
