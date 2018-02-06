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
        <title>Proyección - @yield('title')</title>

        <!-- Beauty is only a stylesheet deep -->
        {!!Html::style('https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css')!!}
        {!!Html::style('css/normalize.css')!!}
        {!!Html::style('css/Cochino.css')!!}
        {!!Html::style('css/back.css')!!}
        
        <!-- Beauty icon! -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
        
</head>
<body class="consumer dashboard">
    @section('header')
        @include('layout.header')
    @show

    @yield('content')
    
    @section('footer')
        @include('layout.footerBack')
    @show

</body>
</html>