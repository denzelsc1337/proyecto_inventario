<?php
//Guardamos los datos el post
$data[1] = $_POST["iduser"];
$data[2] = $_POST["nomuser"];
$data[3] = $_POST["usuario_apellido"];
$data[4] = $_POST["usuario_cargo"];
$data[5] = $_POST["username"];
$data[6] = $_POST["pass"];

$data[7] = $_POST["usuario_email"];
$data[8] = $_POST["usuario_telefono"];
$data[9] = $_POST["user_estado"];
$data[10] = $_POST["user_setso"];


require_once('../Modelo/Usuario.php');

$oUser= new usuario();
$r = $oUser->agregarUsuarios($data);
?>