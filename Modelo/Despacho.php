<?php

$listSalida;

class cDespacho
{

	function __CONSTRUCT()
	{
		$this->listSalida = array();

	}


	function agregarSalidas($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$Query = "INSERT INTO `detalle_despacho` (`secuence_det_des`, `id_usuario`, `id_colegio`, `id_producto`, 
                        `cant_prod_des`, `fecha_des`, `comentario`, `firma_resp`) 
                         VALUES (NULL,'" . $data[1] . "','" . $data[2] . "','".$data[3]."','" . $data[4] . "',
                       '".$data[5]."','" . $data[6] . "','" . $data[7] . "');";

		echo mysqli_query($cadena, $Query);

		$cnx->cerrarConexion($cadena);
		
	}

}
?>

