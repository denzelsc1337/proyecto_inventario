<?php 
require_once('../../Modelo/Categorias.php');
$oCategoria = new cCategoria();
$listaCategoria = $oCategoria->obtenerCategoria();
$selectorCateg = $oCategoria->selectorCategorias();


require_once('../../Modelo/Productos.php');
$oProducto = new pProductos();
$listaProducto = $oProducto->obtenerProducto();

require_once('../../Modelo/Usuario.php');
$oUsuario1 = new usuario();
$listaUsuario = $oUsuario1->obtenerUsuario();
$selectorTusu = $oUsuario1->selectorTipoUsuario();

require_once('../../Modelo/Colegio.php');
$oColegio = new cColegios();
$listaColegio = $oColegio->obtenerColegios();

require_once('../../Modelo/Marca.php');
$oMarca = new cMarca();
$selectorMarca = $oMarca->selectorMarca();

require_once('../../Modelo/Proveedor.php');
$oProv = new cProvee();
$selectorProv = $oProv->selectorProv();


// REPORTES
require_once('../../Modelo/Reportes.php');
$oReporte = new rReporte();
$listaRxStock = $oReporte->RxStock();
$listaRxCategoria = $oReporte->RxCategoria();
$listaRxVencimiento = $oReporte->RxVencimiento();
$listaRxEntrada = $oReporte->RxEntrada();
?>
