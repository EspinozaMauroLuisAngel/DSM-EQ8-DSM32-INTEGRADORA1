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
    id_curso=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id_curso = parseInt(fila.find('td:eq(0)').text());
    nombre_curso = fila.find('td:eq(1)').text();
    contenido_curso = fila.find('td:eq(2)').text();
    describcion_general = fila.find('td:eq(3)').text();
    nivel = fila.find('td:eq(4)').text();

    $("#nombre_curso").val(nombre_curso);
    $("#contenido_curso").val(contenido_curso);
    $("#describcion_general").val(describcion_general);
    $("#nivel").val(nivel);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Persona");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    id_curso = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id_curso+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud1.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id_curso:id_curso},
            success: function(){
                tablaPersonas.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    nombre_curso = $.trim($("#nombre_curso").val());
    contenido_curso = $.trim($("#contenido_curso").val());
    describcion_general = $.trim($("#describcion_general").val());
    nivel = $.trim($("#nivel").val());    
    $.ajax({
        url: "bd/crud1.php",
        type: "POST",
        dataType: "json",
        data: {nombre_curso:nombre_curso, contenido_curso:contenido_curso, describcion_general:describcion_general, nivel:nivel, id_curso:id_curso, opcion:opcion},
        success: function(data){  
            console.log(data);
            id_curso = data[0].id_curso;            
            nombre_curso = data[0].nombre_curso;
            contenido_curso = data[0].contenido_curso;
            describcion_general = data[0].describcion_general;
            nivel = data[0].nivel;
            if(opcion == 1){tablaPersonas.row.add([id_curso,nombre_curso,contenido_curso,describcion_general,nivel]).draw();}
            else{tablaPersonas.row(fila).data([id_curso,nombre_curso,contenido_curso,describcion_general,nivel]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});