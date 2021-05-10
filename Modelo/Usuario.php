<?php
// require_once('../config/conection.php');

$listaUsuarios;

class usuario
{

	function __CONSTRUCT()
	{
		$this->listaUsuarios = array();
	}

	public function obtenerUsuario()
	{
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = 'select * from usuario';

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->listaUsuarios[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->listaUsuarios;
	}

	function agregarUsuarios($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
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

