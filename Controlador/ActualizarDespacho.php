<?php
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

    if (isset($_POST['actuDespacho'])) {

        $secuence = $_POST['secuence'];
        $usuario_cargo = $_POST['usuario_cargo'];
        $colegio_cod = $_POST['colegio_cod'];
        $prod_cod = $_POST['prod_cod'];
        $cant_sal = $_POST['cant_sal'];
        $fecha_in = $_POST['fecha_in'];
        $coment = $_POST['coment'];
        $firma = $_POST['firma'];
        

        $query = "UPDATE `detalle_despacho` 
                    SET `id_usuario`='$usuario_cargo',`id_colegio`='$colegio_cod',`id_producto`='$prod_cod',`cant_prod_des`='$cant_sal',`fecha_des`='$fecha_in',`comentario`='$coment',`firma_resp`='$firma' 
                    WHERE `secuence_det_des`='$secuence'";

        $query_run = mysqli_query($cadena,$query);

        if ($query_run) {
            echo '<script> alert("Colegio Actualizado");</script>';
            header("Location:../Vista/Despacho/listaDespacho.php");
        }else{
            
            echo '<script> alert("Error al actualizar");</script>';
        }

    }


?>