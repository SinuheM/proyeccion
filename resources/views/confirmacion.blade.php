@extends('layout.proyeccion')

@section('title', 'Gracias')

@section('content')
    <section>
        <div class="center">
            <div class="titlePage center">
                <h2>La solicitud se registro</h2>
                <h3>
                <a href="/nuevaSolicitud">Registrar otra</a>
                </h3>
            </div>
            <div class="confirmacion">
                <img src="img/img-smile-green.png" alt="">
                
                <br>
                <p>
                    No olvides seguirnos en nuestras redes sociales
                    <br>
                    <a href="https://www.facebook.com/etoymorido">
                        <img src="img/facebook.png" alt="Twitter"></img>
                    </a>
                </p>
            </div>
        </div>
    </section>
@stop

@section('footer')
    @parent        
@stop