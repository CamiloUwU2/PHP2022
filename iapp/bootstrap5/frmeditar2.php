<?php

$id = $_GET['id'];
echo $id;

require_once './app/Bd.php';

$sql = 'SELECT * FROM medico where id_medico = ?';

$sentencia = $pdo->prepare($sql); //prepara consulta

$sentencia->execute([$id]); //ejecuta la sentencia sql

$RESULTADO = $sentencia->fetch(PDO::FETCH_OBJ); //creo el arreglo con el resultado 
// echo '<pre>';
// print_r($RESULTADO);
// echo '<pre>';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Editar usuarios</title>
  </head>
  <body>
  <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="./img/719179.png" alt="">
                    <center><h2>editar contacto</h2></center>
                    <div class="card-body">
                    <form action="./app/actulializarmedico.php" method="POST">
                    <div class="mb-3">
                                <label for="exampleNombre" class="form-label">ID</label>
                                <input type="text"id="id" class="form-control" name="id" value="<?php echo $RESULTADO->id_medico ;?>"readonly>
                                
                            </div>
                            <div class="mb-3">
                                <label for="exampleNombre" class="form-label">Nombre</label>
                                <input type="text"id="Nombre" class="form-control" name="Nombre" value="<?php echo $RESULTADO->nombre_medico ;?>">
                                
                            </div>
                            <div class="mb-3">
                            <label for="exampleNombre" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="Apellido" name="Apellido" value="<?php echo $RESULTADO->apellidos_medico ;?>">
                            </div>
                            <div class="mb-3">
                            <label for="exampleNombre" class="form-label">email</label>
                                <input type="email" class="form-control" id="Email" name="Email" value="<?php echo$RESULTADO->email ;?>">
                            </div>
                            <div class="mb-3">
                            <label for="exampleNombre" class="form-label">Especialidad</label>
                                <input type="text" class="form-control" id="Especialidad" name="Especialidad" value="<?php echo $RESULTADO->especialidad;?>">
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>

                    </div>
                </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
