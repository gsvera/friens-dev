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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/97a88bff0a.js"></script>
    <title>devWeb</title>
</head>
<body class="body">
    <header class="banner">
        <div class="menu-bar">
            <img class="menu-logo" src="/img/devweb.svg" alt="Logo">
            <ul class="menu">
                <li class="menu-items size-n">{{__('text.projectos')}}</li>
                <li class="menu-items size-n">{{__('text.nosotros')}}</li>
                <li class="menu-items size-n">{{__('text.contacto')}}</li>
                <li class="text-white size-sm mt-1"><a class="menu-items" href="/">ES</a>|<a class="menu-items" href="/en">EN</a></li>
            </ul>
        </div>
    </header>
    @yield('content')
    <footer></footer>
    <script type="text/javascript">

    </script>
    @stack('scrips')
</body>
</html>