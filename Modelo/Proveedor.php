<?php
//require_once('../../config/Conexion.php');

class cProvee
{

	function __construct()
	{
		$this->selectorProv= array();
	}


	public function selectorProv()
	{
		include_once('../../config/Conexion.php');

		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = 'select id_proveedor, razon_social from proveedor';

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selectorProv[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->selectorProv;
	}
}
