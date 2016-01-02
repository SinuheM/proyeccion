<!DOCTYPE html>
<html>
<head lang="es">
        <!-- Cool behind-the-scenes stuff -->
        <meta charset="UTF-8" />
        <!-- Some mobile viewport optimization -->
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <!-- Make things a tad bit prettier on mobile IE -->
        <meta http-equiv="cleartype" content="on" />
        <!-- Names are important -->
        <title>Carrocochino - @yield('title')</title>

        <!-- Beauty is only a stylesheet deep -->
        {!!Html::style('css/normalize.css')!!}
        {!!Html::style('css/pikaday.css')!!}
        {!!Html::style('css/Cochino.css')!!}
        <!-- Beauty icon! -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
        @include('include.analytics')
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>
<body class="consumer dashboard">
    <div id="frameMenu" class="frameModal hide"></div>
    @section('header')
        @include('layout.header')
    @show

    @yield('content')
    
    @section('footer')
        @include('layout.footer')
    @show

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    {!!Html::script('js/vendor/jquery.js')!!}    
    {!!Html::script('js/vendor/pikaday.js')!!}
    {!!Html::script('js/main.js')!!}
</body>
</html>