@extends('layout.proyeccion')
@section('title', ' - Login')
@section('content')
    <section class="login container">
      <div class="center row">
        <div class="col-xs-4"></div>
        <div class="mitad col-xs-4">
          <div class="titlePage text-center">
            <br><br>
            <img src="img/chulluncp.png" alt="Logo Uncp">
            <br><br>
            <h2 class="loginTitle">INICIAR SESIÓN</h2>
            <br>
          </div>
          <div class="Form">
            {!!Form::open(['route'=>'log.store','method'=>'POST'])!!}    
              <div class="form-group">
                  {!!Form::label('email','Usuario:')!!}
                  {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa su usuario'])!!}
              </div>
              <div class="form-group">
                  {!!Form::label('password','Contraseña:')!!}
                  {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa su contraseña'])!!}
              </div>
              {!!Form::submit('Iniciar Sesión',['class'=>'btn btn-primary'])!!}
            {!! Form::close() !!}
            @include('alert.errors')
          </div>
        </div>
      </div>
    </section>
@stop