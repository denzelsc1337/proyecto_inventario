<?php
require_once('../Modelo/Categorias.php');
$data[1]= $_POST["cod_cate"];
$data[2]= $_POST["categoria_nombre"];
$data[3]= $_POST["categoria_estado"];

$oCate = new cCategoria();
$r = $oCate->agregarCategorias($data);
?>