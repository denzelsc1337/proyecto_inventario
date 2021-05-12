<?php
//require_once('../../config/Conexion.php');

class cMarca
{

	function __construct()
	{
		$this->selectorMarca= array();
	}


	public function selectorMarca()
	{
		include_once('../../config/Conexion.php');

		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = 'select id_marca, nom_marca from marca';

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selectorMarca[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->selectorMarca;
	}
}
