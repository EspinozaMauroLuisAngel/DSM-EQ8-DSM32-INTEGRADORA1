<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 Agregar Usuarios</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.php">Buttons</a>
                        <a class="collapse-item" href="cards.php">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.php">Colors</a>
                        <a class="collapse-item" href="utilities-border.php">Borders</a>
                        <a class="collapse-item" href="utilities-animation.php">Animations</a>
                        <a class="collapse-item" href="utilities-other.php">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="../login.php">Login</a>
                        <a class="collapse-item" href="../registro.php">Register</a>
                        <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.php">404 Page</a>
                        <a class="collapse-item" href="blank.php">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Agregar Usuarios</span></a>
            </li>

            <!-- Nav Item - Tables -->
             <li class="nav-item">
             <a class="nav-link" href="usuarios.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Usuarios</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

  <!-- Custom fonts for this template-->
  <link href="<?=$h->get['base_url'].'vendor/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">
  <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=$h->get['base_url'].'/paneladmin/assets/styles/sb-admin-2.min.css'?>" rel="stylesheet">
  <!-- Scrip Font Awesome icons -->
  <script src="https://kit.fontawesome.com/7a66a4eab9.js" crossorigin="anonymous"></script>
      <!-- Custom styles for this page datables -->
      <link href="<?=$h->get['base_url'].'vendor/datatables/dataTables.bootstrap4.min.css'?>" rel="stylesheet">
      <!--    cdn bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body id="page-top">

  <!-- start incluimos menu desde nuestro layout -->
<?php
//include '../../layouts/menu.php'
?>

  <!-- Content page  -->
  
              <!-- Begin Page Content -->
              <div class="container-fluid">

                  <!-- Content Row -->
                  <div class="row">

                      <!--  Formulario Direcciones -->
                      <div class="col-xl-12 col-lg-12">
                          <div class="card shadow mb-4">
                              <!-- Card Header - Dropdown -->
                              <div
                                  class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h6 class="m-0 font-weight-bold text-primary">Agregar Usuarios</h6>
                                  <div class="dropdown no-arrow">
                                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                          aria-labelledby="dropdownMenuLink">
                                          <div class="dropdown-header">Dropdown Header:</div>
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                      </div>
                                  </div>
                              </div>
                              <!-- Card Foremulario Direcciones -->
                              <div class="card-body">
                              <form>
                                  <div class="col-12">
                                      <div class="row">
                                          <div class="col-6">
                                              <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          </div>
                                          <div class="col-6">
                                          <label for="exampleInputEmail1" class="form-label">Correo Electronico:</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          </div>
                                          <div class="col-6">
                                            <label for="exampleInputEmail1" class="form-label">Nombre de Usuario:</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                          <div class="col-6">
                                              <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
                                              <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          </div>
                                          <div class="col-6">
                                              <label for="exampleInputPassword1" class="form-label">Imagen De Perfil:</label>
                                              <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          </div>
                                          <div class="m-3">
                                          <button type="submit" class="btn btn-primary">Guardar</button>
                                      </div>
                                        </div>
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- /.container-fluid -->

          </div>
          <!-- End of Main Content -->

  <!-- End Content page  -->
  
            <!-- Footer-->
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>