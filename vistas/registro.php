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
<!--Formulario Registro-->
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <div class="mb-md-5 mt-md-4 pb-5">
  				<div class="container">
					<div class="row main">
						<div class="panel-heading">
						    <div class="panel-title text-center">
								   <h1 class="title">Registrate Gratis</h1>
								   <hr />
							</div>
						</div> 
						<div class="main-login main-center">
                            <form id="formregistro" class="form" action="./bd/registroo.php" method="POST">
                                <div class="form-group">
                                    <label for="nombre" class="text-white">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="text-white">Correo Electronico</label>
                                    <input type="email" name="correo" id="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="username" class="text-white">Nombre Usuario</label>
                                    <input type="usuario" name="username" id="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="contraseña" class="text-write">Contraseña</label>
                                    <input type="contraseña" name="contrasena" id="contraseña" class="form-control">
                                </div> 
                                <br>
                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Registrarme</button>
                            </form>
							<div>
                                <p class="mb-0">¿Ya tienes una cuenta? <a href="login.php" class="text-white-50 fw-bold"> <br> Inicia Secion</a> </p>
                            </div>
						</div>
					</div>
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
<script src="registro.js"></script>   
</body>
</html>