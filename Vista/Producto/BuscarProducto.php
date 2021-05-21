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
    <link rel="stylesheet" href="../css/styles.css">


    <!-- jQuery V3.4.1 -->
    <script src="http://systems.designlopers.com/SVI/vistas/js/jquery-3.4.1.min.js"></script>

    <!-- <link rel="stylesheet" type="text/css" href="../../datatables/DataTables-1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../../datatables/dataTables.min.css"> -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/autofill/2.3.6/css/autoFill.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.5.3/css/colReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.0.3/css/dataTables.dateTime.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.3.2/css/fixedColumns.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/keytable/2.6.1/css/keyTable.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.1.2/css/rowGroup.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.3/css/scroller.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.0.1/css/searchBuilder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.2.1/css/searchPanes.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">

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
                        <?php
                        $hide = "";
                        if ($_SESSION['id_rol'] == '2') {
                            $hide = "style='display:none;'";
                        } ?>
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

                                <li <?php echo $hide; ?>>
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
                <a href="../../config/logout.php" class="Blogger">Cerrar Sesión
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

                <div class="table-responsive" id="">
                    <!-- <div class="dataTables_length" id="example_length">
                        <label>
                            "show"
                            <select name="example_length">
                                <option values="10">10</option>
                                <option values="25">25</option>
                                <option values="50">50</option>
                            </select>
                            "entries"
                        </label>
                    </div>

                    <div id="example_filter" class="dataTables_filter">
                        <label>
                            "Search:"
                            <input type="search" aria-controls="prueba">
                        </label>
                    </div> -->
                    <?php
                    require_once('../../Controlador/controladorListar.php');
                    ?>
                    <table id="prueba" class="dataTable" style="width:100%" role="grid">
                        <thead>
                            <tr class="">
                                <th hidden>secuence</th>
                                <th>Proveedor</th>
                                <th>Categoria</th>
                                <th>Marca</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Fecha I</th>
                                <th>Editar</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($listaProducto as $vistaProd) {
                            ?>
                                <tr class="">

                                    <td hidden><?php echo $vistaProd[0] ?></td>
                                    <td><?php echo $vistaProd[1] ?></td>
                                    <td hidden><?php echo $vistaProd[2] ?></td>
                                    <td><?php echo $vistaProd[3] ?></td>
                                    <td><?php echo $vistaProd[4] ?></td>
                                    <td><?php echo $vistaProd[5] ?></td>
                                    <td><?php echo $vistaProd[6] ?></td>
                                    <td><?php echo $vistaProd[7] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-success editProd" data-toggle="modal" data-target="#exampleModal">
                                            Actualizar
                                        </button>
                                    </td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>

                        <tfoot>
                            <tr>
                                <th hidden>secuence</th>
                                <th>Proveedor</th>
                                <th>Categoria</th>
                                <th>Marca</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Fecha I</th>
                                <th>Editar</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- <table id="prueba" class="dataTable" style="width:100%" role="grid">

                    </table> -->


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
    <!-- <div class="modal fade" id="editpro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                        <input type="text" id="secuence" name="secuence" class="form-control">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Proveedor</label>
                                        <input type="text" class="form-control input-barcode" name="rsocial" id="rsocial" maxlength="97">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>categoria .2</label>
                                        <input type="text" class="form-control input-barcode" name="idecat" id="idecat" maxlength="97">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Categoria</label>
                                        <?php
                                        require_once('../../Controlador/controladorListar.php');
                                        ?>
                                        <select class="form-control" name="cat_id" id="cat_id">
                                            <?php
                                            foreach ($selectorCateg as $cboCate) {
                                            ?>
                                                <option value="<?php echo $cboCate[0]; ?>"><?php echo $cboCate[2]; ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Marca</label>
                                        <input type="text" class="form-control input-barcode" name="mar_id" id="mar_id" maxlength="97">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Producto</label>
                                        <input type="text" class="form-control input-barcode" name="pro_id" id="pro_id" maxlength="97">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Cantidad</label>
                                        <input type="text" class="form-control input-barcode" name="cant" id="cant" maxlength="97">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Fecha Ingreso</label>
                                        <input type="date" class="form-control input-barcode" name="date_in" id="date_in" maxlength="97">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" name="actuProd" class="btn btn-primary">Actualizar Cambios</button>
                            </div>
                </form>
            </div>
        </div>
    </div> -->
    <!----------------------------------------------------------- Modal ----------------------------------------------------------------->
    <!-----------------------------------------------------------Llamar Modal ----------------------------------------------------------------->



    <script>
        $(document).ready(function() {
            $('.editProd').on('click', function() {

                $('#editpro').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#secuence').val(data[0]);
                $('#rsocial').val(data[1]);
                $('#idecat').val(data[2]);
                $('#cat_id').val(data[3]);
                $('#mar_id').val(data[4]);
                $('#pro_id').val(data[5]);
                $('#cant').val(data[6]);
                $('#date_in').val(data[7]);
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
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/popper.min.js"></script> -->

    <!-- Bootstrap V4.3 -->
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/bootstrap.min.js"></script> -->

    <!-- SnackbarJS plugin -->
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/snackbar.min.js"></script> -->

    <!-- Bootstrap Material Design V4.0 -->
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/bootstrap-material-design.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/autofill/2.3.6/js/dataTables.autoFill.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/js/buttons.flash.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.5.3/js/dataTables.colReorder.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.0.3/js/dataTables.dateTime.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/keytable/2.6.1/js/dataTables.keyTable.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.1.2/js/dataTables.rowGroup.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.3/js/dataTables.scroller.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.0.1/js/dataTables.searchBuilder.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.2.1/js/dataTables.searchPanes.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"> -->



    <!-- <script src="../js/jquery-3.5.1.js"></script> -->
    <!-- <link rel="stylesheet" href="{{ ../Vista('Vista/js/jquery-3.5.1.js') }}"> -->

    <!-- <script src="../js/jquery.dataTables.min.js"></script> -->
    <!-- <link rel="stylesheet" href="{{ 'Vista(Vista/js/jquery.dataTables.min.js') }}"> -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('table#prueba').DataTable({
                // php: '../../Controlador/controladorListar.php',


            });
        });
    </script>



    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>

    <!-- <script type="text/javascript" src="../../datatables/datatables.min.js"></script> -->

    <!-- printThis  -->
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/printThis.js"></script> -->

    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/main.js"></script> -->
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/ajax.js"></script> -->
</body>

</html>
