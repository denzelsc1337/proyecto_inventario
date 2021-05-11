<?php
//require_once('../../config/Conexion.php');

$listColegios;
class cColegios
{

	function __construct()
	{
		$this->listColegios = array();
	}

	public function obtenerColegios()
	{
		include_once('../../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = 'select * from colegios';

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->listColegios[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->listColegios;
	}
}
