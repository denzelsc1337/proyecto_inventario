<?php
//Guardamos los datos el post
$data[1] = $_POST["cod_cate"];
$data[2] = $_POST["marca_prod"];
$data[3] = $_POST["ruc_pro"];
$data[4] = $_POST["razon"];
$data[5] = $_POST["id_user"];
$data[6] = $_POST["producto_nombre"];
$data[7] = $_POST["producto_stock_total"];


//parse fecha
$data[8] = $_POST["date_in"];
$data[9] = $_POST["date_out"];
/* $data[8] = date("y-m-d", "2021-11-23");
$data[9] = date("y-m-d", "2021-11-30"); */

$data[10] = $_POST["desc"];
$data[11] = $_POST["_gremision"];
$data[12] = $_POST["_norden"];
$data[13] = $_POST["npecosa"];
$data[14] = $_POST["prod_status"];

require_once('../Modelo/Productos.php');

/* if ($data[9] == '01-01-0001') {
    $data[9]=NULL;
}else{
    $data[9]=$_POST['date_out'];
} */

$oProd = new pProductos();
$r = $oProd->agregarProducto($data);

?>