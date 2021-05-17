<?php
include_once('../../config/Conexion.php');
require_once('../../config/security.php');

/*if(isset($_SESSION['user'])){
        header('Location:Main.php');
    }*/
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>SISTEMA VENTAS</title>

    <!-- Normalize V8.0.1 -->
    <link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/normalize.css">

    <!-- Bootstrap V4.3 -->
    <link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/bootstrap.min.css">

    <!-- Bootstrap Material Design V4.0 -->
    <link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/bootstrap-material-design.min.css">

    <!-- Font Awesome V5.9.0 -->
    <!-- <link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/all.css"> -->
    <!-- <link rel="stylesheet" href="Vista/css/all.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="../css/all.css">

    <!-- Sweet Alerts V8.13.0 CSS file -->
    <link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/sweetalert2.min.css">

    <!-- Sweet Alert V8.13.0 JS file-->
    <script src="http://systems.designlopers.com/SVI/vistas/js/sweetalert2.min.js"></script>

    <!-- General Styles -->
    <!-- <link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/style.css"> -->

    <!-- jQuery V3.4.1 -->
    <script src="http://systems.designlopers.com/SVI/vistas/js/jquery-3.4.1.min.js"></script>

    <style>
        .frm {
            padding: 50px !important;
        }

        .title {
            padding-top: 30px;
            font-size: 40px;
        }

        .thead {
            color: #fff;
            background-color: #343a40;
        }
    </style>

</head>
<main class="full-box main-container Blogger">

    <H1 class="text-center title Gagalin">REPORTE DE PRODUCTO POR CATEGORIA</H1>

    <div class="table-responsive frm">
        <?php
        require_once('../../Controlador/controladorListar.php');
        ?>
        <table class="table table-sm">
            <thead>
                <caption>REPORTE DE PRODUCTO POR CATEGORIA</caption>
                <tr class="text-center roboto-medium thead">
                    <th>Categoria</th>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>Cantidades</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listaRxCategoria as $vistaRepo) {
                ?>
                    <tr class="text-center">
                        <td><?php echo $vistaRepo[0] ?></td>
                        <td><?php echo $vistaRepo[1] ?></td>
                        <td><?php echo $vistaRepo[2] ?></td>
                        <td><?php echo $vistaRepo[3] ?></td>
                    </tr>
            </tbody>
        <?php
                }
        ?>
        </table>
    </div>

</main>