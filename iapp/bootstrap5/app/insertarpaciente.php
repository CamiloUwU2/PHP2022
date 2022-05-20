<?php

require_once 'Bd.php'; //incluyo la cadena de conexion PHP

$nombre = filter_var(trim($_POST['Nombre']),FILTER_DEFAULT);
$apellido = filter_var(trim($_POST['Apellido']),FILTER_DEFAULT);
$email = filter_var(trim($_POST['Email']),FILTER_VALIDATE_EMAIL);
$Tel = filter_var(trim($_POST['Tel']),FILTER_DEFAULT);
$Movil = filter_var(trim($_POST['Movil']),FILTER_DEFAULT);
$Fecha = filter_var(trim($_POST['Fecha']),FILTER_DEFAULT);
$eps = filter_var(trim($_POST['eps']),FILTER_DEFAULT);
$Usuario = filter_var(trim($_POST['Usuario']),FILTER_DEFAULT);
$pass = filter_var(trim($_POST['Pass']),FILTER_DEFAULT);
//encriptacion de la pwd
$pass = password_hash($pass,PASSWORD_DEFAULT);
//hacer el proceso de request - response 


$sql = 'INSERT INTO pacientes(Nombre_paciente,Apellido_paciente,Email_paciente,Telefono_paciente,Movil_paciente,fecha_NacimientoPaciente,eps_paciente,usuario_paciente,Password_paciente) VALUES (?,?,?,?,?,?,?,?,?)';
 //prepara consulta
 $sentencia = $pdo->prepare($sql);

$sentencia->execute([$nombre,$apellido,$email,$Tel,$Movil,$Fecha,$eps,$Usuario,$pass]); //ejecuta la sentencia sql
if($sentencia->rowCount()>=1){
    $_SESSION['tipo']= "primary";
    $_SESSION['Mensaje']= "Operacion Exitosa";
}else{
    $_SESSION['tipo']= "danger";
    $_SESSION['Mensaje']= "Ha ocurrido un error en la insercion!!!";
}

// $result = $sentencia->fetchAll(); //almacena el resultado de la consulta em forma PHP
// var_dump($sentencia->rowCount());
// $resultado = $_SESSION['insercion exitosa!!!'];
header('Location:../frmregistroPaciente.php');

