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