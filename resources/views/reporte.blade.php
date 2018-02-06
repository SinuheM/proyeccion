@extends('layout.proyeccion')
@section('title', ' - Solicitudes')
@section('Menu', '<li><a href="/solicitud">Solicitudes</a></li>
                    <li><a href="/nuevaSolicitud">Nueva solicitud</a></li>
                    <li class="active"><a href="">Reportes</a></li>')
@section('content')
    <section class="dashboard">
    @include('include.header')
    	<div class="container">
    		<div class="col-xs-1"></div>
    		<div class="mitad col-xs-10">
    			<div class="titlePage field-set">
	                <h3>Reporte</h3>
	             </div>
	    		<div class="panel panel-default hidden-print">
					<div class="panel-body">
		    			<div class="row">
				    		<div class="col-xs-12 reportePanel" style="margin-bottom: 14px;">
				    			<label for="codigo" class="col-xs-1" style="margin-right: 4%;">Fecha:</label>
				    			<div class="col-xs-5 reporteControl">
				    				<span class="col-xs-2">Desde:</span>
				    				<div class="col-xs-8" style="padding: 0;width: 69%;">
				    					<input type="date" id="minDate" name="codigo" class="form-control">
				    				</div>
				    			</div>
					    		<div class="col-xs-5 reporteControl">
					    			<span class="col-xs-2">Hasta:</span>
				    				<div class="col-xs-10 p30">
					    				<input type="date" id="maxDate" name="name" class="form-control">
				    				</div>
					    		</div>
				    		</div>
				    	</div>
				    	<div class="row" style="margin-bottom: 7px;">
				    		<div class="col-xs-6 reportePanel">
				    			<label for="codigo" class="col-xs-3">Motivo</label>
				    			<div class="col-xs-9">
					    			<select name="motive" id="motive" class="form-control col-xs-8">
			                            @foreach($motivos as $motivo)
			                                <option value="{{$motivo->nombre}}">{{$motivo->nombre}}</option>
			                            @endforeach
			                        </select>
					    		</div>
				    		</div>
				    		<div class="col-xs-6 reportePanel">
				    			<label for="facu" class="col-xs-3">Facultad</label>
				    			<div class="col-xs-9">
					    			<select name="facu" id="facu" class="form-control" class="col-xs-8">
			                            @foreach($facultads as $facultad)
			                                <option value="{{$facultad->nombre}}">{{$facultad->nombre}}</option>
			                            @endforeach
			                        </select>
					    		</div>
				   			</div>
				   		</div>
				   		<div class="row">
				    		<div class="col-xs-10 reportePanel">
				    			<label for="codigo" class="col-xs-1" style="margin-right: 4%;">Estado:</label>
				    			<div class="col-xs-8 reporteControl">
					    			<div class="col-xs-3"><span class=""><label>
					    				<input type="checkbox" value="Deudor" name="Deu" id="Deud">Deudor</label></div>
					    			<div class="col-xs-4"><span class=""><label>
					    				<input type="checkbox" value="No deudor" id="NoDeud">No deudor</span></div>
					    			<div class="col-xs-4"><span class=""><label>
					    				<input type="checkbox" value="Observado" id="ObsD">Observado</span></div>
					    		</div>						        
				    		</div>
				    		<div class="f-right">
				    			<div class="btn btn-primary hidden-print" onclick="print();">Imprimir</div>
				    		</div>
				   		</div>
					</div>
	    		</div>
    		</div>
    	</div>
    	<div class="container">
    		<div class="col-xs-12 hidden-print">
		        <table class="table table-bordered table-condensed table-striped" id="myTable">
		            <thead>
		                <tr>
		                    <th>Código</th>
		                    <th>Nombre</th>
		                    <th>Exped.</th>
		                    <th>Motivo</th>
		                    <th>Monto</th>
		                    <th>Facultad</th>
		                    <th>Semestre</th>
		                    <th style="width: 75px;">Fecha</th>
		                    <th>Estado</th>	
		                    <th style="width: 150px;">Observación</th>
		                    <th>Garantiza</th>
		                </tr>
		            </thead>
		            <tbody>
		                
		            </tbody>
		        </table>
    		</div>
		    <table class="table table-bordered table-condensed table-striped visible-print-block" id="myTablePrint">
		            <thead>
		                <tr>
		                    <th>Código</th>
		                    <th>Nombre</th>
		                    <th>Exped.</th>
		                    <th>Motivo</th>
		                    <th>Monto</th>
		                    <th>Facultad</th>
		                    <th>Semestre</th>
		                    <th style="width: 75px;">Fecha</th>
		                    <th>Estado</th>	
		                    <th style="width: 150px;">Observación</th>
		                    <th>Garantiza</th>
		                </tr>
		            </thead>
		            <tbody>
		                
		            </tbody>
		    </table>
    	</div>
    	
    </section>
    <script>
		var table = $('#myTable').DataTable({
			"language": {
            	"url": "/js/SpanishDT.json"
            },
		    ajax: {
		        url: '/solicitudAllJson',
		        dataSrc: ''
		    },
		    columns: [
		        { data: 'codigo' },
		        { data: 'nombreEst' },
		        { data: 'expediente' },
		        { data: 'nombreMot' },
		        { data: 'monto' },
		        { data: 'nombreFac' },
		        { data: 'semestre'},
		        { data: 'fecha' },
		        { data: 'informe' },
		        { data: 'observacion' },
		        { data: 'garantiza' }
		    ]
		});
		
		var tablePrint = $('#myTablePrint').DataTable({
			"paging":   false,
			"info":     false,
			"language": {
            	"url": "/js/SpanishDT.json"
            },
		    ajax: {
		        url: '/solicitudAllJson',
		        dataSrc: ''
		    },
		    columns: [
		        { data: 'codigo' },
		        { data: 'nombreEst' },
		        { data: 'expediente' },
		        { data: 'nombreMot' },
		        { data: 'monto' },
		        { data: 'nombreFac' },
		        { data: 'semestre'},
		        { data: 'fecha' },
		        { data: 'informe' },
		        { data: 'observacion' },
		        { data: 'garantiza' }
		    ]
		});

		// #column3_search is a <input type="text"> element
		
		$('#motive').on( 'change', function () {
			if(this.value != "< - - - Todos - - - >")
			    table
			        .columns(3)
			        .search( this.value )
			        .draw();
			else
				table
					.columns(3)
			        .search("")
			        .draw();
		});
		$('#facu').on( 'change', function () {
			if(this.value != "< - - - Todos - - - >")
			    table
			        .columns(5)
			        .search( this.value )
			        .draw();
			else
				table
					.columns(5)
			        .search("")
			        .draw();
		});
		$('#facu').on( 'change', function () {
			if(this.value != "< - - - Todos - - - >")
			    table
			        .columns(5)
			        .search( this.value )
			        .draw();
			else
				table
					.columns(5)
			        .search("")
			        .draw();
		});
		$('input[type=checkbox]').on( "click", function(){
			var n = $( "input:checked" ).length;
			if(n==3)
				table.columns(8).search('').draw();
			else if(n==1)
				table.columns(8).search("^"+$( "input:checked" ).val()+"$", true, false, true).draw();
			else if(n==0)
				table.columns(8).search('balalala').draw();
			else{
				var busqTwo = "^" + $("input:checked")[0].value + "|" + $("input:checked")[1].value + "$";
				console.log(busqTwo);
				table.columns(8).search(busqTwo,true,false,true).draw();
			}
		});
		$.fn.dataTable.ext.search.push(
		    function( settings, data, dataIndex ) {
		        var minDate = new Date( $('#minDate').val() );
		        var maxDate = new Date( $('#maxDate').val() );
		        var age = new Date( data[7] ) || 0; // use data for the age column

		        if ( ( isNaN( minDate ) && isNaN( maxDate ) ) ||
		             ( isNaN( minDate ) && age <= maxDate ) ||
		             ( minDate <= age   && isNaN( maxDate ) ) ||
		             ( minDate <= age   && age <= maxDate ) )
		        {
		            return true;
		        }
		        return false;
		    }
		);
		$('#minDate, #maxDate').change( function() {
	        table.draw();
	    } );

	    //Table Print
	    $('#motive').on( 'change', function () {
			if(this.value != "< - - - Todos - - - >")
			    tablePrint
			        .columns(3)
			        .search( this.value )
			        .draw();
			else
				tablePrint
					.columns(3)
			        .search("")
			        .draw();
		});
		$('#facu').on( 'change', function () {
			if(this.value != "< - - - Todos - - - >")
			    tablePrint
			        .columns(5)
			        .search( this.value )
			        .draw();
			else
				tablePrint
					.columns(5)
			        .search("")
			        .draw();
		});
		$('#facu').on( 'change', function () {
			if(this.value != "< - - - Todos - - - >")
			    tablePrint
			        .columns(5)
			        .search( this.value )
			        .draw();
			else
				tablePrint
					.columns(5)
			        .search("")
			        .draw();
		});
		$('input[type=checkbox]').on( "click", function(){
			var n = $( "input:checked" ).length;
			if(n==3)
				tablePrint.columns(8).search('').draw();
			else if(n==1)
				tablePrint.columns(8).search("^"+$( "input:checked" ).val()+"$", true, false, true).draw();
			else if(n==0)
				tablePrint.columns(8).search('balalala').draw();
			else{
				var busqTwo = "^" + $("input:checked")[0].value + "|" + $("input:checked")[1].value + "$";
				console.log(busqTwo);
				tablePrint.columns(8).search(busqTwo,true,false,true).draw();
			}
		});

		$('#minDate, #maxDate').change( function() {
	        tablePrint.draw();
	    } );


    </script>
@stop