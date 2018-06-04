<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} : @yield('title')</title>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/main.css') }}" />
    
</head>
<!-- APP_NAME=FigueAuCoin dans le .env
    php artisan make:controller NavigationController
-->
<body>
    <header>
    @include('parts/header')
    </header> 
    <main>
        <aside> 
        @include('parts/aside')
        </aside>
        @yield('content')        
        <footer>
        @include('parts/footer')
        </footer>
    </main>
</body>
</html>