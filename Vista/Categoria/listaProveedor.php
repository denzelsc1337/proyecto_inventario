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

            <div class="full-box page-header ">
                <h3 class="text-left text-uppercase Gagalin">
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Proveedores
                </h3>
                <p class="text-justify">
                    En el módulo PROVEEDORES usted podrá registrar los proveedores de productos a los cuales usted les compra productos o mercancía. Además, podrá actualizar los datos de los proveedores, ver todos los proveedores registrados en el sistema, buscar proveedores en el sistema o eliminarlos si así lo desea.
                </p>
            </div>

            <div class="container-fluid Gagalin">
                <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
                    <li>
                        <a href="../Categoria/Proveedor.php">
                            <i class="fas fa-shipping-fast fa-fw"></i> &nbsp; Nuevo proveedor
                        </a>
                    </li>
                    <li>
                        <a class="active" href="../Categoria/listaProveedor.php">
                            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de proveedores
                        </a>
                    </li>
                    <!-- <li>
                        <a href="http://systems.designlopers.com/SVI/provider-search/">
                            <i class="fas fa-search fa-fw"></i> &nbsp; Buscar proveedor
                        </a>
                    </li> -->
                </ul>
            </div>

            <div class="container-fluid">

                <!-- <div class="table-responsive">
                    <table class="table table-dark table-sm">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th>#</th>
                                <th>DOCUMENTO</th>
                                <th>NOMBRE</th>
                                <th>TELEFONO</th>
                                <th>EMAIL</th>
                                <th>ESTADO</th>
                                <th>ACTUALIZAR</th>
                                <th>ELIMINAR</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="text-center">
                                <td>1</td>
                                <td>Cedula: 23456789</td>
                                <td>bimbo</td>
                                <td>56787867564352</td>
                                <td>hola@gmail.com</td>
                                <td>Habilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/MjY1cTZWVzg5TWs3ZXBOc21ZMUVNZz09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="MjY1cTZWVzg5TWs3ZXBOc21ZMUVNZz09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td>2</td>
                                <td>NIT: 312312312</td>
                                <td>Cooperativa Ganadera de Sonsonate de R.L.</td>
                                <td>79437293</td>
                                <td>salud@gmail.com</td>
                                <td>Deshabilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/R3VSeVgxOGtiZ0VYcXpaQnAvd0dQZz09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="R3VSeVgxOGtiZ0VYcXpaQnAvd0dQZz09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td>3</td>
                                <td>NIT: 89887696578</td>
                                <td>Chonita</td>
                                <td>9877689876</td>
                                <td></td>
                                <td>Habilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/OWhYSFZkREcwS0JObzZGU2g0b0dJdz09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="OWhYSFZkREcwS0JObzZGU2g0b0dJdz09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td>4</td>
                                <td>NIT: 90004562654</td>
                                <td>Distribuidora marca</td>
                                <td>32151514</td>
                                <td></td>
                                <td>Habilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/a2drWmdQWFE4dE9UMHVaQUVmTklvdz09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="a2drWmdQWFE4dE9UMHVaQUVmTklvdz09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td>5</td>
                                <td>Cedula: 1315030385</td>
                                <td>Enrique Porras</td>
                                <td></td>
                                <td></td>
                                <td>Habilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/c1gyeDY1K2ZWMGVoMDFsR25OVWJ0Zz09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="c1gyeDY1K2ZWMGVoMDFsR25OVWJ0Zz09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td>6</td>
                                <td>NIT: 525868555</td>
                                <td>Ferrepat</td>
                                <td>57896456</td>
                                <td>contacto.abachal@gmail.com</td>
                                <td>Habilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/UnZHVjkvTEtIL1FSa3BlN24yOU1kZz09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="UnZHVjkvTEtIL1FSa3BlN24yOU1kZz09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td>7</td>
                                <td>RUC: 27287246-9</td>
                                <td>Hhhhhh</td>
                                <td></td>
                                <td>ojhh@gmail.com</td>
                                <td>Habilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/akV5a3VPMmZGQWxmOGtuRzJRZk80UT09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="akV5a3VPMmZGQWxmOGtuRzJRZk80UT09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td>8</td>
                                <td>Cedula: 4563403</td>
                                <td>INTCOMEX</td>
                                <td>4535435435</td>
                                <td>reret@hotmail.com</td>
                                <td>Habilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/L1ZLajJlTFBkRENvekxyV1F0N0U0QT09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="L1ZLajJlTFBkRENvekxyV1F0N0U0QT09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td>9</td>
                                <td>Cedula: 120677303</td>
                                <td>mario hidalgoa</td>
                                <td>0987754398</td>
                                <td>jusseffvictorero@gmail.com</td>
                                <td>Habilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/NjlhWFJtSjhWdXkybmRpV0JkMW96dz09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="NjlhWFJtSjhWdXkybmRpV0JkMW96dz09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td>10</td>
                                <td>DNI: 0012345</td>
                                <td>Microsoft</td>
                                <td>3326822175</td>
                                <td>emiliano.utj@gmail.com</td>
                                <td>Habilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/b3d3VGZEZHR0c1N3bGJBNFVSVE5PUT09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="b3d3VGZEZHR0c1N3bGJBNFVSVE5PUT09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td>11</td>
                                <td>NIT: 0614050192-101-7</td>
                                <td>PAN GENESIS</td>
                                <td>70700026</td>
                                <td></td>
                                <td>Habilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/SHpwZnJhWjNLeG5nL2dsb2pvWWc0QT09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="SHpwZnJhWjNLeG5nL2dsb2pvWWc0QT09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td>12</td>
                                <td>NIT: 9876543123</td>
                                <td>Pretul</td>
                                <td>0017654323456</td>
                                <td>support@pretul.com</td>
                                <td>Habilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/dEpjOG5JVWliYnFkMEdKd0NiK3FVUT09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="dEpjOG5JVWliYnFkMEdKd0NiK3FVUT09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td>13</td>
                                <td>NIT: 312431221</td>
                                <td>ross</td>
                                <td></td>
                                <td></td>
                                <td>Deshabilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/UzNPcUdlWFdOZlpkd0xPR3FQQnYrZz09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="UzNPcUdlWFdOZlpkd0xPR3FQQnYrZz09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td>14</td>
                                <td>DNI: 334343434</td>
                                <td>Servicreat</td>
                                <td>5215626565</td>
                                <td>alex@gmail.com</td>
                                <td>Deshabilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/T2JLemhCWkJZY1NaOGszWG0wMlIzdz09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="T2JLemhCWkJZY1NaOGszWG0wMlIzdz09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <tr class="text-center">
                                <td>15</td>
                                <td>NIT: 123456789</td>
                                <td>test</td>
                                <td></td>
                                <td></td>
                                <td>Habilitado</td>
                                <td>
                                    <a class="btn btn-success" href="http://systems.designlopers.com/SVI/provider-update/TU55UnBHVldocE52Z01pckxHc0QxZz09/">
                                        <i class="fas fa-sync fa-fw"></i>
                                    </a>
                                </td>
                                <td>
                                    <form class="FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/proveedorAjax.php" method="POST" data-form="delete" autocomplete="off">
                                        <input type="hidden" name="proveedor_id_del" value="TU55UnBHVldocE52Z01pckxHc0QxZz09">
                                        <input type="hidden" name="modulo_proveedor" value="eliminar">
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-right">Mostrando proveedores <strong>1</strong> al <strong>15</strong> de un <strong>total de 17</strong></p>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link"><i class="fas fa-angle-double-left"></i></a></li>
                        <li class="page-item"><a class="page-link active" href="http://systems.designlopers.com/SVI/provider-list/1/">1</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/provider-list/2/">2</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/provider-list/2/">Siguiente</a></li>
                        <li class="page-item"><a class="page-link" href="http://systems.designlopers.com/SVI/provider-list/2/"><i class="fas fa-angle-double-right"></i></a></li>
                    </ul>
                </nav> -->
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
                    let token = 'bSsxZkJVUGRrRS8yRnJsMXY5cG95NGtzWjh3bDVWVTg3N1ZkRloxN1YyRUVYT2g4bUZUNmNiSVlYT2paWHRaNi9LU1hCbFIrQW9LdERsVlJXdjA5eldwOFBPbXdUcEVWTFpIeFpSY1VQSGl1S1lVRXFOankwTHpqNisvNkJzZms=';
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
