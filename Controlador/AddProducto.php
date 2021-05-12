<?php
//Guardamos los datos el post
$data[1] = $_POST["producto_categoria"];
$data[2] = $_POST["marca_id"];
$data[3] = $_POST["producto_nombre"];
$data[4] = $_POST["producto_stock_total"];

//parse fecha
//$data[5] = $_POST["date_in"];
//$data[6] = $_POST["date_out"];

$$data[5]  = date('Y-m-d', strtotime($_POST['date_in']));
$$data[6] = date('Y-m-d', strtotime($_POST['date_out']));

$data[7] = $_POST["desc"];

$data[8] = $_POST["_norden"];

$data[9] = $_POST["prod_status"];


require_once('../Modelo/Producto.php');

//$date_in,$date_out
$oProd = new pProductos();
$r = $oProd->agregarProducto($data);
?>