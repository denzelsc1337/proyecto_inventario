<?php

$listSalida;

class cDespacho
{

	function __CONSTRUCT()
	{
		$this->listSalida = array();

	}

	public function obtenerSalidas()
	{
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = 'SELECT col.nom_colegio, cat.nom_categoria, prod.nom_producto, prod.cantidades, 
					desp.fecha_des, usu.id_usuario, concat(usu.nom_usuario, "  " , usu.ape_usuario) 
					FROM detalle_despacho desp 
					INNER JOIN colegios col ON desp.id_colegio = col.secuence_col 
					INNER JOIN productos prod ON desp.id_producto = prod.secuence_prod 
					INNER JOIN usuario usu ON desp.id_usuario = usu.secuence_usu
					INNER JOIN categorias cat ON prod.id_categoria = cat.secuence_cat
					ORDER BY 1 ASC';

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->listSalida[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->listSalida;
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

