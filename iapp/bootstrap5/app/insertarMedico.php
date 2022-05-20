<?php


require_once 'Bd.php'; //incluyo la cadena de conexion PHP
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$email = $_POST['Email'];
$Especial = $_POST['Especialidad'];


//hacer el proceso de request - response 

$sql = 'INSERT INTO medico(nombre_medico,apellidos_medico,email,especialidad) VALUES (?,?,?,?)';

$sentencia = $pdo->prepare($sql); //prepara consulta

$sentencia->execute([$nombre,$apellido,$email,$Especial]); //ejecuta la sentencia sql

// $result = $sentencia->fetchAll(); //almacena el resultado de la consulta em forma PHP

header('Location:../medicos.php');


