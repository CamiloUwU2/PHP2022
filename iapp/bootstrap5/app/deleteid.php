<?php

require_once 'Bd.php'; //incluyo la cadena de conexion PHP
$id_medico = $_GET['id'];

//hacer el proceso de request - response 

$sql = "DELETE FROM medico WHERE id_medico={$id_medico}";

$sentencia = $pdo->prepare($sql); //prepara consulta

$sentencia->execute(); //ejecuta la sentencia sql

// $result = $sentencia->fetchAll(); //almacena el resultado de la consulta em forma PHP

header('Location:../medicos.php');