<?php
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
                    <figcaption class="text-center">
                        <?php echo $_SESSION['name']; ?><br><small class="Blogger"><?php echo $_SESSION['id_rol'] ?></small>
                    </figcaption>
                </figure>
                <div class="full-box nav-lateral-bar"></div>
                <nav class="full-box nav-lateral-menu">
                    <ul>
                        <li>
                            <a href="../principal.php" class="Blogger">
                                <i class="fab fa-dashcube fa-fw"></i> &nbsp; MENU PRINCIPAL
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
                                    <a href="../Producto/Producto-Categorias.php" class="Blogger">
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

            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left text-uppercase Gagalin">
                    <i class="fas fa-history fa-fw"></i> &nbsp; Productos por vencimiento
                </h3>
                <p class="text-justify">
                    En el módulo PRODUCTOS podrá agregar nuevos productos al sistema, actualizar datos de los productos, eliminar o actualizar la imagen de los productos, imprimir códigos de barras o SKU de cada producto, buscar productos en el sistema, ver todos los productos en almacén, ver los productos más vendido y filtrar productos por categoría.
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
                        <a href="../Producto/listaProductos.php">
                            <i class="fas fa-boxes fa-fw"></i> &nbsp; Productos en almacen
                        </a>
                    </li>
                    <li>
                        <a href="../Producto/Producto-Categorias.php">
                            <i class="fab fa-shopify fa-fw"></i> &nbsp; Productos por categoría
                        </a>
                    </li>
                    <li>
                        <a class="active" href="../Producto/Producto-Vencimiento.php">
                            <i class="fas fa-history fa-fw"></i> &nbsp; Productos por vencimiento
                        </a>
                    </li>
                    <li>
                        <a href="../Producto/Producto-Stock.php">
                            <i class="fas fa-stopwatch-20 fa-fw"></i> &nbsp; Productos en stock mínimo
                        </a>
                    </li>
                    <li>
                        <a href="../Producto/BuscarProducto.php">
                            <i class="fas fa-search fa-fw"></i> &nbsp; Buscar productos
                        </a>
                    </li>
                </ul>
            </div>

            <div class="container-fluid" style="background-color: #FFF; padding-bottom: 20px;">
                <ul class="list-unstyled" style="padding: 5px;">
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/D1Z9M0X0Z8-21.jpg" alt="Botella de vino">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>1 - Botella de vino</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 634534354354</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> 05435435669999</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $85.50 USD <span class="badge badge-success">5% de descuento</span></div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 17</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 48</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> <span class="badge badge-warning">Vencido</span></div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/MjY1cTZWVzg5TWs3ZXBOc21ZMUVNZz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/MjY1cTZWVzg5TWs3ZXBOc21ZMUVNZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/MjY1cTZWVzg5TWs3ZXBOc21ZMUVNZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/MjY1cTZWVzg5TWs3ZXBOc21ZMUVNZz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="MjY1cTZWVzg5TWs3ZXBOc21ZMUVNZz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/H5H7U4F0A9-17.jpg" alt="Chocolatina">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>2 - Chocolatina</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 847632847</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> </div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $0.50 USD <span class="badge badge-success">50% de descuento</span></div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 12</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 15</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> <span class="badge badge-warning">Vencido</span></div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/L0Q2TVBtKzQ4Z0grMUZhRVB0bjZDdz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/L0Q2TVBtKzQ4Z0grMUZhRVB0bjZDdz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/L0Q2TVBtKzQ4Z0grMUZhRVB0bjZDdz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/L0Q2TVBtKzQ4Z0grMUZhRVB0bjZDdz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="L0Q2TVBtKzQ4Z0grMUZhRVB0bjZDdz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/img/producto.png" alt="LLAVE INGLESA">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>3 - LLAVE INGLESA</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 12345</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> AP-300</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $500.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Deshabilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 3988</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 9</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> <span class="badge badge-warning">Vencido</span></div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/S1lnTVBkdDVkSEp1M3hUaHcrTUUxUT09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/S1lnTVBkdDVkSEp1M3hUaHcrTUUxUT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/S1lnTVBkdDVkSEp1M3hUaHcrTUUxUT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/S1lnTVBkdDVkSEp1M3hUaHcrTUUxUT09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="S1lnTVBkdDVkSEp1M3hUaHcrTUUxUT09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/C0O9Z7M9E3-37.jpg" alt="GALLETA ARTESANAL BOLSA DE 24 UNIDADES">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>4 - GALLETA ARTESANAL BOLSA DE 24 UNIDADES</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 53</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> </div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $2.40 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 2</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> <span class="badge badge-warning">Vencido</span></div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/RUVZaFNicUIrNWtNY2ZmcDNrNGozQT09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/RUVZaFNicUIrNWtNY2ZmcDNrNGozQT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/RUVZaFNicUIrNWtNY2ZmcDNrNGozQT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/RUVZaFNicUIrNWtNY2ZmcDNrNGozQT09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="RUVZaFNicUIrNWtNY2ZmcDNrNGozQT09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/K5C1U1I9H7-55.jpg" alt="Amoxicilina 500 ml">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>5 - Amoxicilina 500 ml</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 055565656446</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> 454555</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $49.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 618</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 12</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> <span class="badge badge-warning">Vencido</span></div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/ZW9HdXhJc2ViYm5yMEVBYU1VdDgxUT09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/ZW9HdXhJc2ViYm5yMEVBYU1VdDgxUT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/ZW9HdXhJc2ViYm5yMEVBYU1VdDgxUT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/ZW9HdXhJc2ViYm5yMEVBYU1VdDgxUT09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="ZW9HdXhJc2ViYm5yMEVBYU1VdDgxUT09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/Z7L2P0C0O2-59.jpg" alt="Amoxicilina 250 Mg">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>6 - Amoxicilina 250 Mg</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 005555</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> 0055551</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $0.40 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 442</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 8</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> <span class="badge badge-warning">Vencido</span></div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/TENCNWVsSVZZbEYzbXdtckhzaUppZz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/TENCNWVsSVZZbEYzbXdtckhzaUppZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/TENCNWVsSVZZbEYzbXdtckhzaUppZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/TENCNWVsSVZZbEYzbXdtckhzaUppZz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="TENCNWVsSVZZbEYzbXdtckhzaUppZz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/N9O1T2G5O5-57.png" alt="Pescado congelado">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>7 - Pescado congelado</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 123456789</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> 123456789</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $2,200.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 11</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 1</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> <span class="badge badge-warning">Vencido</span></div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/cVQvRlZ5NEptdmVIMmFDYjVFTHNDUT09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/cVQvRlZ5NEptdmVIMmFDYjVFTHNDUT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/cVQvRlZ5NEptdmVIMmFDYjVFTHNDUT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/cVQvRlZ5NEptdmVIMmFDYjVFTHNDUT09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="cVQvRlZ5NEptdmVIMmFDYjVFTHNDUT09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/B8N1V8P0I7-84.jpg" alt="COLA BIG MANZANA 300ML">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>8 - COLA BIG MANZANA 300ML</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 00001111</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> </div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $0.25 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 10</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> <span class="badge badge-warning">Vencido</span></div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/ZndrZzc0aE8xNUxIaCt3SmJ4dFcyUT09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/ZndrZzc0aE8xNUxIaCt3SmJ4dFcyUT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/ZndrZzc0aE8xNUxIaCt3SmJ4dFcyUT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/ZndrZzc0aE8xNUxIaCt3SmJ4dFcyUT09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="ZndrZzc0aE8xNUxIaCt3SmJ4dFcyUT09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/E4W3F6P3S6-85.jpg" alt="COLA BIG MANZANA 300ML">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>9 - COLA BIG MANZANA 300ML</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 000011111</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> </div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $0.25 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 7</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 3</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> <span class="badge badge-warning">Vencido</span></div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/aG9MaG9IellQb1J1YUZORW5Ka1VYQT09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/aG9MaG9IellQb1J1YUZORW5Ka1VYQT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/aG9MaG9IellQb1J1YUZORW5Ka1VYQT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/aG9MaG9IellQb1J1YUZORW5Ka1VYQT09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="aG9MaG9IellQb1J1YUZORW5Ka1VYQT09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/M9A4N1B9X7-54.jpg" alt="manzana">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>10 - manzana</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 222</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> </div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $3.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 90</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 10</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> En 16 días</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/MHluNkdackFKTURyeis0d3JyV3RaUT09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/MHluNkdackFKTURyeis0d3JyV3RaUT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/MHluNkdackFKTURyeis0d3JyV3RaUT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/MHluNkdackFKTURyeis0d3JyV3RaUT09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="MHluNkdackFKTURyeis0d3JyV3RaUT09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/M7X1J1A7O9-98.jpg" alt="crema">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>11 - crema</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 789456123</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> </div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $16.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 20</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 5</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> En 23 días</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/OHZJWjNTSk10SFRudmlGVjRaL1FRZz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/OHZJWjNTSk10SFRudmlGVjRaL1FRZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/OHZJWjNTSk10SFRudmlGVjRaL1FRZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/OHZJWjNTSk10SFRudmlGVjRaL1FRZz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="OHZJWjNTSk10SFRudmlGVjRaL1FRZz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/A5B8J0F7U6-27.jpg" alt="Pelón Pelo Rico">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>12 - Pelón Pelo Rico</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 151514841541</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> 1596321</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $11.25 USD <span class="badge badge-success">25% de descuento</span></div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 49</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 1</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> En 227 días</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/azBFczN0WDFsbkticW1SbzlVbDBXdz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/azBFczN0WDFsbkticW1SbzlVbDBXdz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/azBFczN0WDFsbkticW1SbzlVbDBXdz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/azBFczN0WDFsbkticW1SbzlVbDBXdz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="azBFczN0WDFsbkticW1SbzlVbDBXdz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/T9A3N2I7S1-6.jpg" alt="LENTEJAS">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>13 - LENTEJAS</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 111111</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> </div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $31.86 USD <span class="badge badge-success">10% de descuento</span></div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 177</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 55</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> En 238 días</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/a2drWmdQWFE4dE9UMHVaQUVmTklvdz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/a2drWmdQWFE4dE9UMHVaQUVmTklvdz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/a2drWmdQWFE4dE9UMHVaQUVmTklvdz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/a2drWmdQWFE4dE9UMHVaQUVmTklvdz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="a2drWmdQWFE4dE9UMHVaQUVmTklvdz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/img/producto.png" alt="Brochas">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>14 - Brochas</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 192608212708</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> 123</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $120.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 3</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> En 275 días</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/SGR4bGpVMUlzYyt1aTdnV0dENXhKZz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/SGR4bGpVMUlzYyt1aTdnV0dENXhKZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/SGR4bGpVMUlzYyt1aTdnV0dENXhKZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/SGR4bGpVMUlzYyt1aTdnV0dENXhKZz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="SGR4bGpVMUlzYyt1aTdnV0dENXhKZz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/T8F9H4U3V7-83.jpg" alt="prueba">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>15 - prueba</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 0121212</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> asdasd</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $5,000.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 100</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> En 344 días</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/NU1tbDRPLzhSSkZENzBpQlhETCszZz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/NU1tbDRPLzhSSkZENzBpQlhETCszZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/NU1tbDRPLzhSSkZENzBpQlhETCszZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/NU1tbDRPLzhSSkZENzBpQlhETCszZz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="NU1tbDRPLzhSSkZENzBpQlhETCszZz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
                <p class="text-right">Mostrando productos <strong>1</strong> al <strong>15</strong> de un <strong>total de 18</strong></p>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link"><i class="fas fa-angle-double-left"></i></a></li>
                        <li class="page-item"><a class="page-link active" href="http://systems.designlopers.com/SVI/product-expiration/1/">1</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-expiration/2/">2</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-expiration/2/">Siguiente</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-expiration/2/"><i class="fas fa-angle-double-right"></i></a></li>
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