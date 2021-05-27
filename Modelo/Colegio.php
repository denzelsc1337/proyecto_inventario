<?php
//require_once('../../config/Conexion.php');

$listColegios;
class cColegios
{

	function __construct()
	{
		$this->listColegios = array();
		$this->listColegioCod = array();
		$this->busquedaCole = array();
	}

	public function obtenerColegios()
	{
		include_once('../../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = 'SELECT * FROM colegios ORDER BY 1 DESC';

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->listColegios[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->listColegios;
	}

	public function buscarColegio($search)
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = 'SELECT * FROM colegios  WHERE
		nom_colegio LIKE "'.$search.'"
		or cod_modu_colegio LIKE "'.$search.'"
		ORDER BY 1 DESC';

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->busquedaCole[] = $fila;
		}

		if ($fila<0) {
			echo "wops...";
		}else{
			$cnx->cerrarConexion($cadena);
			return $this->busquedaCole;
		}

	}

	public function selectorCole()
	{
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = 'SELECT secuence_col, concat(ugel_colegio," - ", nom_colegio) from colegios';

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->listColegioCod[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->listColegioCod;
	}
	function agregarColegios($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$Query = "INSERT INTO `colegios`(`secuence_col`, 
										`cod_modu_colegio`, 
										`ugel_colegio`, 
										`nom_colegio`, 
										`dir_colegio`, 
										`tlf_colegio`, 
										`mail_colegio`, 
										`depa_colegio`, 
										`prov_colegio`, 
										`dist_colegio`, 
										`director_colegio`, 
										`nivel_colegio`)
										VALUES (null,
											'".$data[1]."','".$data[2] . "','".$data[3]."','".$data[4]."',
											'".$data[5]."','".$data[6]."','".$data[7]."','".$data[8]."',
											'".$data[9]."','".$data[10]."','".$data[11]."');";

		echo mysqli_query($cadena, $Query);

		$cnx->cerrarConexion($cadena);

	}
}
?>