<?php
// require_once('../config/conection.php');

$listUsuarios;

class usuario
{

	function __CONSTRUCT()
	{
		$this->listUsuarios = array();
		$this->selectorTusu = array();
	}

	public function obtenerUsuario()
	{
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = 'SELECT id_usuario, nom_usuario, ape_usuario, UPPER(tusu.detalle_tipo_usuario), cod_usuario, pass_usuario, mail_usuario, tlf_usuario, estado_usuario
					FROM usuario usu
					INNER JOIN tipo_usuario tusu ON usu.id_tipo_usuario = tusu.id_tipo_usuario';

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->listUsuarios[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->listUsuarios;
	}

	public function selectorTipoUsuario()
	{
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = 'SELECT id_tipo_usuario, UPPER(detalle_tipo_usuario) FROM tipo_usuario';

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selectorTusu[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->selectorTusu;
	}

	function agregarUsuarios($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$Query = "INSERT INTO `usuario`(`secuence_usu`, `id_usuario`, `nom_usuario`, `ape_usuario`, `id_tipo_usuario`, `cod_usuario`, `pass_usuario`, `mail_usuario`, `tlf_usuario`, `estado_usuario`)
		VALUES  (null,'" . $data[1] . "','" . $data[2] . "','" . $data[3] . "','" . $data[4] . "','" . $data[5] . "','" . $data[6] . "','" . $data[7] . "','" . $data[8] . "','" . $data[9] . "');";

		echo mysqli_query($cadena, $Query);

		$cnx->cerrarConexion($cadena);
		
	}

	function login($user, $pass)
	{
		try {

			$cnx = new conexion();
			$cadena = $cnx->abrirConexion();

			$query = "call SP_Login('" . $user . "','" . $pass . "')";


			$result = mysqli_query($cadena, $query);

			return $result;

		} catch (Exception $e) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}


	}
}
?>

