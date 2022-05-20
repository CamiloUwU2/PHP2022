<?php
session_start();
// error_reporting(E_ALL); //esto muestra todos los errores
error_reporting(0); // evita errores al cliente
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/images/nurse.ico" type="image/x-icon">
    <title>C.M. Lourdes </title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <img src="./img/images/LOGO.png" class="img-fluid" alt="...">
            </div>
            <div class="col-md-2">
                cra 100 con 98 <br>
                edificio la ceiba <br>
                cali - valle
            </div>
            <div class="col-md-2">
                Email: ClinicaLouerdes@gmail.com <br>
                citas medicas: 2123345
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./index.php">
                        <img src="./img/1112818.jpg" alt="" width="40" height="28">
                    </a>
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./index.php"><i class="bi bi-house-heart-fill"></i>Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#"><i class="bi bi-info-square-fill"></i>Acerca de</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#"><i class="bi bi-telegram"></i>Citas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#"><i class="bi bi-person-lines-fill"></i>Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#FrmLogin">
                                    <i class="bi bi-box-arrow-in-right"></i> Login
                                </a>
                                <!-- <a class="nav-link" aria-current="page" href="./Panel.php"><i class="bi bi-box-arrow-in-right"></i>Login</a> -->
                            </li>
                        </ul>


                    </div>
                </div>
            </nav>
            <form action="app/insertarpaciente.php" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-<?php echo $_SESSION['tipo']; ?> alert-dismissible fade show" role="alert">
                            <?php
                            echo $_SESSION['Mensaje'];
                            session_unset();
                            ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card mt-3">
                            <div class="card-body">

                                <div class="mb-3">
                                    <label for="ID" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="id" name="id" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="Nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="Nombre" name="Nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="Apellidos" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="Apellido" name="Apellido">
                                </div>
                                <div class="mb-3">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="Email" name="Email">
                                </div>
                                <div class="mb-3">
                                    <label for="Telefono" class="form-label">Telefono</label>
                                    <input type="text" class="form-control" id="Tel" name="Tel">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="Movil" class="form-label">Movil</label>
                                    <input type="text" class="form-control" id="Movil" name="Movil">

                                </div>
                                <div class="mb-3">
                                    <label for="Fecha_Nace" class="form-label">Fecha nacimiento</label>
                                    <input type="date" class="form-control" id="Fecha" name="Fecha">
                                </div>
                                <div class="mb-3">
                                    <label for="EPS" class="form-label">EPS</label>
                                    <input type="text" class="form-control" id="eps" name="eps">
                                </div>
                                <div class="mb-3">
                                    <label for="Usuario" class="form-label">Usuario del sistema</label>
                                    <input type="text" class="form-control" id="Usuario" name="Usuario">
                                </div>
                                <div class="mb-3">
                                    <label for="PassWord" class="form-label">PassWord</label>
                                    <input type="password" class="form-control" id="Pass" name="Pass">
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="submit" class="btn btn-dark"><i class="bi bi-save2-fill"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>
            </form>


            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <!-- <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div> -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./img/imagessss.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./img/HD-wallpaper-anime-11-anime-by.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./img/6fdsfdsfds.jpeg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                    </div>
                                </div>
                            </div>
                            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button> -->
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <div class="row mt-5 p-5 bg-dark text-light">
            <i class="bi bi-hospital-fill"></i>
            <div class="col-md-6">

                cra 100 con 98 <br>
                edificio la ceiba <br>
                cali - valle
            </div>
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="Usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="Usuario" name="Usuario" aria-describedby="UsuarioHelp">
                        <div id="UsuarioHelp" class="form-text">Ingrese su usuario registrada en el sistema</div>
                    </div>
                    <div class="mb-3">
                        <label for="PassWord" class="form-label">Password</label>
                        <input type="PassWord" class="form-control" name="PassWord" id="PassWord">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="check">
                        <label class="form-check-label" for="exampleCheck1">Mostrar la contraseña</label>
                    </div>

                    ¿aun no tiene cuenta? <a href="./frmregistroPaciente.php">registrese aqui</a>

                    <input type="button" value="submit">


                </form>
            </div>
        </div>

        <!-- Modal del login -->
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button> -->

        <!-- Modal -->
        <div class="modal fade" id="FrmLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login del Sistema</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="Usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="Usuario" name="Usuario" aria-describedby="UsuarioHelp">
                            <div id="UsuarioHelp" class="form-text">Ingrese su usuario registrada en el sistema</div>
                        </div>
                        <div class="mb-3">
                            <label for="PassWord" class="form-label">Password</label>
                            <input type="PassWord" class="form-control" name="PassWord" id="PassWord">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="password">
                            <label class="form-check-label" for="exampleCheck1">Mostrar la contraseña</label>
                        </div>

                        ¿aun no tiene cuenta? <a href="./frmregistroPaciente.php">registrese aqui</a>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>




        <!-- Cierre del modal -->
        <!-- no borrar div -->
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>