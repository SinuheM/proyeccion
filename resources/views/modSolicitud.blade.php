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
                <h3>Modificar solicitud</h3>
              </div>
              <div class="form form-horizontal">
                {!!Form::model($solicitud,['route'=>['solicitud.update',$solicitud->id],'method'=>'PUT'])!!}
                <fieldset class="fieldset">
                    <h4>Datos del alumno</h4><br>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','Código:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            <?php $codigo  = $estudiante->codigo ?>
                            {!!Form::text('code', $codigo ,['class'=>'form-control','placeholder'=>'Escriba el código del alumno', 'required'=>'true', 'id'=>'codeAlumno', 'disabled'=>'true'])!!}
                        </div>
                    </div>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','DNI:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            <?php $dni  = $estudiante->dni ?>
                            {!!Form::number('dni', $dni ,['class'=>'form-control','placeholder'=>'Escriba el DNI', 'required'=>'true', 'id'=>'dniAlumno'])!!}
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        {!!Form::label('','Nombre:',['class'=>'control-label col-xs-1'])!!}
                        <div class="col-xs-8">
                            <?php $nombre  = $estudiante->nombre ?>
                            {!!Form::text('name', $nombre ,['class'=>'form-control','placeholder'=>'Escriba los apellidos y nombres', 'required'=>'true', 'id'=>'nameAlumno'])!!}
                        </div>
                    </div>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','Facultad:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            <select name="facu" id="facuAlumno" class="form-control" required>
                                <?php $facultadId  = $estudiante->facultad_id ?>
                                @foreach($facultads as $facultad)
                                    @if($facultad->id!=1)
                                        @if($facultad->id === $facultadId)
                                            <option value="{{$facultad->id}}" selected>{{$facultad->nombre}}</option>
                                        @else
                                            <option value="{{$facultad->id}}">{{$facultad->nombre}}</option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','Semestre:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            <select name="sem" id="sem" class="form-control">
                                <?php $semestre  = $solicitud->semestre ?>
                                @if($semestre==="Varios")
                                    <option value="Varios" selected>Varios</option>
                                @elseif($semestre=="I")
                                    <option value="I" selected>1° Sem.</option>
                                @elseif($semestre=="II")
                                    <option value="II" selected>2° Sem.</option>
                                @elseif($semestre=="III")
                                    <option value="III" selected>3° Sem.</option>
                                @elseif($semestre=="IV")
                                    <option value="IV" selected>4° Sem.</option>
                                @elseif($semestre=="V")
                                    <option value="V" selected>5 Sem.</option>
                                @elseif($semestre=="VI")
                                    <option value="VI" selected>6 Sem.</option>
                                @elseif($semestre=="VII")
                                    <option value="VII" selected>7 Sem.</option>
                                @elseif($semestre=="VIII")
                                    <option value="VIII" selected>8 Sem.</option>
                                @elseif($semestre=="IX")
                                    <option value="IX" selected>9° Sem.</option>
                                @elseif($semestre=="X")
                                    <option value="X" selected>10° Sem.</option>
                                @elseif($semestre=="XI")
                                    <option value="XI" selected>11° Sem.</option>
                                @elseif($semestre=="XII")
                                    <option value="XII" selected>12° Sem.</option>
                                @elseif($semestre=="XIII")
                                    <option value="XIII" selected>13° Sem.</option>
                                @elseif($semestre=="XIV")
                                    <option value="XIV" selected>14° Sem.</option>
                                @endif

                                    <option value="I">1° Sem.</option>
                                    <option value="II">2° Sem.</option>
                                    <option value="III">3° Sem.</option>
                                    <option value="IV">4° Sem.</option>
                                    <option value="V">5 Sem.</option>
                                    <option value="VI">6 Sem.</option>
                                    <option value="VII">7 Sem.</option>
                                    <option value="VIII">8 Sem.</option>
                                    <option value="IX">9° Sem.</option>
                                    <option value="X">10° Sem.</option>
                                    <option value="XI">11° Sem.</option>
                                    <option value="XII">12° Sem.</option>
                                    <option value="XIII">13° Sem.</option>
                                    <option value="XIV">14° Sem.</option>
                                    <option value="Varios">Varios</option>
                            </select>
                            <span class="label label-danger hide-sem">Recuerde Escribar el actual semestre</span>
                        </div>                        
                    </div>
                    <div class="form-group col-xs-12">
                        {!!Form::label('','Domicilio:',['class'=>'control-label col-xs-1'])!!}
                        <div class="col-xs-8">
                            <?php $domicilio  = $estudiante->domicilio ?>
                            {!!Form::text('casa', $domicilio ,['class'=>'form-control','placeholder'=>'Escriba la dirección del alumno', 'id'=>'direccAlumno'])!!}
                        </div>
                    </div>
                    <div class="row"></div>
                    <h4>Datos de la solicitud</h4><br>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','Fecha:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            <?php $fecha  = $solicitud->fecha ?>
                            {!!Form::date('date',$fecha,['class'=>'form-control', 'required'=>'true'])!!}
                        </div>
                    </div>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','Motivo:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            <select name="motive" id="motivoNew" class="form-control">
                                <?php $motivoId  = $solicitud->motivo_id ?>
                                @foreach($motivos as $motivo)
                                    @if($motivo->id!=1)
                                        @if($motivoId === $motivo->id)
                                            <option value="{{$motivo->id}}" selected>{{$motivo->nombre}}</option>
                                        @else
                                            <option value="{{$motivo->id}}">{{$motivo->nombre}}</option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','Monto:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            <?php $monto  = $solicitud->monto ?>
                            {!!Form::number('monto',$monto,['class'=>'form-control','placeholder'=>'Escriba la cantidad', 'required'=>'true'])!!}
                        </div>
                    </div>
                    <div class="form-group col-xs-6">
                        {!!Form::label('','Exped.:',['class'=>'control-label col-xs-2'])!!}
                        <div class="col-xs-8">
                            <?php $expediente  = $solicitud->expediente ?>
                            {!!Form::text('exp',$expediente,['class'=>'form-control','placeholder'=>'Escriba el numero de expediente'])!!}
                        </div>
                    </div>

                    @if($motivoId == 8)
                        <div class="form-group col-xs-12 hide-garante" style="display: block;">
                    @else
                        <div class="form-group col-xs-12 hide-garante">
                    @endif
                        {!!Form::label('','Garante:',['class'=>'control-label col-xs-1'])!!}
                        <div class="col-xs-8">
                            <?php $garantiza  = $solicitud->garantiza ?>
                            {!!Form::text('garant',$garantiza,['class'=>'form-control','placeholder'=>'Escriba el nombre del garante','id'=>'garante'])!!}
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        {!!Form::label('','Estado:',['class'=>'control-label col-xs-1'])!!}
                        <div class="col-xs-8">
                            <?php $informe  = $solicitud->informe ?>
                            <select name="informe" id="motivoNew" class="form-control">
                                @if($informe=="Deudor")
                                    <option value="Deudor" selected>Deudor</option>
                                    <option value="Observado">Observado</option>
                                    <option value="No deudor">No deudor</option>
                                @elseif($informe=="Observado")
                                    <option value="Deudor">Deudor</option>
                                    <option value="Observado" selected>Observado</option>
                                    <option value="No deudor">No deudor</option>
                                @else
                                    <option value="Deudor">Deudor</option>
                                    <option value="Observado">Observado</option>
                                    <option value="No deudor" selected>No deudor</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        {!!Form::label('','Observación:',['class'=>'control-label col-xs-1'])!!}
                        <div class="col-xs-8" style="margin-left: 30px;">
                            <?php $observacion  = $solicitud->observacion ?>
                            {!!Form::textarea('observacion',$observacion,['class'=>'form-control','placeholder'=>'Escriba aqui si existe alguna observacion','id'=>'observacion','cols'=>'40', 'rows'=>'5'])!!}
                        </div>
                    </div>
                    <br>
                </fieldset>
                <br>
                <div class="form-group">
                    <div class="col-xs-5"></div>
                    <a href="/solicitud" class="btn btn-default col-xs-2" style="margin-right: 30px;">Cancelar</a>
                    
                    {!!Form::submit('Actualizar',['class'=>'btn btn-primary col-xs-2'])!!}
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