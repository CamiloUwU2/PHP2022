<?php
    require_once 'plantilla/cabezera.php'

?>


<main class=" ms-sm-auto col-lg-12 px-md-4">
      <div class=" justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom">
        <h1 class="h2">Crud medicos</h1>
      
      </div>
      <div class="container">
        <div class="row">
            <h1>Agenda de Medicos</h1>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="./img/1112818.jpg" alt="">
                    <div class="card-body">
                    
                    <form action="app/insertarMedico.php" method="POST">
                    <div class="mb-3">
                                <label for="exampleNombre" class="form-label">ID</label>
                                <input type="text" class="form-control" id="id" name="id" readonly>
                                
                            </div>
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
                            <label for="exampleNombre" class="form-label">Especialidad</label>
                                <input type="text" class="form-control" id="Especialidad" name="Especialidad">
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
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Especialidad</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once 'app/listaMedicos.php';
                            foreach ($result as $datos) {
                        ?>
                            <tr>
                                <td><?php echo $datos->id_medico;?></td>
                                <td><?php echo $datos->nombre_medico;?></td>
                                <td><?php echo $datos->apellidos_medico;?></td>
                                <td><?php echo $datos->email;?></td>
                                <td><?php echo $datos->especialidad;?></td>
                                <td><a href="frmeditar2.php?id=<?php echo $datos->id_medico ?>"type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="./app/deleteid.php?id=<?php echo $datos->id_medico ?>"type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></a></td>
                                
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