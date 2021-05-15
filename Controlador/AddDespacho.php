<?php
//Guardamos los datos el post
$data[1] = $_POST["usuario_cargo"];
$data[2] = $_POST["colegio_cod"];
$data[3] = $_POST["prod_cod"];
$data[4] = $_POST["cant_sal"];
$data[5] = $_POST["fecha_in"];
$data[6] = $_POST["coment"];
$data[7] = $_POST["firma"];



require_once('../Modelo/Despacho.php');

$oSalida= new cDespacho();
$r = $oSalida->agregarSalidas($data);
?>