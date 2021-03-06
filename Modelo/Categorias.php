<?php
//require_once('../../config/Conexion.php');

$listCategoria;

class cCategoria
{

	function __construct()
	{
		$this->listCategoria = array();
		$this->selectorCateg = array();
	}

	public function obtenerCategoria()
	{
		include_once('../../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = 'SELECT * FROM categorias ORDER BY 1 desc';

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->listCategoria[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->listCategoria;

		/* while ($fila = mysqli_fetch_row($resultado)) {
			$this->listCategoria[] = $fila;
		}

		$cnx->cerrarConexion($cadena) ;

		return $resultado;*/
	}

	public function selectorCategorias()
	{
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = 'select secuence_cat, nom_categoria from categorias';

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selectorCateg[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->listCategoria;
	}



	function agregarCategorias($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$Query = "INSERT INTO `categorias` (`secuence_cat`, `id_categoria`, `nom_categoria`, `estado_categoria`)
		VALUES  (null,'" . $data[1] . "','" . $data[2] . "','" . $data[3] . "');";

		echo mysqli_query($cadena, $Query);

		$cnx->cerrarConexion($cadena);

	}

}
