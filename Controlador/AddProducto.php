<?php
//Guardamos los datos el post
$data[1] = $_POST["proovslct"];
$data[2] = $_POST["producto_categoria"];
$data[3] = $_POST["_producto_categ"];
$data[4] = $_POST["producto_nombre"];
$data[5] = $_POST["producto_stock_total"];
$data[6] = $_POST["producto_fecha_vencimiento"];
$data[7] = $_POST["desc"];
$data[8] = $_POST["_gremision"];
$data[9] = $_POST["npecosa"];
$data[10] = $_POST["prod_estado"];


require_once('../Modelo/Producto.php');


//insertar un registro mediante procedimiento almacenado
$oCate = new pProductos();
$r = $oCate->agregarProducto($data);
?>