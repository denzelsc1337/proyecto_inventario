<?php
if(isset($_POST['txtUsuario']) && isset($_POST['txtPass'])){
	$user = $_POST['txtUsuario'];
	$pass = $_POST['txtPass'];

	if($user == "" && $pass == ""){
		echo "Datos no definidos";
		?>
		<META http-equiv="Refresh" content = "2 ; URL =../index.php">
		<?php
	}
	else{
		echo "Cargando...";
		require_once("../Modelo/Usuario.php");
			$oUsuario = new usuario();

			$resultado = $oUsuario->login($user, $pass);

			while($file  = mysqli_fetch_row($resultado)){
				if($file[0] == -1){
					echo "ususario: ".$user." no registrado";
					?>
					<META http-equiv="Refresh" content = "2 ; URL =../index.php">
					<?php
				}

				if ($file[0] == -2) {
					echo "clave incorrecta para el usuario: ".$user;
					?>
					<META http-equiv="Refresh" content = "2 ; URL =../index.php">
					<?php
				}

				if ($file[0] > 0) {
					session_start();
					$_SESSION['Autenticado'] = "si";
					$_SESSION["Cargo"] =$file[5];
					?>
					<META http-equiv="Refresh" content = "2 ; URL =../Vista/Principal.php">
					<?php
				}
			}
	}
}
?>