$('#formregistro').submit(function(e){
    e.preventDefault();
    var nombre = $.trim($("#nombre").val());
    var email = $.trim($("#email").val());
    var username = $.trim($("#username").val());
    var contraseña = $.trim($("#contraseña").val());
    
    if(nombre.length == "" || email == "" || username == "" || contraseña == "" ){ 
        Swal.fire({
            type:'error',
            title: 'Debe Completar los Campos', 
        });
        return false;
    }else{
        $.ajax({
            url:"bd/registro.php",
            type:"POST",
            datatype: "json",
            data: {nombre:nombre, correo:correo, usuario:usuario,contrasena:contrasena},
            success:function(data){
                if(data == "null"){
                    Swal.fire({
                        type:'error',
                        title:'Datos Incorrecto',
                    });   
                }else{
                    Swal.fire({
                        type:'success',
                        title:'¡Registro Exitoso!',
                        confirmButtonColor:'#3085d6',
                        confirmButtonText:'Ingresar'
                    }).then((result) => {
                        if(result.value){
                            window.location.href ="login.php";
                        }
                    })
                }
            }
        })
    }   
}); 
