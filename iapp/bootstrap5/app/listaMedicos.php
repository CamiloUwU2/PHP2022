<?php

require_once 'Bd.php'; //incluyo la cadena de conexion PHP

//hacer el proceso de request - response 

$sql = 'SELECT * FROM medico';

$sentencia = $pdo->prepare($sql); //prepara consulta

$sentencia->execute(); //ejecuta la sentencia sql

$result = $sentencia->fetchAll(PDO::FETCH_OBJ); //almacena el resultado en formato objeto
// echo '<pre>';
// print_r($result);
// echo '</pre>';







