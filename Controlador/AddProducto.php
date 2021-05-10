<?php
//Guardamos los datos el post
$data[1] = $_POST["producto_categoria"];
$data[2] = $_POST["marca"];
$data[3] = $_POST["producto_nombre"];
$data[4] = $_POST["producto_stock_total"];

//parse fecha
$data[5] = $_POST["date_in"];
$d_in=date("dd-mm-yyyy h:i:s",strtotime($data[5]));

$data[6] = $_POST["producto_fecha_vencimiento"];
$d_out=date("dd-mm-yyyy h:i:s",strtotime($data[6]));

$data[7] = $_POST["desc"];
$data[8] = $_POST["_gremision"];
$data[9] = $_POST["_norden"];
$data[10] = $_POST["npecosa"];
$data[11] = $_POST["prod_estado"];


require_once('../Modelo/Producto.php');


//insertar un registro mediante procedimiento almacenado
$oCate = new pProductos();
$r = $oCate->agregarProducto($data);
?>