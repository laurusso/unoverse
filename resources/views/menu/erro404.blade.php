<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/errors-pages.css') }} " type="text/css">
    <title>Página de erro</title>
</head>
<body class="body-404">
    <div class="erro">
        <img src="{!! asset('img/error-pages/erro404.png') !!}" class="erro404">
        <a href="{{route('menu.home')}}" class="link404">home</a>
    </div>
</body>
</html>




