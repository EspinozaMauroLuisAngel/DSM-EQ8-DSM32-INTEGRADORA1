<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
<!--Mandamos a llamar plugins y estilos css-->
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/styles.css">
<link rel="stylesheet" href="../css/luis.css">
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../vistas/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../vistas/plugins/sweetalert2/sweetalert2.min.css"> 
</head>
<body>
<!--Header-->
    <nav class="navbar navbar-expand-lg bg-dark"> 
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Aprendiendo Ando</a>
        </div>
    </nav>
<!--Formulario Login   -->
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <h2 class="fw-bold mb-2 text-uppercase">Bienvenido</h2>
                    <br>
                    <p class="text-white-50 mb-5"> Por Favor, Introduce tu Usuario y Contraseña </p>
                    <form id="formlogin" class="form" action="" method="post">
                      <div class="form-group">
                        <label for="username" class="text-white">Usuario</label>
                        <input type="text" name="username" id="username" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="passwordd" class="text-write">Contraseñaa</label>
                        <input type="text" name="passwordd" id="passwordd" class="form-control"> 
                      </div> <br>
                      <button class="btn btn-outline-light btn-lg px-5" type="submit">Iniciar Secion</button>
                    </form>
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                    </div>  
                    <div>
                      <p class="mb-0">¿No tienes una cuenta? <a href="registro.php" class="text-white-50 fw-bold"> <br> Registrate Gratis</a>
                      </p>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
<?php include_once('../layouts/footer.php')?><!--Footer. Osea el pie de pagina-->
<script src="../vistas/jquery/jquery-3.3.1.min.js"></script>
<script src="../vistas/bootstrap/js/bootstrap.min.js"></script>
<script src="../vistas/popper/popper.min.js"></script>
<script src="../vistas/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="codigo.js"></script>   
</body>
</html>