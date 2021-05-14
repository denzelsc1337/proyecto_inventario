<?php
//Guardamos los datos el post
$data[1] = $_POST["sku_prod"];
$data[2] = $_POST["proovslct"];
$data[3] = $_POST["producto_categoria"];
$data[4] = $_POST["marca_id"];
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
/* if($_POST['date_in']=="")
echo "<script>alert('Error aqui.')</script>";
exit; */

$oProd = new pProductos();
$r = $oProd->agregarProducto($data);


if($r == 1 ){
	?>
	<h2>Se insert&oacute correctamente</h2>
	<META http-equiv="Refresh" CONTENT="1;
	URL=../vista/MostrarUsuarios.php">
	<?php
}
else{
    echo "sku_prod:\n".$data[1]."<br>";
    echo "proovslct:\n".$data[2]."<br>";
    echo "producto_categoria:\n".$data[3]."<br>";
    echo "marca_id:\n".$data[4]."<br>";
    echo "id_user:\n".$data[5]."<br>";
    echo "producto_nombre:\n".$data[6]."<br>";
    echo "producto_stock_total:\n".$data[7]."<br>";
    echo "date_in:\n".$data[8]."<br>";
    echo "date_out:\n".$data[9]."<br>";
    echo "desc:\n".$data[10]."<br>";
    echo "_gremision:\n".$data[11]."<br>";
    echo "_norden:\n".$data[12]."<br>";
    echo "npecosa:\n".$data[13]."<br>";
    echo "prod_status:\n".$data[14]."<br>";
	?>
	<h2>Error</h2>
	<?php
}


//$date_in,$date_out

?>