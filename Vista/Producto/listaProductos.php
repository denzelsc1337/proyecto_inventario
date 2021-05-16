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
    <link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/style.css">

    <!-- jQuery V3.4.1 -->
    <script src="http://systems.designlopers.com/SVI/vistas/js/jquery-3.4.1.min.js"></script>
</head>

<body class="Blogger">
    <!-- Main container -->
    <main class="full-box main-container">
        <!-- Nav lateral -->
        <section class="full-box nav-lateral">
            <div class="full-box nav-lateral-bg show-nav-lateral"></div>
            <div class="full-box nav-lateral-content scroll">
                <figure class="full-box nav-lateral-avatar">
                    <i class="far fa-times-circle show-nav-lateral"></i>
                    <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Male_4.png" class="img-fluid" alt="Avatar">
                    <figcaption class="text-center Blogger" style="font-size: 22px;">
                        <?php echo $_SESSION['name']; ?><br><small class="Blogger">
                            <?php
                            switch ($_SESSION['id_rol']) {
                                case '1':
                                    echo "Administrador";
                                    break;
                                case '2':
                                    echo "Operador";
                                    break;
                                default:
                                    break;
                            }

                            ?></small>
                    </figcaption>
                </figure>
                <div class="full-box nav-lateral-bar"></div>
                <nav class="full-box nav-lateral-menu">
                    <ul>
                        <li>
                            <a href="../principal.php" class="Blogger">
                                <i class="fab fa-dashcube fa-fw"></i> &nbsp; Menu Principal
                            </a>
                        </li>

                        <li>
                            <a href="" class="nav-btn-submenu Blogger">
                                <i class="fas fa-briefcase fa-fw"></i> &nbsp; Administración <i class="fa fa-chevron-down"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="../Categoria/Categoria.php" class="Blogger">
                                        <i class="fa fa-tags fa-fw"></i> &nbsp; Categorías
                                    </a>
                                </li>
                                <li>
                                    <a href="../Categoria/listaColegios.php" class="Blogger">
                                        <i class="fa fa-school fa-fw"></i> &nbsp; Colegios
                                    </a>
                                </li>

                                <li>
                                    <a href="../Categoria/Usuario.php" class="Blogger">
                                        <i class="fa fa-user-tie fa-fw"></i> &nbsp; Usuarios
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="../Despacho/Despacho.php" class="Blogger">
                                        <i class="fa fa-clipboard-check fa-fw"></i> &nbsp; Despachos
                                    </a>
                                </li> -->
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu Blogger"><i class="fa fa-boxes fa-fw"></i> &nbsp; Gestión De Productos <i class="fa fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="../Producto/Productos.php" class="Blogger">
                                        <i class="fa fa-box fa-fw"></i> &nbsp; Nuevo producto
                                    </a>
                                </li>
                                <li>
                                    <a href="../Producto/listaProductos.php" class="Blogger">
                                        <i class="fa fa-boxes fa-fw"></i> &nbsp; Productos en almacén
                                    </a>
                                </li>
                                <li>
                                    <a href="../Despacho/Despacho.php" class="Blogger">
                                        <i class="fa fa-clipboard-check fa-fw"></i> &nbsp; Salida de producto
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-btn-submenu Blogger"><i class="fa fa-file-invoice fa-fw"></i> &nbsp; Reportes <i class="fa fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="../Reporte/Reportes.php" class="Blogger">
                                        <i class="fa fa-file-invoice fa-fw"></i> &nbsp; Reportes
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- Page content -->
        <section class="full-box page-content scroll">
            <nav class="full-box navbar-info">
                <a href="#" class="float-left show-nav-lateral">
                    <i class="fa fa-bars"></i>
                </a>
                <a href="#" class="Blogger"> Actualizar usuario
                    <i class="fa fa-cogs"></i>
                </a>
                <a href="../config/logout.php" class="Blogger">Cerrar Sesión
                    <i class="fa fa-power-off"></i>
                </a>
            </nav>

            <!-- Page header -->

            <div class="full-box page-header">
                <h3 class="text-left text-uppercase Gagalin">
                    <i class="fas fa-boxes fa-fw"></i> &nbsp; Productos en almacen
                </h3>
                <p class="text-justify">
                    En el módulo PRODUCTOS podrá ingresar nuevos productos al sistema, actualizar datos de los productos,
                    ver los productos en almacén.
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs text-uppercase Gagalin">
                    <li>
                        <a href="../Producto/Productos.php">
                            <i class="fas fa-box fa-fw"></i> &nbsp; Nuevo producto
                        </a>
                    </li>
                    <li>
                        <a class="active" href="../Producto/listaProductos.php">
                            <i class="fas fa-boxes fa-fw"></i> &nbsp; Productos en almacen
                        </a>
                    </li>
                    <!--                    <li>
                        <a href="../Producto/Producto-Categorias.php">
                            <i class="fab fa-shopify fa-fw"></i> &nbsp; Productos por categoría
                        </a>
                    </li> -->
                    <!--                     <li>
                        <a href="../Producto/Producto-Vencimiento.php">
                            <i class="fas fa-history fa-fw"></i> &nbsp; Productos por vencimiento
                        </a>
                    </li> -->
                    <!--                 <li>
                        <a href="../Producto/Producto-Stock.php">
                            <i class="fas fa-stopwatch-20 fa-fw"></i> &nbsp; Productos en stock mínimo
                        </a>
                    </li> -->
                    <!--                     <li>
                        <a href="../Producto/BuscarProducto.php">
                            <i class="fas fa-search fa-fw"></i> &nbsp; Buscar productos
                        </a>
                    </li> -->
                </ul>
            </div>

            <div class="container-fluid" style="background-color: #FFF; padding-bottom: 20px;">

                <div class="table-responsive">
                    <?php
                    require_once('../../Controlador/controladorListar.php');
                    ?>
                    <table class="table table-dark table-sm">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th>№ Almacen</th>
                                <th>Proveedor</th>
                                <th>Categoria</th>
                                <th>Marca</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Fecha I</th>
                                <th>Habilitado/Deshabilitado</th>
                                <th>Editar</th>
                                <!-- <button id="btnEnble">Enable</button> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listaProducto as $vistaProd) {
                            ?>
                                <tr class="text-center">
                                    <td><?php echo $vistaProd[0] ?></td>
                                    <td><?php echo $vistaProd[2] ?></td>
                                    <td><?php echo $vistaProd[3] ?></td>
                                    <td><?php echo $vistaProd[4] ?></td>
                                    <td><?php echo $vistaProd[5] ?></td>
                                    <td><?php echo $vistaProd[6] ?></td>
                                    <td><?php echo $vistaProd[7] ?></td>

                                    <td>
                                        <?php
                                        $hide = "";
                                        if ($_SESSION['id_rol'] == '2') {
                                            $hide = "style='display:none;'";
                                        }
                                        if ($vistaProd[8] == 1) {
                                        ?>
                                            <input type="checkbox" name="producto_estado" value="1" checked="" disabled>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php
                                        } else {
                                        ?>
                                            <input type="checkbox" name="producto_estado" value="0" disabled>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#exampleModal" <?php echo $hide; ?>>
                                            Actualizar
                                        </button>
                                    </td>

                                </tr>
                        </tbody>
                    <?php
                            }
                    ?>
                    </table>
                </div>


                <!-- <p class="text-right">Mostrando productos <strong>1</strong> al <strong>15</strong> de un <strong>total de 101</strong></p>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link"><i class="fas fa-angle-double-left"></i></a></li>
                        <li class="page-item"><a class="page-link active" href="http://systems.designlopers.com/SVI/product-list/1/">1</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-list/2/">2</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-list/3/">3</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-list/4/">4</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-list/5/">5</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-list/6/">6</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-list/7/">7</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-list/2/">Siguiente</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-list/7/"><i class="fas fa-angle-double-right"></i></a></li>
                    </ul>
                </nav> -->
            </div>
        </section>
    </main>
    <!----------------------------------------------------------- Modal ----------------------------------------------------------------->
    <div class="modal fade" id="editpro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../../Controlador/ActualizarProducto.php" method="POST">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Codigo de Ingreso de Producto</label>
                                        <input type="number" class="form-control input-barcode" name="sku_prod" id="sku_prod" maxlength="97">
                                    </div>
                                </div>


                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Proveedor</label>
                                        <?php
                                        require_once('../../Controlador/controladorListar.php');
                                        ?>
                                        <select class="form-control" name="proovslct" id="proovslct">
                                            <option value="" selected="">Seleccione una opción</option>
                                            <?php
                                            foreach ($selectorProv as $cboProv) {
                                            ?>
                                                <option value="<?php echo $cboProv[0]; ?>"><?php echo $cboProv[1]; ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Categoría</label>
                                        <?php
                                        require_once('../../Controlador/controladorListar.php');
                                        ?>

                                        <select class="form-control" name="producto_categoria" id="producto_categoria">
                                            <option value="" selected="">Seleccione una opción</option>
                                            <?php
                                            foreach ($selectorCateg as $cboCate) {
                                            ?>
                                                <option value="<?php echo $cboCate[1]; ?>"><?php echo $cboCate[2]; ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Marca</label>
                                        <?php
                                        require('../../Controlador/controladorListar.php');
                                        ?>
                                        <select class="form-control" name="marca_id" id="marca_id">
                                            <option value="" selected="">Selecciona una marca </option>
                                            <?php
                                            foreach ($selectorMarca as $cboMarca) {
                                            ?>
                                                <option value="<?php echo $cboMarca[0]; ?>"><?php echo $cboMarca[1]; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4" hidden>
                                    <div class="form-group">
                                        <label>User code</label>
                                        <input type="number" class="form-control input-barcode" name="id_user" id="id_user" value="<?php echo $_SESSION['secuence_usu']; ?>" maxlength="97">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label>Nombre del Producto</label>
                                        <input type="text" class="form-control input-barcode" name="producto_nombre" id="producto_nombre" maxlength="97">
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    function handleClick(_radio) {
                                        if (_radio.value == "1") {
                                            //document.getElementById("date_out").hidden = false;
                                            document.getElementById("date_out").disabled = false;
                                        } else {
                                            //document.getElementById("date_out").hidden = true;
                                            //document.getElementById("date_out").disabled = true;
                                        }
                                    }
                                </script>
                                <div class="col-12 col-md-6" style="margin-top: 20px;">
                                <label for="" class="bmd-label-floating">Producto Perecible</label>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="prod_status" value="1" checked="checked" onclick="handleClick(this);">
                                                    <i class="far fa-check-circle fa-fw"></i> &nbsp; Si
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="prod_status" value="0" onclick="handleClick(this);">
                                                    <i class="far fa-times-circle fa-fw"></i> &nbsp; No
                                                </label>
                                            </div>
                                        </div>
                                    <!-- </div> -->
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Cantidad a ingresar</label>
                                        <input type="number" class="form-control" name="producto_stock_total" id="producto_stock_total" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Fecha de ingreso</label>
                                        <input type="date" class="form-control" name="date_in" id="date_in">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Fecha de vencimiento</label>
                                        <input type="date" class="form-control" value="00-00-0000" name="date_out" id="date_out">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <input type="text" class="form-control input-barcode" name="desc" id="desc" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Guía Remisión</label>
                                        <input type="text" class="form-control input-barcode" name="_gremision" id="_gremision" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>N° Orden</label>
                                        <input type="number" class="form-control input-barcode" name="_norden" id="_norden" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>N° Pecosa</label>
                                        <input type="number" class="form-control input-barcode" name="npecosa" id="npecosa" maxlength="30">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" name="actualizarData" class="btn btn-primary">Actualizar Cambios</button>
                            </div>
                </form>
            </div>
        </div>
    </div>
    <!----------------------------------------------------------- Modal ----------------------------------------------------------------->
    <!-----------------------------------------------------------Llamar Modal ----------------------------------------------------------------->
    <script>
        $(document).ready(function() {
            $('.editbtn').on('click', function() {

                $('#editpro').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#secuence').val(data[0]);
                $('#cod_mod').val(data[1]);
                $('#cod_ugel').val(data[2]);
                $('#nom_cole').val(data[3]);
                $('#dir_cole').val(data[4]);
                $('#num_cole').val(data[5]);
                $('#email_cole').val(data[6]);
                $('#dpto_cole').val(data[7]);
                $('#prov_cole').val(data[8]);
                $('#dsto_cole').val(data[9]);
                $('#loc_cole').val(data[10]);
                $('#nivel_cole').val(data[11]);
            });
        });
    </script>
    <!-----------------------------------------------------------Llamar Modal ----------------------------------------------------------------->

    <script>
        let btn_salir = document.querySelector('.btn-exit-system');

        btn_salir.addEventListener('click', function(e) {
            e.preventDefault();
            Swal.fire({
                title: '¿Quieres salir del sistema?',
                text: "La sesión actual se cerrará y saldrás del sistema",
                type: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, salir',
                cancelButtonText: 'No, cancelar'
            }).then((result) => {
                if (result.value) {

                    let url = 'http://systems.designlopers.com/SVI/ajax/loginAjax.php';
                    let token = 'OHgwZ3RyMVNDQzZYb3l3VjFaZFlCVXN4KzRXZ0FyTXFyREhwTFZQaUpEV21mbEY1ekw1UDgwMU4rRk1rRm5sLzNUTlJPRWxmallMNkVKMUtCWXBnVkREZW9CbHBjNE5wek5UenZDYUEwWlRxekJwb09MZkpxNG5DWjQyWFVvVm4=';
                    let usuario = 'OFh3MUpva29KdER0ZHNqc0pkTGlmdz09';

                    let datos = new FormData();
                    datos.append("token", token);
                    datos.append("usuario", usuario);
                    datos.append("modulo_login", "cerrar_sesion");

                    fetch(url, {
                            method: 'POST',
                            body: datos
                        })
                        .then(respuesta => respuesta.json())
                        .then(respuesta => {
                            return alertas_ajax(respuesta);
                        });
                }
            });
        });
    </script>
    <!--=============================================
=            Include JavaScript files           =
==============================================-->
    <!-- popper -->
    <script src="http://systems.designlopers.com/SVI/vistas/js/popper.min.js"></script>

    <!-- Bootstrap V4.3 -->
    <script src="http://systems.designlopers.com/SVI/vistas/js/bootstrap.min.js"></script>

    <!-- SnackbarJS plugin -->
    <script src="http://systems.designlopers.com/SVI/vistas/js/snackbar.min.js"></script>

    <!-- Bootstrap Material Design V4.0 -->
    <script src="http://systems.designlopers.com/SVI/vistas/js/bootstrap-material-design.min.js"></script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>

    <!-- printThis  -->
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/printThis.js"></script> -->

    <script src="http://systems.designlopers.com/SVI/vistas/js/main.js"></script>
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/ajax.js"></script> -->
</body>

</html>