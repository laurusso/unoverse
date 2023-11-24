<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/errors-pages.css') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('css/stylelarge.css') }} " type="text/css">
    <title>Página de erro</title>
</head>

<body class="body-500">
    <div class="erro espaco">
        <img src="{!! asset('img/error-pages/erro500.png') !!}" class="erro500 ">
        <a href="{{route('menu.home')}}" class="link500">home</a>
    </div>
</body>

</html>