@extends('layout.proyeccion')
@section('title', ' - Solicitudes')
@section('Menu', '<li class="active"><a href="">Solicitudes</a></li>
                    <li><a href="/nuevaSolicitud">Nueva solicitud</a></li>
                    <li><a href="/reporte">Reportes</a></li>')
@section('content')
    <section class="dashboard">
    @include('include.header')
    	<div class="container">
    		<div class="col-xs-1"></div>
    		<div class="mitad col-xs-10">
    			<div class="titlePage field-set">
	                <h3>Buscar alumno</h3>
	             </div>
	    		<div class="panel panel-default">
					<div class="panel-body">
		    			<div class="row">
				    		<div class="col-xs-5">
				    			<label for="codigo" class="col-xs-4">Código:</label>
				    			<div class="col-xs-8">
				    				<input type="text" id="codigo" name="codigo" class="form-control">
				    			</div>
				    		</div>
				    		<div class="col-xs-7">
					   			<label for="name" class="col-xs-4">Nombres y/o Apellidos:</label>
					    		<div class="col-xs-8">
					    			<input type="text" id="name" name="name" class="form-control">
					    		</div>
				    		</div>
				    	</div>
				    	<div class="row">
				    		<div class="col-xs-5">
				    			<label for="codigo" class="col-xs-4">Motivo</label>
				    			<div class="col-xs-8">
					    			<select name="motive" id="motive" class="form-control col-xs-8">
			                            @foreach($motivos as $motivo)
			                                <option value="{{$motivo->nombre}}">{{$motivo->nombre}}</option>
			                            @endforeach
			                        </select>
					    		</div>
				    		</div>
				    		<div class="col-xs-7">
				    			<label for="codigo" class="col-xs-4">Facultad</label>
				    			<div class="col-xs-8">
					    			<select name="facu" id="facu" class="form-control" class="col-xs-8">
			                            @foreach($facultads as $facultad)
			                                <option value="{{$facultad->nombre}}">{{$facultad->nombre}}</option>
			                            @endforeach
			                        </select>
					    		</div>
				   			</div>
				   		</div>
					</div>
	    		</div>
    		</div>
    	</div>
    	<div class="container">
    		<div class="col-xs-1"></div>
    		<div class="col-xs-10">
		        <table class="table table-bordered table-condensed table-striped alumno" id="myTable">
		            <thead>
		                <tr>
		                    <th>Código</th>
		                    <th>Nombre</th>
		                    <th>Motivo</th>
		                    <th>Monto</th>
		                    <th>Facultad</th>
		                    <th>Fecha</th>
		                    <th>Estado</th>
		                </tr>
		            </thead>
		            <tbody>
		                
		            </tbody>
		        </table>
    		</div>
    	</div>
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
				  Launch demo modal
				</button>
    </section>

	<section class="Modal">
		<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h3 class="modal-title" id="myModalLabel">Datos de solicitud</h3>
				      </div>
				      <div class="modal-body showEstudent">
				        <fieldset class="fieldset">
		                    <h4>Datos del alumno</h4><br>
		                    <div class="form-group col-xs-6">
		                        {!!Form::label('','Código:',['class'=>'control-label col-xs-4'])!!}
		                        <div class="col-xs-8">
		                            <span>2011100831L</span>
		                        </div>
		                    </div>
		                    <div class="form-group col-xs-6">
		                        {!!Form::label('','DNI:',['class'=>'control-label col-xs-4'])!!}
		                        <div class="col-xs-8">
		                            <span>48134118</span>
		                        </div>
		                    </div>
		                    <div class="form-group col-xs-12">
		                        {!!Form::label('','Nombre:',['class'=>'control-label col-xs-2'])!!}
		                        <div class="col-xs-8">
		                            <span>Ximena Cristina Sarella Priale Cordova</span>
		                        </div>
		                    </div>
		                    <div class="form-group col-xs-6">
		                        {!!Form::label('','Facultad:',['class'=>'control-label col-xs-4'])!!}
		                        <div class="col-xs-8">
		                            <span>Ingenieria de Sistemas</span>
		                        </div>
		                    </div>
		                    <div class="form-group col-xs-6">
		                        {!!Form::label('','Semestre:',['class'=>'control-label col-xs-4'])!!}
		                        <div class="col-xs-8">
		                           	<span>4° Sem.</span>
		                        </div>                        
		                    </div>
		                    <div class="form-group col-xs-12">
		                        {!!Form::label('','Domicilio:',['class'=>'control-label col-xs-2'])!!}
		                        <div class="col-xs-8">
		                            <span>Jr. La Union 230</span>
		                        </div>
		                    </div>
		                    <div class="row"></div>
		                    <h4>Datos de la solicitud</h4><br>
		                    <div class="form-group col-xs-6">
		                        {!!Form::label('','Fecha:',['class'=>'control-label col-xs-4'])!!}
		                        <div class="col-xs-8">
		                            <span>20-14-2015</span>
		                        </div>
		                    </div>
		                    <div class="form-group col-xs-6">
		                        {!!Form::label('','Motivo:',['class'=>'control-label col-xs-4'])!!}
		                        <div class="col-xs-8">
		                            <span>Apoyo Oftalmologico</span>
		                        </div>
		                    </div>
		                    <div class="form-group col-xs-6">
		                        {!!Form::label('','Monto:',['class'=>'control-label col-xs-4'])!!}
		                        <div class="col-xs-8">
		                            <span>200.00</span>
		                        </div>
		                    </div>
		                    <div class="form-group col-xs-6">
		                        {!!Form::label('','Exped.:',['class'=>'control-label col-xs-4'])!!}
		                        <div class="col-xs-8">
		                            <span>X12</span>
		                        </div>
		                    </div>
		                    <div class="form-group col-xs-12 hide-garante">
		                        {!!Form::label('','Garante:',['class'=>'control-label col-xs-2'])!!}
		                        <div class="col-xs-8">
		                            
		                        </div>
		                    </div>
		                    <div class="form-group col-xs-6">
		                        {!!Form::label('','Estado:',['class'=>'control-label col-xs-4'])!!}
		                        <div class="col-xs-8">
		                            <span>Observado</span>
		                        </div>
		                    </div>
		                    <div class="form-group col-xs-12">
		                        {!!Form::label('','Observación:',['class'=>'control-label col-xs-2'])!!}
		                        <div class="col-xs-10">
		                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, libero quae nulla. Autem blanditiis voluptatibus dolore dignissimos accusantium tenetur quaerat facere in neque qui praesentium, earum, dicta recusandae id ipsa.</span>
		                        </div>
		                    </div>
		                    <br>
		                </fieldset>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        <button type="button" class="btn btn-primary">Modificar</button>
				      </div>
				    </div>
				  </div>
				</div>
	</section>

    <script>
		var table = $('#myTable').DataTable({
			"language": {
            	"url": "/js/SpanishDT.json"
            },
		    ajax: {
		        url: '/solicitudJson',
		        dataSrc: ''
		    },
		    columns: [
		        { data: 'codigo' },
		        { data: 'nombreEst' },
		        { data: 'nombreMot' },
		        { data: 'monto' },
		        { data: 'nombreFac' },
		        { data: 'fecha' },
		        { data: 'informe' }
		    ]
		});
		
		// #column3_search is a <input type="text"> element
		$('#codigo').on( 'keyup', function () {
		    table
		        .columns(0)
		        .search( this.value )
		        .draw();
		});
		$('#name').on( 'keyup', function () {
		    table
		        .columns(1)
		        .search( this.value )
		        .draw();
		});
		$('#motive').on( 'change', function () {
			if(this.value != "< - - - Todos - - - >")
			    table
			        .columns(2)
			        .search( this.value )
			        .draw();
			else
				table
					.columns(2)
			        .search("")
			        .draw();
		});
		$('#facu').on( 'change', function () {
			if(this.value != "< - - - Todos - - - >")
			    table
			        .columns(4)
			        .search( this.value )
			        .draw();
			else
				table
					.columns(4)
			        .search("")
			        .draw();
		});
    </script>
@stop