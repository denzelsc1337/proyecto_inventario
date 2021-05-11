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
                    <figcaption class="text-center">
                        <?php echo $_SESSION['name']; ?><br><small class="Blogger"><?php echo $_SESSION['id_rol'] ?></small>
                    </figcaption>
                </figure>
                <div class="full-box nav-lateral-bar"></div>
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
                                    <a href="../Categoria/Proveedor.php" class="Blogger">
                                        <i class="fa fa-shipping-fast fa-fw"></i> &nbsp; Nuevo proveedor
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
                    <i class="fas fa-box fa-fw"></i> &nbsp; Nuevo producto
                </h3>
                <p class="text-justify">
                    En el módulo PRODUCTOS podrá agregar nuevos productos al sistema, actualizar datos de los productos, eliminar o actualizar la imagen de los productos, imprimir códigos de barras o SKU de cada producto, buscar productos en el sistema, ver todos los productos en almacén, ver los productos más vendido y filtrar productos por categoría.
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs text-uppercase Gagalin">
                    <li>
                        <a class="active" href="../Producto/Productos.php">
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

            <div class="container-fluid">
                <form class="form-neon FormularioAjax" action="../../Controlador/AddProducto.php" method="POST" data-form="save" autocomplete="off">
                    <input type="hidden" name="modulo_producto" value="registrar">
                    <fieldset>
                        <legend class="Gagalin"><i class="fas fa-truck-loading"></i> &nbsp; Proveedor, categoría & estado</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="" class="bmd-label-floating">Proveedor</label>
                                        <select class="form-control" name="proovslct" id="proovslct">
                                            <option value="1">proveedor test</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="producto_categoria" class="bmd-label-floating">Categoría &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
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

                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="producto_categoria" class="bmd-label-floating">Marca &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <select class="form-control" name="_producto_categ" id="_producto_categ">
                                            <option value="" selected="">Seleccione una opción</option>
                                            <option value="1">1 - Baños y Plomeria</option>
                                            <option value="2">2 - Herramientas</option>
                                            <option value="3">3 - Hogar y Jardin</option>
                                            <option value="4">4 - Material Electrico</option>
                                            <option value="5">5 - MERCADO</option>
                                            <option value="6">6 - Tornillos</option>
                                            <option value="7">7 - Lácteos</option>
                                            <option value="8">8 - Chocolates</option>
                                            <option value="10">9 - Nueva</option>
                                            <option value="12">10 - ropa</option>
                                            <option value="13">11 - ssds</option>
                                            <option value="14">12 - CATEGORIA2</option>
                                            <option value="15">13 - electricidad</option>
                                            <option value="16">14 - Repuwstos</option>
                                            <option value="18">15 - Juguete para sorpresa</option>
                                            <option value="20">16 - Peliculas Disney</option>
                                            <option value="21">17 - bebidasa</option>
                                        </select>
                                    </div>
                                </div>


                                <!-- <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="producto_estado" class="bmd-label-floating">Estado del producto</label>
                                        <select class="form-control" name="producto_estado_reg" id="producto_estado">
                                            <option value="Habilitado" selected="">Habilitado</option>
                                            <option value="Deshabilitado">Deshabilitado</option>
                                        </select>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </fieldset>
                    <!-- <br><br><br>
                    <fieldset>
                        <legend><i class="fas fa-barcode"></i> &nbsp; Código y SKU</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="producto_codigo" class="bmd-label-floating">Código de barras &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" pattern="[a-zA-Z0-9- ]{1,70}" class="form-control input-barcode" name="producto_codigo_reg" id="producto_codigo" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="producto_sku" class="bmd-label-floating">SKU</label>
                                        <input type="text" pattern="[a-zA-Z0-9- ]{1,70}" class="form-control input-barcode" name="producto_sku_reg" id="producto_sku" maxlength="70">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset> -->
                    <br><br><br>
                    <fieldset>
                        <legend class="Gagalin"><i class="fas fa-box"></i> &nbsp; Información del producto</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="producto_nombre" class="bmd-label-floating">Nombre del Producto &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\- ]{1,97}" class="form-control input-barcode" name="producto_nombre" id="producto_nombre" maxlength="97">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="producto_stock_total" class="bmd-label-floating">Stock o existencias &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" pattern="[0-9]{1,20}" class="form-control" name="producto_stock_total" id="producto_stock_total" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="producto_fecha_vencimiento">Fecha de ingreso</label>
                                        <input type="date" class="form-control" name="producto_fecha_vencimiento" id="producto_fecha_vencimiento" maxlength="30" value="2021-05-06">
                                    </div>
                                </div>
                                <!-- <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="producto_stock_minimo" class="bmd-label-floating">Stock mínimo &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" pattern="[0-9]{1,9}" class="form-control" name="producto_stock_minimo_reg" id="producto_stock_minimo" maxlength="9">
                                    </div>
                                </div> -->
                                <!-- <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="producto_unidad" class="bmd-label-floating">Presentación del producto &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <select class="form-control" name="producto_unidad_reg" id="producto_unidad">
                                            <option value="" selected="">Seleccione una opción</option>
                                            <option value="Unidad">1 - Unidad</option>
                                            <option value="Libra">2 - Libra</option>
                                            <option value="Kilogramo">3 - Kilogramo</option>
                                            <option value="Caja">4 - Caja</option>
                                            <option value="Paquete">5 - Paquete</option>
                                            <option value="Lata">6 - Lata</option>
                                            <option value="Galon">7 - Galon</option>
                                            <option value="Botella">8 - Botella</option>
                                            <option value="Tira">9 - Tira</option>
                                            <option value="Sobre">10 - Sobre</option>
                                            <option value="Bolsa">11 - Bolsa</option>
                                            <option value="Saco">12 - Saco</option>
                                            <option value="Tarjeta">13 - Tarjeta</option>
                                            <option value="Otro">14 - Otro</option>
                                        </select>
                                    </div>
                                </div> -->
                                <!-- <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="producto_precio_compra" class="bmd-label-floating">Precio de compra (Con impuesto incluido) &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" pattern="[0-9.]{1,25}" class="form-control" name="producto_precio_compra_reg" value="0.00" id="producto_precio_compra" maxlength="25">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="producto_precio_venta" class="bmd-label-floating">Precio de venta (Con impuesto incluido) &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" pattern="[0-9.]{1,25}" class="form-control" name="producto_precio_venta_reg" value="0.00" id="producto_precio_venta" maxlength="25">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="producto_precio_venta_mayoreo" class="bmd-label-floating">Precio de venta por mayoreo (Con impuesto incluido) &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" pattern="[0-9.]{1,25}" class="form-control" name="producto_precio_venta_mayoreo_reg" value="0.00" id="producto_precio_venta_mayoreo" maxlength="25">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="producto_descuento" class="bmd-label-floating">Descuento (%) en venta &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" pattern="[0-9]{1,2}" class="form-control" name="producto_descuento_reg" value="0" id="producto_descuento" maxlength="2">
                                    </div>
                                </div> -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="producto_marca" class="bmd-label-floating">Descripción</label>
                                        <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,30}" class="form-control input-barcode" name="desc" id="desc" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="producto_marca" class="bmd-label-floating">Guía Remisión</label>
                                        <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,30}" class="form-control input-barcode" name="_gremision" id="_gremision" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="producto_marca" class="bmd-label-floating">N° Pecosa</label>
                                        <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,30}" class="form-control input-barcode" name="npecosa" id="npecosa" maxlength="30">
                                    </div>
                                </div>
                                <!-- <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="producto_modelo" class="bmd-label-floating">Modelo</label>
                                        <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,30}" class="form-control input-barcode" name="producto_modelo_reg" id="producto_modelo" maxlength="30">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </fieldset>
                    <!-- <br><br><br>
                    <fieldset>
                        <legend><i class="fas fa-calendar-alt"></i> &nbsp; Vencimiento del producto</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="producto_vencimiento_reg" value="Si">
                                                <i class="far fa-check-circle fa-fw"></i> &nbsp; Si vence
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="producto_vencimiento_reg" value="No" checked>
                                                <i class="far fa-times-circle fa-fw"></i> &nbsp; No vence
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="producto_fecha_vencimiento">Fecha de vencimiento (día/mes/año)</label>
                                        <input type="date" class="form-control" name="producto_fecha_vencimiento_reg" id="producto_fecha_vencimiento" maxlength="30" value="2021-05-06">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br><br><br>
                    <fieldset>
                        <legend><i class="fas fa-history"></i> &nbsp; Garantía de fabrica</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="producto_garantia_unidad" class="bmd-label-floating">Unidad de tiempo &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" pattern="[0-9]{1,2}" class="form-control input-barcode" name="producto_garantia_unidad_reg" id="producto_garantia_unidad" maxlength="2" value="0">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="producto_garantia_tiempo" class="bmd-label-floating">Tiempo de garantía &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <select class="form-control" name="producto_garantia_tiempo_reg" id="producto_garantia_tiempo">
                                            <option value="N/A">1 - N/A</option>
                                            <option value="Dias">2 - Dias</option>
                                            <option value="Semanas">3 - Semanas</option>
                                            <option value="Mes">4 - Mes</option>
                                            <option value="Meses">5 - Meses</option>
                                            <option value="Año">6 - Año</option>
                                            <option value="Años">7 - Años</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <br><br><br>
                    <fieldset>
                        <legend><i class="far fa-image"></i> &nbsp; Foto o imagen del producto</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" name="producto_foto" id="producto_foto" accept=".jpg, .png, .jpeg">
                                        <small class="text-muted">Tipos de archivos permitidos: JPG, JPEG, PNG. Tamaño máximo 3MB. Resolución recomendada 300px X 300px o superior manteniendo el aspecto cuadrado (1:1)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset> -->

                    <fieldset>
                        <div class="col-12 col-md-6" style="margin-top: 30px;">
                            <label for="" class="bmd-label-floating">Estado Del Producto &nbsp;
                                <i class="fab fa-font-awesome-alt"></i> &nbsp;
                            </label>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="categoria_estado" value="1" checked>
                                            <i class="far fa-check-circle fa-fw"></i> &nbsp; Habilitado
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="categoria_estado" value="0">
                                            <i class="far fa-times-circle fa-fw"></i> &nbsp; Deshabilitado
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <!-- <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                        &nbsp; &nbsp;
                        <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                    </p>
                    <p class="text-center">
                        <small>Los campos marcados con &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp; son obligatorios</small>
                    </p> -->
                    <p class="text-center">
                        <button type="submit" class="btn btn-raised btn-info btn-sm">
                            <i class="far fa-save">
                            </i> &nbsp; GUARDAR
                        </button>
                    </p>
                </form>
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
