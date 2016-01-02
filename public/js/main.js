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

});
