<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Curso HTML | AprendiendoAndo</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/blog.css">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/cursos.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="../index.php">AprendiendoAndo</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <!-- <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li> -->
                    <li><a class="dropdown-item" href="../../vistas/login.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Home</div>
                        <a class="nav-link" href="../index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Estoy aprendiendo
                        </a>
                        <div class="sb-sidenav-menu-heading">Cursos</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Temario
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#etiqueta">Etiquetas</a>
                                <a class="nav-link" href="#">Titulos</a>
                                <a class="nav-link" href="#">Párrafo</a>
                                <a class="nav-link" href="#">Comentar</a>
                            </nav>
                        </div>
                        <!-- <div class="sb-sidenav-menu-heading">Notas</div>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"></div>
                            Guardados
                        </a> -->
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Curso de HTML básico</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../index.php">Estoy aprendiendo</a></li>
                        <li class="breadcrumb-item active">Curso de HTML básico</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="mb-0">
                                En este curso, podras crear una aplicación para aprender algunos de los elementos HTML
                                más comunes, los bloques básicos de cualquier página web.
                            </p>
                        </div>
                    </div>
                    <!-- Primera carta -->
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="row g-0 border rounded overflow-hidden  mb-4 shadow-sm h-md-250 position-relative" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-primary" id="etiqueta">#Nota</strong>
                                    <h3 class="mb-0">Etiqueta</h3>
                                    <div class="mb-1 text-muted">Nov 12</div>
                                    <p class="card-text mb-auto">La mayoría de elementos HTML tienen una etiqueta de apertura y una etiqueta de cierre.</p>
                                    <a href="#" class="stretched-link">Continuar leyendo</a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <img class="bd-placeholder-img" width="50" height="250" src="../media/azul.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    </img>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" data-bs-toggle="modal" data-bs-target="#portfolioModal1-Ejemplo">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-success">#Ejemplo <i class="fas fa-star"></i></strong>
                                    <h3 class="mb-0">Etiqueta - #Ejemplo</h3>
                                    <div class="mb-1 text-muted">Nov 12</div>
                                    <p class="card-text mb-auto">La mayoría de elementos HTML tienen una etiqueta de
                                        apertura y una etiqueta de cierre.</p>
                                    <a href="#" class="stretched-link">Continuar leyendo</a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <img class="bd-placeholder-img" width="50" height="250" src="../media/verde.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    </img>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Primera carta -->
                    <div class="portfolio-modal modal fade" id="portfolioModal1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                <div class="modal-body text-center pb-5">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <!-- Portfolio Modal - Title-->
                                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                    ¿Qué es una etiqueta?</h2>
                                                <!-- Icon Divider-->
                                                <div class="divider-custom">
                                                    <div class="divider-custom-line"></div>
                                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                    <div class="divider-custom-line"></div>
                                                </div><br>
                                                <!-- Portfolio Modal - Image-->
                                                <img class="img-fluid rounded mb-5" src="../media/etiqueta.png" alt="..." />
                                                <!-- Portfolio Modal - Text-->
                                                <p class="mb-4">
                                                    La mayoría de elementos HTML tienen una etiqueta de apertura y una etiqueta de cierre. <br>
                                                    Las etiquetas de apertura se ven así:
                                                    <code> <span class="token tag"><span class="token tag"><span class="token punctuation">
                                                                    << /span>etiqueta
                                                                </span><span class="token punctuation">></span></span></code> <br>
                                                    Las etiquetas de cierre se ven asi:
                                                    <code> <span class="token tag"><span class="token tag"><span class="token punctuation">
                                                                    << /span>/etiqueta
                                                                </span><span class="token punctuation">></span></span></code> <br>
                                                </p>
                                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                                    <i class="fas fa-xmark fa-fw"></i>
                                                    Cerrar ventana
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Primera carta-Ejemplo -->
                    <div class="portfolio-modal modal fade" id="portfolioModal1-Ejemplo">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                <div class="modal-body text-center pb-5">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <!-- Portfolio Modal - Title-->
                                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                    ¿Qué es una etiqueta?</h2>
                                                <!-- Icon Divider-->
                                                <div class="divider-custom">
                                                    <div class="divider-custom-line"></div>
                                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                    <div class="divider-custom-line"></div>
                                                </div><br>
                                                <!-- Portfolio Modal - Image-->
                                                <img class="img-fluid rounded mb-5" src="../media/etiqueta.png" alt="..." />
                                                <div class="ratio ratio-16x9">
                                                    <!-- <iframe src="https://youtu.be/Fo2Zdw8zt7Y" title="YouTube video" allowfullscreen></iframe> -->
                                                        <iframe width="848" height="480" src="https://www.youtube.com/embed/Fo2Zdw8zt7Y" title="etiqueta" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>