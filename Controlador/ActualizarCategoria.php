<?php
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

    if (isset($_POST['actualizarData'])) {

        $id = $_POST['idcate'];
        $nombreCate = $_POST['nomcate'];
        $estado = $_POST['estadocate'];

        $query = "UPDATE `categorias` 
                  SET `nom_categoria` = '$nombreCate', `estado_categoria` = '$estado'
                  WHERE `categorias`.`secuence_cat` = '$id'";

        $query_run = mysqli_query($cadena,$query);

        if ($query_run) {
            echo '<script> alert("Categoria Actualizada");</script>';
            header("Location:../Vista/Categoria/listaCategorias.php");
        }else{
            
            echo '<script> alert("Error al actualizar");</script>';
        }

    }


?>