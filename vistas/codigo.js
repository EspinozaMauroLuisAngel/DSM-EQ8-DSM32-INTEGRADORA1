$('#formlogin').submit(function(e){
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var contraseña = $.trim($("#contraseña").val());
    
    if(usuario.length == "" || contraseña == "" ){ 
        Swal.fire({
            type:'error',
            title: 'Debe Ingresar Usuario y/o Contraseña', 
        });
        return false;
    }else{
        $.ajax({
            url:"bd/login.php",
            type:"POST",
            datatype: "json",
            data: {usuario:usuario, contraseña:contraseña},
            success:function(data){
                if(data == "null"){
                    Swal.fire({
                        type:'error',
                        title:'Usuario y/o Contraseña Incorrecto',
                    });   
                }else{
                    Swal.fire({
                        type:'success',
                        title:'¡Conexion Exitosa!',
                        confirmButtonColor:'#3085d6',
                        confirmButtonText:'Ingresar'
                    }).then((result) => {
                        if(result.value){
                            window.location.href ="vistas/index.php";
                        }
                    })
                }
            }
        })
    }   
}); 