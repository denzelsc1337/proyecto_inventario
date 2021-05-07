<?php
session_start();
require_once '../config/conection.php';
if(isset($_POST['username']) && isset($_POST['password'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if($user == "" || $pass == ""){
		echo "Datos no definidos.Vuelve e ingresar Datos :)";
		?>
		<META http-equiv="Refresh" content = " 0.2; URL = index.php">

		<?php
	}
	else{
		echo "Cargando...";

		$sentencia = $conexion->prepare('select * from usuario where cod_usuario = ? and pass_usuario = ?;');
		$sentencia->execute([$user, $pass]);

		$datos = $sentencia->fetch(PDO::FETCH_OBJ);

		if ($datos === FALSE) {

			header('Location:../index.php');
		}
		elseif($sentencia->rowCount() == 1){

			$_SESSION['name'] = $datos->nom_usuario;
			$_SESSION['last_name'] = $datos->ape_usuario;
			$_SESSION['user'] = $datos->cod_usuario;
			$_SESSION['id_rol'] = $datos->id_tipo_usuario;
			//$_SESSION['tipo_rol'] = $datos->detalle_tipo_usuario;
			$_SESSION['autenticado'] = "si";
			//header('Location:Main.php');
			?>

			<META http-equiv="Refresh" content = "0.3 ; URL =../Vista/principal.php">
			<?php
		}



	}
}
?>