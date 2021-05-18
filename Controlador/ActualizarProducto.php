<?php
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

    if (isset($_POST['actuProd'])) {

        $secuence = $_POST['secuence'];
        $rsocial = $_POST['rsocial'];
        $idecat = $_POST['idecat'];
        $cat_id = $_POST['cat_id'];
        $mar_id = $_POST['mar_id'];
        $pro_id = $_POST['pro_id'];
        $cant = $_POST['cant'];
        $date_in = $_POST['date_in'];

        $query = "UPDATE `productos` 
        SET `razon_social`='$rsocial',`id_categoria`= '$cat_id',`marca_nom`='$mar_id',
        `nom_producto`='$pro_id',`cantidades`='$cant',`fecha_entrada`='$date_in'
        WHERE `secuence_prod`= '$secuence';";

        $query_run = mysqli_query($cadena,$query);

        if ($query_run) {
            echo '<script> alert("Producto Actualizado");</script>';
            header("Location:../Vista/Producto/listaProductos.php");
        }else{
            
            echo '<script> alert("Error al actualizar");</script>';
        }

    }


?>