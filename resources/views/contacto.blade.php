@extends('layout.proyeccion')
@section('title', ' - Nueva Solicitud')
@section('Menu', '<li><a href="/solicitud">Solicitudes</a></li>
                  <li class="active"><a href="">Nueva solicitud</a></li>
                  <li><a href="/reporte">Reportes</a></li>')
@section('content')
    <section class="dashboard">
        @include('include.header')
        <div class="container">
          <div class="center row">
            <div class="col-xs-1"></div>
            <div class="mitad col-xs-10">
              <div class="titlePage field-set">
                <h3>Registrar nueva solicitud</h3>
              </div>
              <div class="form form-horizontal">
                {!!Form::open(['route'=>'estudiante.store','method'=>'POST'])!!}    
                <fieldset class="fieldset">
                    <h4>Datos del alumno</h4><br>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','Código:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            {!!Form::text('code','',['class'=>'form-control','placeholder'=>'Ingresa el código del alumno', 'required'=>'true', 'id'=>'codeAlumno'])!!}
                        </div>
                    </div>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','DNI:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            {!!Form::number('dni','',['class'=>'form-control','placeholder'=>'Ingresa el DNI', 'required'=>'true', 'id'=>'dniAlumno'])!!}
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        {!!Form::label('','Nombre:',['class'=>'control-label col-xs-1'])!!}
                        <div class="col-xs-8">
                            {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa los apellidos y nombres', 'required'=>'true', 'id'=>'nameAlumno'])!!}
                        </div>
                    </div>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','Facultad:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            <select name="facu" id="facuAlumno" class="form-control" required>
                                @foreach($facultads as $facultad)
                                    @if($facultad->id!=1)
                                        <option value="{{$facultad->id}}">{{$facultad->nombre}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','Semestre:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            <select name="sem" id="sem" class="form-control">
                                <option value="I">1° Sem.</option>
                                <option value="II">2° Sem.</option>
                                <option value="III">3° Sem.</option>
                                <option value="IV">4° Sem.</option>
                                <option value="V">5° Sem.</option>
                                <option value="VI">6° Sem.</option>
                                <option value="VII">7° Sem.</option>
                                <option value="VIII">8° Sem.</option>
                                <option value="IX">9° Sem.</option>
                                <option value="X">10° Sem.</option>
                                <option value="XI">11° Sem.</option>
                                <option value="XII">12° Sem.</option>
                                <option value="XIII">13° Sem.</option>
                                <option value="XIV">14° Sem.</option>
                                <option value="Varios">Varios</option>
                            </select>
                            <span class="label label-danger hide-sem">Recuerde ingresar el actual semestre</span>
                        </div>                        
                    </div>
                    <div class="form-group col-xs-12">
                        {!!Form::label('','Domicilio:',['class'=>'control-label col-xs-1'])!!}
                        <div class="col-xs-8">
                            {!!Form::text('casa','Sin Registro',['class'=>'form-control','placeholder'=>'Ingresa la dirección del alumno', 'required'=>'true', 'id'=>'direccAlumno'])!!}
                        </div>
                    </div>
                    <div class="row"></div>
                    <h4>Datos de la solicitud</h4><br>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','Fecha:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            {!!Form::date('date',null,['class'=>'form-control', 'required'=>'true'])!!}
                        </div>
                    </div>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','Motivo:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            <select name="motive" id="motivoNew" class="form-control">
                                @foreach($motivos as $motivo)
                                    @if($motivo->id!=1)
                                        <option value="{{$motivo->id}}">{{$motivo->nombre}}</option>
                                    @endif
                                @endforeach                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','Monto:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            {!!Form::number('monto',"",['class'=>'form-control','placeholder'=>'Ingresa la cantidad en soles', 'required'=>'true',  'step'=>0.1])!!}
                        </div>
                    </div>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','Exped.:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            {!!Form::text('exp',null,['class'=>'form-control','placeholder'=>'Ingresa el numero de expediente'])!!}
                        </div>
                    </div>
                    <div class="form-group col-xs-12 hide-garante">
                        {!!Form::label('','Garante:',['class'=>'control-label col-xs-1'])!!}
                        <div class="col-xs-8">
                            {!!Form::text('garant',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del garante','id'=>'garante'])!!}
                        </div>
                    </div>
                    <br>
                </fieldset>
                <div class="form-group">
                    <br>
                    <div class="col-xs-4"></div>
                  {!!Form::submit('Registrar',['class'=>'btn btn-primary col-xs-4'])!!}
                </div>
                {!! Form::close() !!}
                <br><br>
                @include('alert.errors')
              </div>
            </div>
          </div>
        </div>
    </section>
@stop