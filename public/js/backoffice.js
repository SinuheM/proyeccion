$(function(){
    carga();
    $(".pedidosLista").on("click",".pedidoRow", function() {
        var id = $(this).children('td:first-child').text();
        var estadoPed = $(this).children('td:nth-child(6)').text();
        var route = "/pedido/"+id+"/edit";
        //var route = "/pedido/"+id+"/edit";
        $.get(route, function(res){
            
            var fecha = new Date(res[0].fechahoraLavado);
            var dia = ("0" + fecha.getDate()).slice(-2);
            var month = ("0" + (fecha.getMonth() + 1)).slice(-2);
            var min = ("0" + fecha.getMinutes()).slice(-2);
            var h = ("0" + fecha.getHours()).slice(-2);            
            fecha = fecha.getFullYear()+"-"+month+"-"+dia;
            var hora = h + ":" + min;

            $('.lblEstado').text(estadoPed);
            $('#idSelect').val(res[0].id);
            $('#clienteS').text(res[0].clientePedido);
            $('#telefono').text(res[0].telefonoPedido);
            $('#correo').text(res[0].correoPedido);
            $('#fechaLavado').val(fecha);
            $('#horaLavado').val(hora);
            $('#direccionPedido').val(res[0].direccionPedido);
            $('#distrito').val(res[0].distritoPedido);
            $('#provincia').val(res[0].provinciaPedido);
            $('#departamento').val(res[0].departamentoPedido);
            $('#notaPedido').val(res[0].notaPedido);
            $('#idEstado').val(res[0].estadoPedido_id);
            $('#Packes').val(res[0].combo_id);
            $('#Colaborador').val(res[0].colaborador_id);
            $('#Colaborador2').val(res[0].colaborador_id2);
            $('#dificultadP').val(res[0].dificultadPedido);
            $('#calificacionP').val(res[0].calificacionPedido);
            $('#tiempoEst').val(res[0].tiempoEstimado);
            
            fecha = new Date(res[0].fechahoraPedido);
            dia = ("0" + fecha.getDate()).slice(-2);
            month = ("0" + (fecha.getMonth() + 1)).slice(-2);
            min = ("0" + fecha.getMinutes()).slice(-2);
            h = ("0" + fecha.getHours()).slice(-2);

            fecha = fecha.getFullYear()+"-"+month+"-"+dia;
            hora = h + ":" + min;
            
            $('#fechaPedido').val(fecha);
            $('#horaPedido').val(hora);

            fecha = new Date(res[0].fechahoraFinalizado);
            dia = ("0" + fecha.getDate()).slice(-2);
            month = ("0" + (fecha.getMonth() + 1)).slice(-2);
            min = ("0" + fecha.getMinutes()).slice(-2);
            h = ("0" + fecha.getHours()).slice(-2);

            fecha = fecha.getFullYear()+"-"+month+"-"+dia;
            hora = h + ":" + min;

            $('#fechaFinalizado').val(res[0].fechahoraFinalizado);
            $('#horaFinalizado').val(hora);
            var estId = res[0].estadoPedido_id;
            if(estId==1)
                $('#ActualizarS').text("Asignar");
            else if(estId==2)
                $('#ActualizarS').text("Iniciar Lavado");
            else if(estId==3)
                $('#ActualizarS').text("Finalizar");
        });
        var route = "/carro/"+id+"/edit";
        $.get(route, function(res){
            $('#modeloCarro').val(res[0].modeloCarro);
            $('#placaCarro').val(res[0].placaCarro);
            $('#colorCarro').val(res[0].colorCarro);
            $('#marcaCarro').val(res[0].marcaCarro);
            $('#tipoCarro').val(res[0].tipoCarro);
        });
        /*
            var idClose = "";
            var elem = $(this);
            console.log(elem);
            $('#myTable .descriptionPedido').each(function(){
                $(this).fadeOut(200).remove();
                idClose = $(this).children('td:first-child').text();
            });
            if(idClose != id){
                console.log("Hora");
                $('#detail tr td:first-child').each(function(){
                    if (id == $(this).text()) {
                        console.log("Horao");
                        var elemInsert = $(this).parent()[0];
                        $('<tr class="descriptionPedido">' + $(elemInsert).html() + '</tr>' ).insertAfter(elem).fadeIn("fast");
                    };
                });
            }
        */
    });

    $("#myTable thead tr").click(function() {
        $('#myTable .descriptionPedido').each(function(){
            $(this).fadeOut(200).remove();
        });
    });

    $(".esperaPedido").each(function() {
        var a = moment($(this).html(),'YYYY-M-D H:m:s');
        $(this).html(a.fromNow());
    });
    setInterval(tiempoEsperado, 10000);

    function tiempoEsperado(){
        $(".timeEsp").each(function() {
            var a = moment($(this).html(),'YYYY-M-D H:m:s');
            $(this).siblings(".esperaPedido").html(a.fromNow()).fadeIn("fast");
        });
        $('.timeE').each(function(){
            var time = parseInt($(this).text()) - 1;
            $(this).text(time);
        });
    }

    $(".lAtenderPedido").on("click", function(e){
        e.preventDefault();
        var elId = $('#idSelect').val();
        var route = "/pedido/"+elId+"";
        //var route = "/pedido/"+elId+"";
        var token = $('#token').val();

        var col1 = $('#Colaborador').val();
        var col2 = $('#Colaborador2').val();
        var pack = $('#Packes').val()
        var fecha = $('#fechaLavado').val() + " " + $('#horaLavado').val();
        var dificultad = $('#dificultadP').val();
        var nota = $('#notaPedido')[0].value;
        var direccion = $('#direccionPedido').val(); 
        var referencia = $('#Referencia').val();
        var distrito = $('#distrito').val();
        var provincia = $('#provincia').val();
        var departamento = $('#departamento').val();
        var tiempoEstimado = $('#tiempoEst').val();
        var calificacion = $('#calificacionP').val();
        var userId = $('#idUser').val();
        var modeloCarro = $('#modeloCarro').val();
        var placaCarro = $('#placaCarro').val();
        var colorCarro = $('#colorCarro').val();
        var marcaCarro = $('#marcaCarro').val();
        var tipoCarro = $('#tipoCarro').val();
        var fechahoraPend, fechahoraCurso, fechahoraFinalizado;
        var estadoPedido = parseInt($('#idEstado').val()) + 1;
        if(estadoPedido==2){
            fechahoraPend = new Date();
            dia = ("0" + fechahoraPend.getDate()).slice(-2);
            month = ("0" + (fechahoraPend.getMonth() + 1)).slice(-2);
            min = ("0" + fechahoraPend.getMinutes()).slice(-2);
            h = ("0" + fechahoraPend.getHours()).slice(-2);

            fechahoraPend = fechahoraPend.getFullYear()+"-"+month+"-"+dia + " " + h + ":" + min;
        }
        else if(estadoPedido==3){
            fechahoraCurso = new Date();
            dia = ("0" + fechahoraCurso.getDate()).slice(-2);
            month = ("0" + (fechahoraCurso.getMonth() + 1)).slice(-2);
            min = ("0" + fechahoraCurso.getMinutes()).slice(-2);
            h = ("0" + fechahoraCurso.getHours()).slice(-2);

            fechahoraCurso = fechahoraCurso.getFullYear()+"-"+month+"-"+dia + " " + h + ":" + min;
        }
        else if(estadoPedido==4){
            fechahoraFinalizado = new Date();
            dia = ("0" + fechahoraFinalizado.getDate()).slice(-2);
            month = ("0" + (fechahoraFinalizado.getMonth() + 1)).slice(-2);
            min = ("0" + fechahoraFinalizado.getMinutes()).slice(-2);
            h = ("0" + fechahoraFinalizado.getHours()).slice(-2);

            fechahoraFinalizado = fechahoraFinalizado.getFullYear()+"-"+month+"-"+dia + " " + h + ":" + min;
        }
        $.ajax({
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'PUT',
            dataType: 'json',
            data: {notaPedido: nota , direccionPedido : direccion, 
                    estadoPedido_id : estadoPedido, distritoPedido: distrito ,
                    colaborador_id : col1, colaborador_id2: col2 ,
                    combo_id : pack, fechahoraLavado: fecha ,
                    dificultadPedido : dificultad, provinciaPedido: provincia ,
                    departamentoPedido : departamento, tiempoEstimado: tiempoEstimado ,
                    calificacionPedido : calificacion ,fechahoraPendiente: fechahoraPend,
                    fechahoraCurso : fechahoraCurso, fechahoraFinalizado: fechahoraFinalizado,
                    carro_id : elId, usuario_id: userId, referenciaPedido : referencia},
            success: function(){
                var route = "/carro/"+elId+"";
                $.ajax({
                    data: { modeloCarro: modeloCarro, placaCarro: placaCarro,
                            colorCarro: colorCarro, marcaCarro: marcaCarro, tipoCarro: tipoCarro
                        },
                    url: route,
                    headers: {'X-CSRF-TOKEN': token},
                    type: 'PUT',
                    dataType: 'json',
                    error: function(){
                        console.log("Errorrr carro :(");
                    }
                });
                carga();
            },
            error: function(){
                console.log("Errorrr xk :(");
            }
        });
    });
    
    $(".lCancelarPedido").on("click", function(e){
        e.preventDefault();
        
        if (confirm("¿Realmente desea cancelar el pedido?") == true) {
            var elId = $('#idSelect').val();
            var route = "/pedido/"+elId+"";
            //var route = "/pedido/"+elId+"";
            var token = $('#token').val();
            var estadoPedido = 5;

            $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN': token},
                type: 'PUT',
                dataType: 'json',
                data: { estadoPedido_id : estadoPedido },
                success: function(){
                    carga();
                },
                error: function(){
                    console.log("Errorrr xk :(");
                }
            });
        }
    });
    
    function carga(){        
        var datosPedido = $('.pedidosLista');
        var route = "/backofficeAjax";
        //var route = "/backofficeAjax";
        $(datosPedido).empty();
        var Appendsio = '<table id="myTable"><thead><tr><th>Código</th><th>Cliente</th><th>Telefono</th><th>Combo</th><th>Dificultad</th><th>Estado</th><th class="hide">Tiempo espera</th><th>Tiempo espera hide</th><th>Tiempo estimado</th></tr></thead><tbody id="myTableBody">';
        datosPedido.append(Appendsio);
        $.get(route, function(res){
            $(res).each(function(key, value){
                var classe = "pedidoCancelado";
                if(value.dificultadPedido == null)
                    value.dificultadPedido = " - - - - - - ";
                if(value.tiempoEstimado == null)
                    value.tiempoEstimado = " - - - - - - ";

                if(value.nombreEstado=="Espera")
                    classe = "pedidoEspera";
                else if(value.nombreEstado=="Asignado")
                    classe = "pedidoAsignado";
                else if(value.nombreEstado=="En curso")
                    classe = "pedidoEnCurso";
                else if(value.nombreEstado=="Finalizado")
                    classe = "pedidoFinalizado";
                $('#myTableBody').append ('<tr role="row" class="pedidoRow"><td>'+value.id+'</td> \
                    <td>'+value.clientePedido+'</td><td>'+value.telefonoPedido+'</td> \
                    <td>Combo '+value.combo_id+'</td><td> '+value.dificultadPedido+' </td>  \
                    <td class="'+classe+' tipoPedidoLista">'+value.nombreEstado+'</td> \
                    <td class="esperaPedido">'+value.fechahoraPedido+'</td><td class="hide  timeEsp">'+value.fechahoraPedido+'</td> \
                    <td class="timeE"> '+value.tiempoEstimado+' </td></tr>');
            });
            $('#myTable').dataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.9/i18n/Spanish.json"
                }
            });
        });
        
    }
    /*
    $.get(route, function(res){
        $('#myTable').DataTable( {
        data: res,
        columns: [
            { title: "id" },
            { title: "clientePedido" },
            { title: "telefonoPedido" },
            { title: "combo_id" },
            { title: "dificultadPedido" },
            { title: "estadoPedido_id." },
            { title: "fechahoraPedido" },
            { title: "tiempoEstimado" }
        ]
        });
    });
    
    */

});

