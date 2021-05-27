<?php
//include_once('../../config/Conexion.php');
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
                    <?php
                    if ($_SESSION['sexo'] == 'm') {
                    ?>
                        <img src="https://cooperativadepica.cl/wp-content/uploads/2018/07/avatar2.png" class="img-fluid" alt="Avatar">
                    <?php
                    } elseif ($_SESSION['sexo'] == 'f') {
                    ?>
                        <img src="https://www.w3schools.com/w3images/avatar6.png" class="img-fluid" alt="Avatar">
                    <?php
                    }
                    ?>
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

                                <!--                                 <li>
                                    <a href="../Despacho/Despacho.php" class="Blogger">
                                        <i class="fa fa-clipboard-check fa-fw"></i> &nbsp; Salida de producto
                                    </a>
                                </li> -->
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
                    <i class="fas fa-box fa-fw"></i> &nbsp; Producto
                </h3>
                <p class="text-justify">
                    En el módulo PRODUCTOS podrá ingresar nuevos productos al sistema, actualizar datos de los productos,
                    ver los productos en almacén.
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs text-uppercase Gagalin">
                    <li>
                        <a class="active" href="../Producto/Productos.php">
                            <i class="fas fa-box fa-fw"></i> &nbsp; Ingreso de producto
                        </a>
                    </li>
                    <li>
                        <a href="../Producto/listaProductos.php">
                            <i class="fas fa-boxes fa-fw"></i> &nbsp; Productos en almacen
                        </a>
                    </li>
                    <li>
                        <a href="../Despacho/listaDespacho.php" class="Gagalin">
                            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Despachos
                        </a>
                    </li>
                    <!-- <li>
                        <a href="../Producto/Producto-Categorias.php">
                            <i class="fab fa-shopify fa-fw"></i> &nbsp; Productos por categoría
                        </a>
                    </li> -->
                    <!-- <li>
                        <a href="../Producto/Producto-Vencimiento.php">
                            <i class="fas fa-history fa-fw"></i> &nbsp; Productos por vencimiento
                        </a>
                    </li> -->
                    <!--                     <li>
                        <a href="../Producto/Producto-Stock.php">
                            <i class="fas fa-stopwatch-20 fa-fw"></i> &nbsp; Productos en stock mínimo
                        </a>
                    </li> -->
                    <!--       <li>
                        <a href="../Producto/BuscarProducto.php">
                            <i class="fas fa-search fa-fw"></i> &nbsp; Buscar productos
                        </a>
                    </li> -->
                </ul>
            </div>
            <!-- id="frmProd" -->
            <div class="container-fluid">
                <form class="form-neon FormularioAjax" id="frmProd" method="POST" autocomplete="off">
                    <!-- <input type="hidden" name="modulo_producto" value="registrar"> -->
                    <fieldset>
                        <legend class="Gagalin"><i class="fas fa-truck-loading"></i> &nbsp; Registro de Producto</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="producto_categoria" class="bmd-label-floating">Categoría &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <?php
                                        require_once('../../Controlador/controladorListar.php');
                                        ?>

                                        <select class="form-control" name="cod_cate" id="cod_cate" required>
                                            <option value="" selected="">Seleccione una opción</option>
                                            <?php
                                            foreach ($selectorCateg as $cboCate) {
                                            ?>
                                                <option value="<?php echo $cboCate[0]; ?>"><?php echo $cboCate[2]; ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="producto_nombre" class="bmd-label-floating">Marca &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" class="form-control input-barcode" name="marca_prod" id="marca_prod" maxlength="50" required>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="producto_nombre" class="bmd-label-floating">RUC &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" class="form-control input-barcode" name="ruc_pro" id="ruc_pro" maxlength="11" required>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="producto_nombre" class="bmd-label-floating">Razón Social &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" class="form-control input-barcode" name="razon" id="razon" maxlength="50" required>
                                    </div>
                                </div>


                                <div hidden class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="" class="bmd-label-floating">Proveedor</label>
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


                                <div hidden class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="producto_marca" class="bmd-label-floating">Marca &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
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
                                        <label for="producto_nombre" class="bmd-label-floating">User code&nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="number" class="form-control input-barcode" name="id_user" id="id_user" value="<?php echo $_SESSION['secuence_usu']; ?>" maxlength="6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br><br><br>
                    <fieldset>
                        <legend class="Gagalin"><i class="fas fa-box"></i> &nbsp; Información del producto</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="producto_nombre" class="bmd-label-floating">Nombre del Producto &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" class="form-control input-barcode" name="producto_nombre" id="producto_nombre" maxlength="30" required>
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
                                    <label for="" class="bmd-label-floating">Producto Perecible &nbsp;
                                        <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                    </label>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="prod_status" value="1" checked="checked"" required>
                                                    <i class=" far fa-check-circle fa-fw"></i> &nbsp; Si
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="prod_status" value="0"" required>
                                                    <i class=" far fa-times-circle fa-fw"></i> &nbsp; No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="producto_stock_total" class="bmd-label-floating">Cantidad a ingresar&nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="number" class="form-control" name="producto_stock_total" id="producto_stock_total" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label>Fecha de ingreso</label>
                                        <input type="date" class="form-control" name="date_in" id="date_in" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label>Fecha de vencimiento</label>
                                        <input type="date" class="form-control" name="date_out" id="date_out">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="producto_marca" class="bmd-label-floating">Descripción</label>
                                        <input type="text" class="form-control input-barcode" name="desc" id="desc" maxlength="50" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="producto_marca" class="bmd-label-floating">Guía Remisión</label>
                                        <input type="text" class="form-control input-barcode" name="_gremision" id="_gremision" maxlength="30" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="producto_marca" class="bmd-label-floating">N° Orden</label>
                                        <input type="text" class="form-control input-barcode" name="_norden" id="_norden" maxlength="40" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="producto_marca" class="bmd-label-floating">N° Pecosa</label>
                                        <input type="text" class="form-control input-barcode" name="npecosa" id="npecosa" maxlength="40" required>
                                    </div>
                                </div>
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
                                        <input type="date" class="form-control" name="producto_fecha_vencimiento_reg" id="producto_fecha_vencimiento" maxlength="30" >
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


                    <!-- <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                        &nbsp; &nbsp;
                        <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                    </p>
                    <p class="text-center">
                        <small>Los campos marcados con &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp; son obligatorios</small>
                    </p> -->
                    <p class="text-center">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                        &nbsp; &nbsp;
                        <button id="btnSaveProd" name="btnSaveProd" type="submit" class="btn btn-raised btn-info btn-sm">
                            <i class="far fa-save">
                            </i> &nbsp; GUARDAR
                        </button>
                    </p>
                </form>
            </div>
        </section>
    </main>
    <!--     <script>
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
    </script> -->
    <!--=============================================
=            Include JavaScript files           =
==============================================-->
    <!-- popper -->
    <script src="http://systems.designlopers.com/SVI/vistas/js/popper.min.js"></script>

    <!-- Bootstrap V4.3 -->
    <script src="http://systems.designlopers.com/SVI/vistas/js/bootstrap.min.js"></script>

    <!-- SnackbarJS plugin -->
    <!--  <script src="http://systems.designlopers.com/SVI/vistas/js/snackbar.min.js"></script> -->

    <!-- Bootstrap Material Design V4.0 -->
    <script src="http://systems.designlopers.com/SVI/vistas/js/bootstrap-material-design.min.js"></script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>

    <!-- printThis  -->
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/printThis.js"></script>-->

    <script src="http://systems.designlopers.com/SVI/vistas/js/main.js"></script>
    <script src="../resources/functions.js"></script>
</body>

</html>