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
                    <i class="fas fa-stopwatch-20 fa-fw"></i> &nbsp; Productos en stock mínimo
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
                        <a href="../Producto/Producto-Vencimiento.php">
                            <i class="fas fa-history fa-fw"></i> &nbsp; Productos por vencimiento
                        </a>
                    </li>
                    <li>
                        <a class="active" href="../Producto/Producto-Stock.php">
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
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/img/producto.png" alt="12345LA">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>1 - 12345LA</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 12345LA</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> 123456</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $3,457.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 18</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> No tiene</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/VTV0ekc3ZlVaRWE2blZaZ25FdzlzZz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/VTV0ekc3ZlVaRWE2blZaZ25FdzlzZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/VTV0ekc3ZlVaRWE2blZaZ25FdzlzZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/VTV0ekc3ZlVaRWE2blZaZ25FdzlzZz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="VTV0ekc3ZlVaRWE2blZaZ25FdzlzZz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/img/producto.png" alt="ajos">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>2 - ajos</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> fgjsfryjjg</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> </div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $0.20 USD <span class="badge badge-success">1% de descuento</span></div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 9</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> No tiene</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/dWZFd216cEFMWkVFQU5JakQ2THFQQT09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/dWZFd216cEFMWkVFQU5JakQ2THFQQT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/dWZFd216cEFMWkVFQU5JakQ2THFQQT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/dWZFd216cEFMWkVFQU5JakQ2THFQQT09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="dWZFd216cEFMWkVFQU5JakQ2THFQQT09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/img/producto.png" alt="Alcor  Enduido Interior 28kg">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>3 - Alcor Enduido Interior 28kg</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 105105105</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> </div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $52,000.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 3</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 7</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> No tiene</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/clFBK0Y5ODJaVEYzcXlxODA2TGU2dz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/clFBK0Y5ODJaVEYzcXlxODA2TGU2dz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/clFBK0Y5ODJaVEYzcXlxODA2TGU2dz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/clFBK0Y5ODJaVEYzcXlxODA2TGU2dz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="clFBK0Y5ODJaVEYzcXlxODA2TGU2dz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/img/producto.png" alt="bnmb">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>4 - bnmb</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 12</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> </div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $11.76 USD <span class="badge badge-success">2% de descuento</span></div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 4</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 6</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> No tiene</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/aUw0QXNuckQ4R1hsZm5JY1MrODUzQT09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/aUw0QXNuckQ4R1hsZm5JY1MrODUzQT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/aUw0QXNuckQ4R1hsZm5JY1MrODUzQT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/aUw0QXNuckQ4R1hsZm5JY1MrODUzQT09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="aUw0QXNuckQ4R1hsZm5JY1MrODUzQT09">
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
                            <p class="text-uppercase text-center media-product-title"><strong>5 - Brochas</strong></p>
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
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/img/producto.png" alt="buzo azul">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>6 - buzo azul</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 3002</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> </div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $300.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 1</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> No tiene</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/ajh0VW5xK3luaGs2b09ZclFpSnRUQT09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/ajh0VW5xK3luaGs2b09ZclFpSnRUQT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/ajh0VW5xK3luaGs2b09ZclFpSnRUQT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/ajh0VW5xK3luaGs2b09ZclFpSnRUQT09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="ajh0VW5xK3luaGs2b09ZclFpSnRUQT09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/A0Q2A0X2Z6-31.png" alt="camara wifi">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>7 - camara wifi</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 987123586</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> 1258</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $195.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 15</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> No tiene</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/cndncFJPM3VNd3l3dnBDQ29haHRPUT09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/cndncFJPM3VNd3l3dnBDQ29haHRPUT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/cndncFJPM3VNd3l3dnBDQ29haHRPUT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/cndncFJPM3VNd3l3dnBDQ29haHRPUT09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="cndncFJPM3VNd3l3dnBDQ29haHRPUT09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/U5H7C4V2P6-49.jpg" alt="Camisa Blanca">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>8 - Camisa Blanca</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 89156325987</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> 89156325987</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $115.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 6</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> No tiene</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/bjU5OUNtY3RLNVp0TnBYMDlhRkJMQT09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/bjU5OUNtY3RLNVp0TnBYMDlhRkJMQT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/bjU5OUNtY3RLNVp0TnBYMDlhRkJMQT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/bjU5OUNtY3RLNVp0TnBYMDlhRkJMQT09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="bjU5OUNtY3RLNVp0TnBYMDlhRkJMQT09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/T5C1A5K1Z8-94.jpg" alt="CER PACEÑA LATA 473ML">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>9 - CER PACEÑA LATA 473ML</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 1</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> </div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $11.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 28</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> No tiene</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/bWpmdGRoVStBeXA4T3I1dHNHVUxQZz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/bWpmdGRoVStBeXA4T3I1dHNHVUxQZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/bWpmdGRoVStBeXA4T3I1dHNHVUxQZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/bWpmdGRoVStBeXA4T3I1dHNHVUxQZz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="bWpmdGRoVStBeXA4T3I1dHNHVUxQZz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/img/producto.png" alt="Coca Cola">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>10 - Coca Cola</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 1650</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> coca</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $20.43 USD <span class="badge badge-success">5% de descuento</span></div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 20</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> No tiene</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/QUJxRXNrbHQ5OG9wOU5aL2p6TUZLdz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/QUJxRXNrbHQ5OG9wOU5aL2p6TUZLdz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/QUJxRXNrbHQ5OG9wOU5aL2p6TUZLdz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/QUJxRXNrbHQ5OG9wOU5aL2p6TUZLdz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="QUJxRXNrbHQ5OG9wOU5aL2p6TUZLdz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/img/producto.png" alt="Coca Cola 600 ml">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>11 - Coca Cola 600 ml</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 75007614</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> 75007614</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $17.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 8</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> No tiene</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/ckRCL2UvandKY0RyNlJLMU56NEJSUT09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/ckRCL2UvandKY0RyNlJLMU56NEJSUT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/ckRCL2UvandKY0RyNlJLMU56NEJSUT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/ckRCL2UvandKY0RyNlJLMU56NEJSUT09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="ckRCL2UvandKY0RyNlJLMU56NEJSUT09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/img/producto.png" alt="coca cola lata">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>12 - coca cola lata</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 45685242</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> 879</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $20.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 19</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> No tiene</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/TUhTVG5rRExMYzlJc0IvdURxdEdrQT09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/TUhTVG5rRExMYzlJc0IvdURxdEdrQT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/TUhTVG5rRExMYzlJc0IvdURxdEdrQT09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/TUhTVG5rRExMYzlJc0IvdURxdEdrQT09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="TUhTVG5rRExMYzlJc0IvdURxdEdrQT09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/Y2M9G6R0T2-5.png" alt="Contabilidad">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>13 - Contabilidad</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 2324242fs2d</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> 2322</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $29.70 USD <span class="badge badge-success">1% de descuento</span></div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 58</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> No tiene</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/VEduaTAyd0pYVVRPUUM1TmlJRHVKZz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/VEduaTAyd0pYVVRPUUM1TmlJRHVKZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/VEduaTAyd0pYVVRPUUM1TmlJRHVKZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/VEduaTAyd0pYVVRPUUM1TmlJRHVKZz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="VEduaTAyd0pYVVRPUUM1TmlJRHVKZz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/img/producto.png" alt="doritos">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>14 - doritos</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> 34576857463553647589</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> 485683837273</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $17.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 14</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> No tiene</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/ZUIvME5ZSHhMVms0cW0yOHZmckJJZz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/ZUIvME5ZSHhMVms0cW0yOHZmckJJZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/ZUIvME5ZSHhMVms0cW0yOHZmckJJZz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/ZUIvME5ZSHhMVms0cW0yOHZmckJJZz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="ZUIvME5ZSHhMVms0cW0yOHZmckJJZz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media media-product"><img class="mr-3 img-fluid img-product-list" src="http://systems.designlopers.com/SVI/vistas/assets/product/K3V8D7C8H0-45.png" alt="freco">
                        <div class="media-body product-media-body">
                            <p class="text-uppercase text-center media-product-title"><strong>15 - freco</strong></p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>Código de barras:</strong> fresco</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-barcode"></i> <strong>SKU:</strong> dsfsd</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="far fa-money-bill-alt"></i> <strong>Precio:</strong> $150.00 USD </div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-clipboard-check"></i> <strong>Estado:</strong> Habilitado</div>

                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box"></i> <strong>Disponibles:</strong> 25</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-box-open"></i> <strong>Vendidos:</strong> 0</div>
                                    <div class="col-12 col-md-6 col-lg-3 col-product"><i class="fas fa-calendar-alt"></i> <strong>Vencimiento:</strong> No tiene</div>
                                </div>
                            </div>
                            <div class="text-right media-product-options">
                                <span><i class="fas fa-tools"></i> &nbsp; OPCIONES: </span>
                                <a href="http://systems.designlopers.com/SVI/product-info/OWFMdVV3NUlWNnMwdWt4YlovaG14dz09/" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Información detallada">
                                    <i class="fas fa-box-open"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-image/OWFMdVV3NUlWNnMwdWt4YlovaG14dz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Gestionar imagen">
                                    <i class="far fa-image"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/OWFMdVV3NUlWNnMwdWt4YlovaG14dz09/" class="btn btn-secondary" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Kardex">
                                    <i class="fas fa-luggage-cart"></i>
                                </a>
                                <a href="http://systems.designlopers.com/SVI/product-update/OWFMdVV3NUlWNnMwdWt4YlovaG14dz09/" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Actualizar producto">
                                    <i class="fas fa-sync"></i>
                                </a>
                                <form class="FormularioAjax form-product" action="http://systems.designlopers.com/SVI/ajax/productoAjax.php" method="POST" data-form="delete" autocomplete="off">
                                    <input type="hidden" name="producto_id_del" value="OWFMdVV3NUlWNnMwdWt4YlovaG14dz09">
                                    <input type="hidden" name="modulo_producto" value="eliminar">
                                    <button type="submit" class="btn btn-warning" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Eliminar producto">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
                <p class="text-right">Mostrando productos <strong>1</strong> al <strong>15</strong> de un <strong>total de 32</strong></p>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link"><i class="fas fa-angle-double-left"></i></a></li>
                        <li class="page-item"><a class="page-link active" href="http://systems.designlopers.com/SVI/product-minimum/1/">1</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-minimum/2/">2</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-minimum/3/">3</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-minimum/2/">Siguiente</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/product-minimum/3/"><i class="fas fa-angle-double-right"></i></a></li>
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