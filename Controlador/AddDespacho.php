<?php
//Guardamos los datos el post
$data[1] = $_POST["prod_cod"];
$data[2] = $_POST["usuario_cargo"];
$data[3] = $_POST["colegio_cod"];
$data[4] = $_POST["fecha_in"];
$data[5] = $_POST["coment"];
$data[6] = $_POST["firma"];
$data[7] = $_POST["cant_sal"];



require_once('../Modelo/Despacho.php');

$oSalida= new cDespacho();
$r = $oSalida->agregarSalidas($data);
?>