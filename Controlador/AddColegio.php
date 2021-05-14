<?php
//Guardamos los datos el post
$data[1] = $_POST["cod_mod"];
$data[2] = $_POST["cod_ugel"];
$data[3] = $_POST["nom_cole"];
$data[4] = $_POST["dir_cole"];
$data[5]  = $_POST['num_cole'];
$data[6] = $_POST['email_cole'];
$data[7] = $_POST["dpto_cole"];
$data[8] = $_POST["prov_cole"];
$data[9] = $_POST["dsto_cole"];
$data[10] = $_POST["loc_cole"];
$data[11] = $_POST["nivel_cole"];


require_once('../Modelo/Colegio.php');

//$date_in,$date_out
$oCole = new cColegios();
$r = $oCole->agregarColegios($data);
?>