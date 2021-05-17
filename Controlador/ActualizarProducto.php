<?php
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

    if (isset($_POST['actualizarData'])) {

        $idProd = $_POST['idProd'];
        $sku_prod = $_POST['sku_prod'];
        $proovslct = $_POST['proovslct'];
        $producto_categoria = $_POST['producto_categoria'];
        $marca_id = $_POST['marca_id'];
        $id_user = $_POST['id_user'];
        $producto_nombre = $_POST['producto_nombre'];
        $producto_stock_total = $_POST['producto_stock_total'];
        $date_in = $_POST['date_in'];
        $date_out = $_POST['date_out'];
        $desc = $_POST['desc'];
        $_gremision = $_POST['_gremision'];
        $_norden = $_POST['_norden'];
        $npecosa = $_POST['npecosa'];
        $estado = $_POST['prod_status'];

        $query = "UPDATE `productos` SET `id_proveedor` = '2', `id_categoria` = '2', 
        `id_marca` = '2', `nom_producto` = 'Lapices', `cantidades` = '16', 
        `fecha_entrada` = '2021-05-17', `perecible` = '0' 
        WHERE `productos`.`secuence_prod` = 2;";

        $query_run = mysqli_query($cadena,$query);

        if ($query_run) {
            echo '<script> alert("Producto Actualizado");</script>';
            header("Location:../Vista/Categoria/listaProductos.php");
        }else{
            
            echo '<script> alert("Error al actualizar");</script>';
        }

    }


?>