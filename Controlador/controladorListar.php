<?php
require_once('../../Modelo/Categorias.php');
$oCategoria = new cCategoria();
$listaCategoria = $oCategoria->obtenerCategoria();

require_once('../../Modelo/Productos.php');
$oProducto = new pProductos();
$listaProducto = $oProducto->obtenerProducto();

require_once('../../Modelo/Usuario.php');
$oUsuario1 = new usuario();
$listaUsuario = $oUsuario1->obtenerUsuario();
?>