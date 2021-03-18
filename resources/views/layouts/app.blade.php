@php
$locale = App::getLocale();
@endphp

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://www.jqueryscript.net/demo/Carousel-Style-Content-Ticker-Plugin-with-jQuery-Carousel-Ticker/javascripts/jquery.carousel-ticker.js"></script>
    <script src="https://use.fontawesome.com/97a88bff0a.js"></script>
    <title>devWeb</title>
</head>

<body class="body">
    <header class="banner">
        <div class="menu-bar">
            <img class="menu-logo" src="/img/F&DLogo.bmp" alt="Logo">
            <ul class="menu">
                <li class="menu-items size-n">{{ __('text.inicio') }}</li>
                <li class="menu-items size-n">{{ __('text.nosotros') }}</li>
                <li class="menu-items size-n">{{ __('text.contacto') }}</li>
                <li class="text-white size-sm mt-1"><a class="menu-items" href="/">Es</a>|<a class="menu-items"
                        href="/en">En</a></li>
            </ul>
            <h1 class="Main-h1">Hacemos tu pagina Web</h1>
        </div>
    </header>
    @yield('content')
    <footer>
        <div style="height:200px; width:100%; background-color:black;">

        </div>
    </footer>
    <script type="text/javascript">

    </script>
    @stack('scripts')
</body>

</html>
