$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
       }],
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
    
$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Persona");            
    $("#modalCRUD").modal("show");        
    idInstructor=null;
    opcion = 1; //alta
});    

var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    idInstructor = parseInt(fila.find('td:eq(0)').text());
    nombreInstructor = fila.find('td:eq(1)').text();
    correoInstructor = fila.find('td:eq(2)').text();
    usuarioInstructor = fila.find('td:eq(3)').text();
    contraseñaInstructor = fila.find('td:eq(4)').text();

    $("#nombreInstructor").val(nombreInstructor);
    $("#correoInstructor").val(correoInstructor);
    $("#usuarioInstructor").val(usuarioInstructor);
    $("#contraseñaInstructor").val(contraseñaInstructor);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Persona");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    idInstructor = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+idInstructor+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud2.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, idInstructor:idInstructor},
            success: function(){
                tablaPersonas.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    nombreInstructor = $.trim($("#nombreInstructor").val());
    correoInstructor = $.trim($("#correoInstructor").val());
    usuarioInstructor = $.trim($("#usuarioInstructor").val());
    contraseñaInstructor = $.trim($("#contraseñaInstructor").val());    
    $.ajax({
        url: "bd/crud2.php",
        type: "POST",
        dataType: "json",
        data: {nombreInstructor:nombreInstructor, correoInstructor:correoInstructor, usuarioInstructor:usuarioInstructor, contraseñaInstructor:contraseñaInstructor, idInstructor:idInstructor, opcion:opcion},
        success: function(data){  
            console.log(data);
            idInstructor = data[0].idInstructor;            
            nombreInstructor = data[0].nombreInstructor;
            correoInstructor = data[0].correoInstructor;
            usuarioInstructor = data[0].usuarioInstructor;
            contraseñaInstructor = data[0].contraseñaInstructor;
            if(opcion == 1){tablaPersonas.row.add([idInstructor,nombreInstructor,correoInstructor,usuarioInstructor,contraseñaInstructor]).draw();}
            else{tablaPersonas.row(fila).data([idInstructor,nombreInstructor,correoInstructor,usuarioInstructor,contraseñaInstructor]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});