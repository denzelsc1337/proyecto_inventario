<?php
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

    if (isset($_POST['actuDespacho'])) {


        $cant_sal = $_POST['cant_sal'];
        $fecha_in = $_POST['fecha_in'];
        $coment = $_POST['coment'];
        $firma = $_POST['firma'];
        

        $query = "UPDATE `detalle_despacho` 
                    SET 
                    `cant_prod_des`='$cant_sal',
                    `fecha_des`='$fecha_in',
                    `comentario`='$coment',
                    `firma_resp`='$firma' 
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