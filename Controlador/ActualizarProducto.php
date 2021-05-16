<?php
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

    if (isset($_POST['actualizarData'])) {

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

        $query = "UPDATE `productos` 
                    SET `SKU_producto`='$sku_prod',`id_proveedor`='$proovslct',`id_categoria`='$producto_categoria',`id_marca`='$marca_id',
                    `id_usuario`='$id_user',`nom_producto`='$producto_nombre',`cantidades`='$producto_stock_total',`fecha_entrada`='$date_in',`fecha_vencimento`='$date_out',
                    `descripcion`='$desc',`guia_remision`='$_gremision',`num_orden`='$_norden',`num_pecosa`='$npecosa' 
                    WHERE `productos`.`SKU_producto` = '$id'";

        $query_run = mysqli_query($cadena,$query);

        if ($query_run) {
            echo '<script> alert("Producto Actualizado");</script>';
            header("Location:../Vista/Categoria/listaProductos.php");
        }else{
            
            echo '<script> alert("Error al actualizar");</script>';
        }

    }


?>