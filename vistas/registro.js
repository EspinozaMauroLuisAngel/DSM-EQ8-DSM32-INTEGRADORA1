$('#formregistro').submit(function(e){
    e.preventDefault();
    var namee = $.trim($("#namee").val());
    var email = $.trim($("#email").val());
    var username = $.trim($("#username").val());
    var passwordd = $.trim($("#passwordd").val());
    
    if(namee.length == "" || email == "" || username == "" || passwordd == "" ){ 
        Swal.fire({
            type:'error',
            title: 'Debe Completar todos los Campos', 
        });
        return false;
    }else{
        $.ajax({
            url:"bd/registro.php",
            type:"POST",
            datatype: "json",
            data: {namee:namee, email:email, username:username, passwordd:passwordd},
            success:function(data){
                if(data == "null"){
                    Swal.fire({
                        type:'error',
                        title:'Usuario y/o Contraseña Incorrecto',
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