<?php

require_once 'Bd.php'; //incluyo la cadena de conexion PHP
$id = $_POST['id'];
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$email = $_POST['Email'];
$especial = $_POST['Especialidad'];

//hacer el proceso de request - response 

$sql = "UPDATE medico set nombre_medico=?,apellidos_medico=?,email=?,especialidad=? WHERE id_medico={$id}";

$sentencia = $pdo->prepare($sql); //prepara consulta

$sentencia->execute([$nombre,$apellido,$email,$especial]); //ejecuta la sentencia sql

// $result = $sentencia->fetchAll(); //almacena el resultado de la consulta em forma PHP

header('Location:../medicos.php');