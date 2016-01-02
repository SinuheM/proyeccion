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

        <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>        
        {!!Html::style('css/normalize.css')!!}
        {!!Html::style('css/Cochino.css')!!}
        {!!Html::style('css/style.css')!!}
        <!-- Beauty icon! -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
        @include('include.analytics')
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>
<body class="landing">
    @section('header')
        
    @show
    
    @yield('content')
    
    @section('footer')
        @include('layout.footerLand')
    @show
    <script type="text/javascript">
        function Cookie(cvalue) {
            sessionStorage.setItem("pedido", cvalue);
        }
    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/vendor/jquery.js"></script>
    <script type="text/javascript" src="js/vendor/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>