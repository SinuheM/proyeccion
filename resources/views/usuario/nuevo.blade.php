@extends('layout.main')
@section('content')
    <section>
      <div class="center">
        <div class="titlePage">
          <h2>Nuevo Usuario</h2>
        </div>
        <div class="pedidoDetalle newPedido">
            {!!Form::open(['route'=>'user.store','method'=>'POST'])!!}    
            <div class="formGroup">
                {!!Form::label('nombre','Nombre:')!!}
                {!!Form::text('nombre',null,['class'=>'userTxt','placeholder'=>'Ingresa tu usuario'])!!}
            </div>
            <div class="formGroup">
                {!!Form::label('email','Email:')!!}
                {!!Form::text('email',null,['class'=>'userTxt','placeholder'=>'Ingresa tu email'])!!}
            </div>
            <div class="formGroup">
                {!!Form::label('contrasena','Contraseña:')!!}
                {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña'])!!}
            </div>
            <div class="formGroup">
                {!!Form::label('Dni','DNI:')!!}
                {!!Form::text('dni',null,['class'=>'userTxt','placeholder'=>'Ingresa tu DNI'])!!}
            </div>
            <div class="formGroup">
                {!!Form::label('Telefono','Telefono:')!!}
                {!!Form::text('telefono',null,['class'=>'userTxt','placeholder'=>'Ingresa tu celular'])!!}
            </div>
            <div class="formGroup">
                {!!Form::label('Remember','Clave para recuperar tu password:')!!}
                {!!Form::text('remember_token',null,['class'=>'userTxt','placeholder'=>'...'])!!}
            </div>
            {!!Form::submit('Iniciar',['class'=>'btn'])!!}
          {!! Form::close() !!}
          @include('alert.errors')
        </div>
      </div>
    </section>
    
@stop