<?php
require_once('../../Modelo/Categorias.php');
$oCategoria = new cCategoria();
$listaCategoria = $oCategoria->obtenerCategoria();
?>
<?php
require_once('../../Modelo/Productos.php');
$oProducto = new pProductos();
$listaProducto = $oProducto->obtenerProducto();
?>