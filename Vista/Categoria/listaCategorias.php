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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap V4.3 -->
    <link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/bootstrap.min.css">

    <!-- Bootstrap Material Design V4.0 -->
    <!-- <link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/bootstrap-material-design.min.css"> -->


    <!-- Font Awesome V5.9.0 -->
    <link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/all.css">
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
        <!-- Nav lateral -->
        <section class="full-box nav-lateral">
            <div class="full-box nav-lateral-bg show-nav-lateral"></div>
            <div class="full-box nav-lateral-content scroll">
                <figure class="full-box nav-lateral-avatar">
                    <i class="far fa-times-circle show-nav-lateral"></i>
                    <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Male_4.png" class="img-fluid" alt="Avatar">
                    <figcaption class="text-center Blogger" style="font-size: 22px;">
                        <?php echo $_SESSION['name']; ?><br><small class="Blogger"><?php echo $_SESSION['id_rol'] ?></small>
                    </figcaption>
                </figure>
                <div class="full-box nav-lateral-bar">
                </div>
                <nav class="full-box nav-lateral-menu">
                    <ul>
                        <li>
                            <a href="../principal.php" class="Blogger">
                                <i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard
                            </a>
                        </li>

                        <li>
                            <a href="" class="nav-btn-submenu Blogger">
                                <i class="fas fa-briefcase fa-fw"></i> &nbsp; Administración <i class="fa fa-chevron-down"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="../Categoria/Categoria.php" class="Blogger">
                                        <i class="fa fa-tags fa-fw"></i> &nbsp; Nueva categoría
                                    </a>
                                </li>
                                <li>
                                    <a href="../Categoria/listaColegios.php" class="Blogger">
                                        <i class="fa fa-school fa-fw"></i> &nbsp; Colegios
                                    </a>
                                </li>

                                <li>
                                    <a href="../Categoria/Usuario.php" class="Blogger">
                                        <i class="fa fa-user-tie fa-fw"></i> &nbsp; Nuevo usuario
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu Blogger"><i class="fa fa-boxes fa-fw"></i> &nbsp; Productos <i class="fa fa-chevron-down"></i></a>
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
                                    <a href="../Producto/Producto-Categoria.php" class="Blogger">
                                        <i class="fab fa-shopify fa-fw"></i> &nbsp; Productos por categoría
                                    </a>
                                </li>
                                <li>
                                    <a href="../Producto/Producto-Vencimiento.php" class="Blogger">
                                        <i class="fa fa-history fa-fw"></i> &nbsp; Productos por vencimiento
                                    </a>
                                </li>
                                <li>
                                    <a href="../Producto/Producto-Stock.php" class="Blogger">
                                        <i class="fa fa-stopwatch-20 fa-fw"></i> &nbsp; Productos en stock mínimo
                                    </a>
                                </li>
                                <li>
                                    <a href="../Producto/BuscarProducto.php" class="Blogger">
                                        <i class="fa fa-search fa-fw"></i> &nbsp; Buscar productos
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li>
                                    <a href="#" class="nav-btn-submenu"><i class="fa fa-shopping-basket fa-fw"></i> &nbsp; Compras <i class="fa fa-chevron-down"></i></a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-bag fa-fw"></i> &nbsp; Nueva compra
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file-invoice-dollar fa-fw"></i> &nbsp; Compras realizadas
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search-dollar fa-fw"></i> &nbsp; Buscar compra
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->

                        <!-- <li>
                        <a href="#" class="nav-btn-submenu"><i class="fa fa-hand-holding-usd fa-fw"></i> &nbsp; Ventas <i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/sale-new/">
                                    <i class="fa fa-cart-plus fa-fw"></i> &nbsp; Nueva venta
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/sale-new/wholesale/">
                                    <i class="fa fa-parachute-box fa-fw"></i> &nbsp; Venta por mayoreo
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/sale-list/">
                                    <i class="fa fa-coins fa-fw"></i> &nbsp; Ventas realizadas
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/sale-pending/">
                                    <i class="fab fa-creative-commons-nc fa-fw"></i> &nbsp; Ventas pendientes
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/sale-search-date/">
                                    <i class="fa fa-search-dollar fa-fw"></i> &nbsp; Buscar venta (Fecha)
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/sale-search-code/">
                                    <i class="fa fa-search-dollar fa-fw"></i> &nbsp; Buscar venta (Código)
                                </a>
                            </li>
                        </ul>
                    </li> -->

                        <!-- <li>
                        <a href="#" class="nav-btn-submenu"><i class="fa fa-wallet fa-fw"></i> &nbsp; Movimientos en cajas <i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/movement-new/">
                                    <i class="far fa-money-bill-alt fa-fw"></i> &nbsp; Nuevo movimiento
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/movement-list/">
                                    <i class="fa fa-money-check-alt fa-fw"></i> &nbsp; Movimientos realizados
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/movement-search/">
                                    <i class="fa fa-search-dollar fa-fw"></i> &nbsp; Buscar movimientos
                                </a>
                            </li>
                        </ul>
                    </li> -->

                        <!--                 <li>
                        <a href="#" class="nav-btn-submenu"><i class="fa fa-truck-loading fa-fw"></i> &nbsp; Devoluciones <i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/return-list/">
                                    <i class="fa fa-people-carry fa-fw"></i> &nbsp; Devoluciones realizadas
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/return-search/">
                                    <i class="fa fa-dolly-flatbed fa-fw"></i> &nbsp; Buscar devoluciones
                                </a>
                            </li>
                        </ul>
                    </li> -->

                        <!--                 <li>
                        <a href="#" class="nav-btn-submenu"><i class="fa fa-warehouse fa-fw"></i> &nbsp; Kardex <i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/kardex/">
                                    <i class="fa fa-pallet fa-fw"></i> &nbsp; Kardex general
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/kardex-search/">
                                    <i class="fa fa-search fa-fw"></i> &nbsp; Buscar kardex
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/">
                                    <i class="fa fa-luggage-cart fa-fw"></i> &nbsp; Kardex por producto
                                </a>
                            </li>
                        </ul>
                    </li> -->
                        <li>
                            <a href="#" class="nav-btn-submenu Blogger"><i class="far fa-file-pdf fa-fw"></i> &nbsp; Reportes <i class="fa fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="../Reporte/Reportes.php" class="Blogger">
                                        <i class="fa fa-hand-holding-usd fa-fw"></i> &nbsp; Reportes de ventas
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li>
                        <a href="#" class="nav-btn-submenu"><i class="fa fa-cogs fa-fw"></i> &nbsp; Configuraciones <i class="fa fa-chevron-down"></i></a>
                        <ul>
                                                        <li>
                                    <a href="http://systems.designlopers.com/SVI/company/">
                                        <i class="fa fa-store-alt fa-fw"></i> &nbsp; Datos de la empresa
                                    </a>
                                </li>
                                                    <li>
                                <a href="http://systems.designlopers.com/SVI/user-update/dEpjOG5JVWliYnFkMEdKd0NiK3FVUT09/">
                                    <i class="fa fa-sync fa-fw"></i> &nbsp; Actualizar cuenta
                                </a>
                            </li>
                        </ul>
                    </li> -->
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
            <!-- <a href="#" class="float-left show-nav-lateral">
                <i class="fas fa-bars"></i>
            </a>
            <a href="http://systems.designlopers.com/SVI/user-update/dEpjOG5JVWliYnFkMEdKd0NiK3FVUT09/">
                <i class="fas fa-user-cog"></i>
            </a>
            <a href="#" class="btn-exit-system">
                <i class="fas fa-power-off"></i>
            </a> -->


            <div class="full-box page-header">
                <h3 class="text-left text-uppercase Gagalin">
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Categorías
                </h3>
                <p class="text-justify">
                    En el módulo CATEGORÍA usted podrá registrar las categorías que servirán para agregar productos y también podrá ver los productos que pertenecen a una categoría determinada. Además de lo antes mencionado, puede actualizar los datos de las categorías, realizar búsquedas de categorías o eliminarlas si así lo desea.
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs text-uppercase Gagalin">
                    <li>
                        <a href="Categoria.php">
                            <i class="fas fa-tags fa-fw"></i> &nbsp; Nueva categoría
                        </a>
                    </li>
                    <li>
                        <a class="active" href="listaCategorias.php">
                            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de categorías
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fas fa-search fa-fw"></i> &nbsp; Buscar categoría
                        </a>
                    </li>
                </ul>
            </div>

            <div class="container-fluid">

                <div class="table-responsive">
                    <?php
                    require_once('../../Controlador/controladorListar.php');
                    ?>
                    <table class="table table-dark table-sm">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th>№ Almacen</th>
                                <th>№ Categoria</th>
                                <th>Categoria</th>
                                <th>Ver Productos</th>
                                <th>Enable/Disable</th>
                                <!-- <button id="btnEnble">Enable</button> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listaCategoria as $vistaCate) {
                            ?>
                                <tr class="text-center">
                                    <td><?php echo $vistaCate[0] ?></td>
                                    <td><?php echo $vistaCate[1] ?></td>
                                    <td><?php echo $vistaCate[2] ?></td>
                                    <td>
                                        <a class="btn btn-info" href="http://systems.designlopers.com/SVI/product-category/1/">
                                            <i class="fab fa-shopify fa-fw"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <?php
                                        $hide = "";
                                        if ($_SESSION['id_rol'] == '2') {
                                            $hide = "style='display:none;'";
                                        }
                                        if ($vistaCate[3] == 1) {
                                        ?>
                                            <input type="checkbox" name="categoria_estado" value="1" checked="" disabled="">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <!-- <button name="btnUpdt"disabled>Update</button> -->
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" <?php echo $hide; ?>>
                                                Update
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Dar de Baja</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        } else {
                                        ?>
                                            <input type="checkbox" name="categoria_estado" value="0" disabled>
                                        <?php
                                        }
                                        ?>
                                    </td>

                                </tr>
                        </tbody>
                    <?php
                            }
                    ?>
                    </table>
                </div>
                <p class="text-right">Mostrando categorías
                    <strong>1</strong> al <strong>15</strong> de un <strong>total de 18</strong>
                </p>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link"><i class="fas fa-angle-double-left"></i></a></li>
                        <li class="page-item"><a class="page-link active" href="">1</a></li>
                        <li class="page-item"><a class="page-link" href="">2</a></li>
                        <li class="page-item"><a class="page-link" href="">Siguiente</a></li>
                        <li class="page-item"><a class="page-link" href=""><i class="fas fa-angle-double-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </main>
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
                    let token = 'bWpkOUtraXlPWndlQzQyOGkzUG1vam04NmZLZ3VRUlQxT2RXak9jeGJzS2VvRVdmZ0JXbzl1MjZ2RDB3TzhZNDVVWHJEblV3bDhZbzVtSzhBbjBqUzJJQUlKQnduOHFRYm1KUjFPeWExYmNvZXdXVFgwdUlxKzlEc0w3aEpkNlA=';
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
    <script src="../resources/enableButtons.js"></script>

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>