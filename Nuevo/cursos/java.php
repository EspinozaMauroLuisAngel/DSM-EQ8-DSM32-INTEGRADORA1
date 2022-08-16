<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Curso Java | AprendiendoAndo</title>
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
                                <a class="nav-link" href="#variables">Declarar variables</a>
                                <a class="nav-link" href="#"></a>
                                <a class="nav-link" href="#"></a>
                                <a class="nav-link" href="#"></a>
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
                    <h1 class="mt-4">Curso de Java básico</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../index.php">Estoy aprendiendo</a></li>
                        <li class="breadcrumb-item active">Curso de HTML básico</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="mb-0">
                            Java es un lenguaje de programación y una plataforma informática que fue comercializada por primera vez en 1995 por Sun Microsystems. </p>
                        </div>
                    </div>
                    <!-- Primera carta -->
                    <div class="row mb-2" id="variables">
                        <div class="col-md-6">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-primary">#Nota</strong>
                                    <h3 class="mb-0">Declarar variables</h3>
                                    <div class="mb-1 text-muted">Jun 13</div>
                                    <p class="card-text mb-auto">Las variables permiten a los ordenadores almacenar y manipular datos de forma dinámica. Hacen esto usando una "etiqueta" para apuntar a los datos en lugar de usar los datos en sí.</p>
                                    <a href="#" class="stretched-link">Continuar leyendo</a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <img class="bd-placeholder-img" width="50" height="100%" src="../media/azul.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    </img>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" data-bs-toggle="modal" data-bs-target="#portfolioModal1-Ejemplo">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-success">#Ejemplo - Declarar variables<i class="fas fa-star"></i></strong>
                                    <h3 class="mb-0">Declarar variables</h3>
                                    <div class="mb-1 text-muted">Jun 13</div>
                                    <p class="card-text mb-auto">Las variables permiten a los ordenadores almacenar y manipular datos de forma dinámica. Hacen esto usando una "etiqueta" para apuntar a los datos en lugar de usar los datos en sí.</p>
                                    <a href="#" class="stretched-link">Continuar leyendo</a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <img class="bd-placeholder-img" width="50" height="100%" src="../media/verde.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    </img>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Segunda carta -->
                    <div class="row mb-2" id="variables">
                        <div class="col-md-6">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" data-bs-toggle="modal" data-bs-target="#portfolioModal1-variable">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-primary">#Nota</strong>
                                    <h3 class="mb-0">Almacenar valores</h3>
                                    <div class="mb-1 text-muted">Ago 13</div>
                                    <p class="card-text mb-auto">En JavaScript, puedes almacenar un valor en una variable con el operador de asignación (=).</p>
                                    <a href="#" class="stretched-link">Continuar leyendo</a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <img class="bd-placeholder-img" width="50" height="100%" src="../media/azul.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    </img>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" data-bs-toggle="modal" data-bs-target="#portfolioModal1-Ejemplo-variable">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-success">#Ejemplo - Declarar variables<i class="fas fa-star"></i></strong>
                                    <h3 class="mb-0">Almacenar valores</h3>
                                    <div class="mb-1 text-muted">Ago 13</div>
                                    <p class="card-text mb-auto">En JavaScript, puedes almacenar un valor en una variable con el operador de asignación (=).</p>
                                    <a href="#" class="stretched-link">Continuar leyendo</a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <img class="bd-placeholder-img" width="50" height="100%" src="../media/verde.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    </img>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tercera carta -->
                    <div class="row mb-2" id="variables">
                        <div class="col-md-6">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" data-bs-toggle="modal" data-bs-target="#portfolioModal1-variable-otra">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-primary">#Nota</strong>
                                    <h3 class="mb-0">Una variable a otra variable</h3>
                                    <div class="mb-1 text-muted">Ago 14</div>
                                    <p class="card-text mb-auto">Después de asignar un valor a una variable usando el operador de asignación, puedes asignar el valor de esa variable a otra variable usando el mismo operador de asignación.</p>
                                    <a href="#" class="stretched-link">Continuar leyendo</a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <img class="bd-placeholder-img" width="50" height="100%" src="../media/azul.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    </img>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" data-bs-toggle="modal" data-bs-target="#portfolioModal1-Ejemplo-otra">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-success">#Ejemplo - Una variable a otra variable<i class="fas fa-star"></i></strong>
                                    <h3 class="mb-0">Una variable a otra variables</h3>
                                    <div class="mb-1 text-muted">Ago 14</div>
                                    <p class="card-text mb-auto">Después de asignar un valor a una variable usando el operador de asignación, puedes asignar el valor de esa variable a otra variable usando el mismo operador de asignación.</p>
                                    <a href="#" class="stretched-link">Continuar leyendo</a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <img class="bd-placeholder-img" width="50" height="100%" src="../media/verde.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
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
                                                    Declarar variables</h2>
                                                <!-- Icon Divider-->
                                                <div class="divider-custom">
                                                    <div class="divider-custom-line"></div>
                                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                    <div class="divider-custom-line"></div>
                                                </div><br>
                                                <!-- Portfolio Modal - Image-->
                                                <!-- <img class="img-fluid rounded mb-5" src="../media/etiqueta.png" alt="..." /> -->
                                                <!-- Portfolio Modal - Text-->
                                                <p class="mb-4">
                                                    JavaScript proporciona ocho tipos de datos diferentes, los cuales son <code>undefined</code> , <code>null</code>, <code> boolean </code>, <code>string</code>, <code>symbol</code>,<code>bigint</code>, <code>number</code>, y <code>object</code>. <br>
                                                    Las variables son similares a las variables x, e y que usan en matemáticas, lo que significa que son un nombre simple para representar los datos a los que queremos hacer referencia.
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
                                                    ¿Como declaro una variable?</h2>
                                                <!-- Icon Divider-->
                                                <div class="divider-custom">
                                                    <div class="divider-custom-line"></div>
                                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                    <div class="divider-custom-line"></div>
                                                </div><br>
                                                <!-- Portfolio Modal - Image-->
                                                <p>Le decimos a JavaScript que cree o declare una variable poniendo la palabra clave var delante de ella, así:</p>
                                                <!-- <img class="img-fluid rounded mb-5" src="../media/variable.png" alt="..." /> -->
                                                <div class="ratio ratio-16x9">
                                                    <iframe width="848" height="480" src="https://www.youtube.com/embed/AhLokFbxAy8" id="variable" title="variable" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Segunda carta -->
                <div class="portfolio-modal modal fade" id="portfolioModal1-variable">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                Almacenar variables</h2>
                                            <!-- Icon Divider-->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div><br>
                                            <!-- Portfolio Modal - Image-->
                                            <!-- <img class="img-fluid rounded mb-5" src="../media/etiqueta.png" alt="..." /> -->
                                            <!-- Portfolio Modal - Text-->
                                            <p class="mb-4">
                                            En JavaScript, puedes almacenar un valor en una variable con el operador de asignación (=). <br>
                                            <img class="img-fluid rounded mb-5" src="../media/alma-variable.png" alt=""> <br>
                                            Esto asigna el valor numérico (<code>number</code>) 5 a miVariable.
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
                <!-- Segunda  carta-Ejemplo -->
                <div class="portfolio-modal modal fade" id="portfolioModal1-Ejemplo-variable">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                ¿Como almaceno una variable?</h2>
                                            <!-- Icon Divider-->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div><br>
                                            <!-- Portfolio Modal - Image-->
                                            <p>Primero, crea una variable llamada myVar. Luego, el código asigna 5 a myVar. Ahora, si myVar aparece de nuevo en el código, el programa lo tratará como si fuera 5.</p>
                                            <!-- <img class="img-fluid rounded mb-5" src="../media/variable.png" alt="..." /> -->
                                            <div class="ratio ratio-16x9">
                                            <iframe width="848" height="480" src="https://www.youtube.com/embed/zIw22qrgAnA" title="almacenarVariables" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--///////////////////////////////////////////  -->
                <!-- Tercera carta -->
                <div class="portfolio-modal modal fade" id="portfolioModal1-variable-otra">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                Una variable a otra variable</h2>
                                            <!-- Icon Divider-->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div><br>
                                            <p class="mb-4">
                                            Después de asignar un valor a una variable usando el operador de asignación, puedes asignar el valor de esa variable a otra variable usando el mismo operador de asignación. <br>
                                            <img class="img-fluid rounded mb-5" src="../media/otra-variable.png" alt=""> <br>
                                            Lo anterior declara una variable myVar sin valor, y luego le asigna el valor 5. A continuación, una variable llamada myNum es declarada, tambien sin valor. Luego, el contenido de myVar (que es 5) se asigna a la variable myNum. Ahora, myNum también tiene el valor de 5.
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
                <!-- Tercera  carta-Ejemplo -->
                <div class="portfolio-modal modal fade" id="portfolioModal1-Ejemplo-otra">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                Una variable a otra variable</h2>
                                            <!-- Icon Divider-->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div><br>
                                            <!-- Portfolio Modal - Image-->
                                            <p>Asigna el contenido de <code>a</code> a la variable <code>b</code>.</p>
                                            <!-- <img class="img-fluid rounded mb-5" src="../media/variable.png" alt="..." /> -->
                                            <div class="ratio ratio-16x9">
                                            <iframe width="848" height="480" src="https://www.youtube.com/embed/7Qgo0AFtXIk" title="Una variable a otra variable" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>