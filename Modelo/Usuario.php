<?php
require_once('../config/conection.php');
class usuario{

  private $listaUsuario;

  public function __CONSTRUCT()
  {
  	$this->listaUsuario = array();
  }
	function login($user, $pass){


		try {

		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "call SP_Login('".$user."','".$pass."')";


		$result = mysqli_query($cadena, $query);

		return $result;

		} catch (Exception $e) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}

	}
}
?>

