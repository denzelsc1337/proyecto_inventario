<?php
require_once('../../Modelo/Categorias.php');
$oCategoria = new cCategoria();
$listaCategoria = $oCategoria->obtenerCategoria();
?>