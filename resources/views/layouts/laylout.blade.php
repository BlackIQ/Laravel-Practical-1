<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel app</title>
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/mdb.min.css" rel="stylesheet">
    </head>
    <body class="">
        <div class="container">
            @yield('content')
        </div>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/script.js"></script>
        <script src="/js/mdb.min.js"></script>
    </body>
</html>
