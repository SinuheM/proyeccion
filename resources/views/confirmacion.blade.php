@extends('layout.proyeccion')
@section('Menu', '<li><a href="/solicitud">Solicitudes</a></li>
                  <li><a href="/nuevaSolicitud">Nueva solicitud</a></li>
                  <li><a href="/reporte">Reportes</a></li>')
@section('title', '- Confirmación')

@section('content')
    <section class="dashboard">
         @include('include.header')
         <div class="container">
            <div class="col-xs-2"></div>
            <div class="center col-xs-10">
                <div class="titlePage center">
                    <br>
                    <h2>La solicitud se registro con exito</h2><br>
                    <img src="img/img-smile-green.png" alt="">
                    <br><br>
                </div>
                <div class="confirmacion">
                    <h5>
                        <a href="/nuevaSolicitud">Registrar otra >></a>
                    </h5>
                    <h5>
                        <a href="/solicitud">Ver todas las solicitudes >></a>
                    </h5>
                    <h5>
                        <a href="/reporte">Crear un reporte >></a>
                    </h5>
                </div>
            </div>
        </div>
    </section>
@stop

@section('footer')
    @parent        
@stop