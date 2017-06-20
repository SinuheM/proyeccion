$(document).ready(function(){
    
    $('#motivoNew').on( 'change', function (){
    	if($(this).val()==="8")
    	{
	    	$('.hide-garante').slideDown();
	    	$('#garante').attr( "required", "true" );
    	}
	    else{
	    	$('.hide-garante').slideUp();
	    	$('#garante').removeAttr("required");
	    }
    });
    $('#codeAlumno').on( 'change', function (){
    	if($(this).val().length==11)
    	{
	    	var route = "/solicitudAllJson";
        	$.get(route, function(res){
	            $(res).each(function(key, value){
	                if(value.codigo == $('#codeAlumno').val())
	                {
	                	$('#dniAlumno').val(value.dni);
	                	$('#nameAlumno').val(value.nombreEst);
	                	$('#facuAlumno').val(value.idFac);
	                	$('.hide-sem').toggle();
	                	$('#direccAlumno').val(value.domicilio);
	                }
	            });
	        });
    	}
    });
    $('#sem').on( 'change', function (){
    	$('.hide-sem').slideUp();
	});

    $(".alumno").on("click","tr", function(){
    	var id = $($(this).children()[0]).text();
    	var route = "/solicitud/"+id+"show";

        $.get(route, function(res){
       		$('#codeModal').text(res[0].codigo);
            $('#dniModal').text(res[0].dni);
            $('#nombreModal').text(res[0].nombreEst);
            $('#facuModal').text(res[0].nombreFac); 
            $('#semModal').text(res[0].semestre);
            $('#domicilioModal').text(res[0].domicilio);
            $('#fechaModal').text(res[0].fecha);
            $('#montoModal').text(res[0].monto);
            $('#expModal').text(res[0].expediente);
            $('#estadoModal').text(res[0].informe);
            $('#obsModal').text(res[0].observacion);
            $('#garanteModal').text(res[0].garantiza);
            $('#motivoModal').text(res[0].nombreMot);
            if(res[0].nombreMot == "Prestamo económico")
            	$('.hide-garante').show();
            $($('#modificarModal')[0]).prop('href','solicitud/'+res[0].id+'/edit');
            $('#myModal').modal('show');
        })
    });
    $('#myModal').on('hidden.bs.modal', function (e) {
 		$('.hide-garante').hide();
	})

});
