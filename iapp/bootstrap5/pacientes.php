<?php
    require_once 'plantilla/cabezera.php'

?>


<main class=" ms-sm-auto col-lg-12 px-md-8">
      <div class=" justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom">
        <h1 class="h2">Crud pacientes</h1>
      
      </div>
      <div class="container">
        <div class="row">
            <h1>Agenda de pacientes</h1>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="./img/1112818.jpg" alt="">
                    <center><h2>Registro de Contacto</h2></center>
                    <div class="card-body">
                    
                    <form action="./crud/insertarlista.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleNombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="Nombre" name="Nombre">
                                
                            </div>
                            <div class="mb-3">
                            <label for="exampleNombre" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="Apellido" name="Apellido">
                            </div>
                            <div class="mb-3">
                            <label for="exampleNombre" class="form-label">email</label>
                                <input type="email" class="form-control" id="Email" name="Email">
                            </div>
                            <div class="mb-3">
                            <label for="exampleNombre" class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="Telefono" name="Telefono">
                            </div>
                            <div class="mb-3">
                            <label for="exampleNombre" class="form-label">Movil</label>
                                <input type="text" class="form-control" id="Movil" name="Movil">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="Activo" name="Activo">
                                <label class="form-check-label" for="exampleCheck1">Activo</label>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-dark"><i class="bi bi-save2-fill"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">APellido</th>
                            <th scope="col">Movil</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once './app/listaMedicos.php';
                            foreach ($result as $datos) {
                        ?>
                            <tr>
                                <td><?php echo $datos->id;?></td>
                                <td><?php echo $datos->nombre;?></td>
                                <td><?php echo $datos->apellido;?></td>
                                <td><?php echo $datos->movil;?></td>
                                <td><a href="./frmeditar.php?id=<?php echo $datos->id ?>"type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="crud/deleteid.php?id=<?php echo $datos->id ?>"type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></a></td>
                            </tr> 
                                
                        <?php };?>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>



<?php
 require_once 'plantilla/footer.php'
?>