@extends('layout.proyeccion')
@section('title', ' - Solicitudes')
@section('Menu', '<li class="active"><a href="/solicitud">Solicitudes</a></li>
                    <li><a href="/nuevaSolicitud">Nueva solicitud</a></li>
                    <li><a href="">Reportes</a></li>')
@section('content')
    <section class="dashboard container">
    @include('include.header')
    <br>
        <table class="table table-bordered table-condensed table-striped" id="myTable">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Motivo</th>
                    <th>Monto</th>
                    <th>Facultad</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Motivo</th>
                    <th>Monto</th>
                    <th>Facultad</th>
                    <th>Fecha</th>
                </tr>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Motivo</th>
                    <th>Monto</th>
                    <th>Facultad</th>
                    <th>Fecha</th>
                </tr> 
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Motivo</th>
                    <th>Monto</th>
                    <th>Facultad</th>
                    <th>Fecha</th>
                </tr>

            </tbody>
        </table>
    </section>
    <script>
        $('#myTable').dataTable();
    </script>
@stop