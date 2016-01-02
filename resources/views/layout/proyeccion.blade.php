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
        <title>CAFOBE @yield('title')</title>

        <!-- Beauty is only a stylesheet deep -->
        {!!Html::style('css/normalize.css')!!}
        {!!Html::style('css/jquery.dataTables.min.css')!!}
        {!!Html::style('css/bootstrap.min.css')!!}
        {!!Html::style('css/style.css')!!}
        <!-- Beauty icon! -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
        
</head>
<body class="consumer dashboard">
    {!!Html::script('js/vendor/jquery.js')!!}    
    <script type="text/javascript" src="js/vendor/dataTables.min.js"></script>
    {!!Html::script('js/main.js')!!}
    {!!Html::script('js/vendor/bootstrap.min.js')!!}
    @yield('content')
</body>
</html>