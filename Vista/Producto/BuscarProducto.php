<?php
include_once('../../config/Conexion.php');
require_once('../../config/security.php');

$connect = mysqli_connect("localhost", "root", "", "inventario");

$search = $_POST['search'];

if (!$connect) {
    die('Could not connect: ' . mysqli_error());
}

$query = "SELECT secuence_prod, razon_social,cat.secuence_cat,cat.nom_categoria, marca_nom, nom_producto, cantidades, 
fecha_entrada
FROM productos prod
INNER JOIN categorias cat ON prod.id_categoria = cat.secuence_cat
INNER JOIN usuario usu ON prod.id_usuario = usu.secuence_usu
WHERE nom_producto LIKE '%" . $search . "%' 
or marca_nom LIKE '%" . $search . "%' 
or cat.nom_categoria LIKE '%" . $search . "%' 
or razon_social LIKE '%" . $search . "%' 
ORDER BY 1 desc ";

$result = mysqli_query($connect, $query);


if (!$result) {
    die('Could not get data: ' . mysql_error());
}
$count = mysqli_num_rows($result);


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
                                    <!--                                 <li>
                                    <a class="active" href="listaDespacho.php" class="Gagalin">
                                        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Despachos
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
                    <i class="fas fa-boxes fa-fw"></i> &nbsp; Productos en almacen
                </h3>
                <p class="text-justify">
                    En el módulo PRODUCTOS podrá ingresar nuevos productos al sistema, actualizar datos de los productos,
                    ver los productos en almacén.
                </p>
            </div>

            <div class="container-fluid Gagalin">
                <ul class="full-box list-unstyled page-nav-tabs text-uppercase Gagalin">
                    <li>
                        <a href="../Producto/Productos.php">
                            <i class="fas fa-box fa-fw"></i> &nbsp; Nuevo producto
                        </a>
                    </li>
                    <li>
                        <a class="" href="../Producto/listaProductos.php">
                            <i class="fas fa-boxes fa-fw"></i> &nbsp; Productos en almacen
                        </a>
                    </li>
                    <li>
                        <a class="" href="../Despacho/listaDespacho.php" class="Gagalin">
                            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Despachos
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
                <nav class="navbar navbar-light bg-light justify-content-between">
                    <a class="navbar-brand"></a>

                    <form class="form-inline" method="POST" action="buscarProducto.php">
                        <input class="form-control mr-sm-2" onkeyup="EnableDisable(this)" type="text" id="search" name="search" placeholder="Ingrese" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" id="btnCate" name="btnCate" disabled type="submit">Buscar</button>
                    </form>
                </nav>
            </div>

            <div class="container-fluid" style="background-color: #FFF; padding-bottom: 20px;">

                <div class="table-responsive">
                    <?php
                    require_once('../../Controlador/controladorListar.php');
                    if (mysqli_num_rows($result) == 0) {
                        $dispNone = "display:none";
                    } else {
                    }
                    ?>
                    <table class="table table-dark table-sm" style="<?= $dispNone ?>">
                    <thead>
                            <tr class="text-center roboto-medium">
                                <th hidden>secuence</th>
                                <th>Proveedor</th>
                                <th>Categoria</th>
                                <th>Marca</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Fecha Ingreso</th>
                                <th>Editar</th>
                                <th>Salida</th>
                                <!-- <button id="btnEnble">Enable</button> -->
                            </tr>
                        </thead>

                        <tbody id="container">

                            <?php
                            if ($count >= 1) {

                                while ($fila = mysqli_fetch_array($result)) {
                                   
                            ?>
                                    <tr class="text-center">
                                        <td hidden><?php echo $fila['secuence_prod'] ?></td>
                                        <td><?php echo $fila['razon_social'] ?></td>
                                        <td><?php echo $fila['nom_categoria'] ?></td>
                                        <td><?php echo $fila['marca_nom'] ?></td>
                                        <td><?php echo $fila['nom_producto'] ?></td>
                                        <td><?php echo $fila['cantidades'] ?></td>
                                        <td><?php echo $fila['fecha_entrada'] ?></td>
                                        <td>
                                        <button type="button" class="btn btn-success editProd" data-toggle="modal" data-target="#exampleModal">
                                            Actualizar
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success editSalida" data-toggle="modal" data-target="exampleModal">
                                            Salida
                                        </button>
                                    </td>

                                    </tr>
                        </tbody>
                    <?php
                                }
                            } else {
                    ?>

                    <div class="container-fluid">
                        <div class="container-fluid">
                            <h4 class="text-center">No Data</h4>
                        </div>
                    </div>
                <?php
                            }
                ?>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <!----------------------------------------------------------- Modal SALIDA PRODUCTO----------------------------------------------------------------->
    <div class="modal fade" id="salidaProducto" name="salidaProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Salida de Procuto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <h5 class="text-warning" id="warn">SIN STOCK</h5>
                    <form id="frmSalida" name="frmSalida" method="POST">

                        <div class="container-fluid">
                            <input type="text" id="prod_cod" name="prod_cod" class="form-control" hidden>
                            <div class="row">
                                <div class="col-12 col-md-6" hidden>
                                    <div class="form-group">
                                        <label>user id</label>
                                        <input type="text" class="form-control input-barcode" name="usuario_cargo" id="usuario_cargo" value="<?php echo $_SESSION['secuence_usu']; ?>" maxlength="97">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Encargado</label>
                                        <input type="text" class="form-control input-barcode" maxlength="97" value="<?php echo $_SESSION['name']; ?> <?php echo $_SESSION['last_name']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Colegios</label>
                                        <?php
                                        require_once('../../Controlador/controladorListar.php');
                                        ?>
                                        <select class="form-control" name="colegio_cod" id="colegio_cod" required>
                                            <!-- <option value="" selected="">Seleccionar</option> -->
                                            <?php
                                            foreach ($listColegioCod as $cboCole) {
                                            ?>
                                                <option value="<?php echo $cboCole[0]; ?>"><?php echo $cboCole[1]; ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Stock Actual</label>
                                        <input type="text" class="form-control input-barcode" name="stock_ahora" id="stock_ahora" maxlength="97" onkeydown="return false">
                                        <span class="text-warning" id="error" style="display: none;">
                                            <p id="stock_warn">stock agotado</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Cantidad de salida</label>
                                        <input type="number" class="form-control input-barcode" name="cant_sal" id="cant_sal" min="0" placeholder="ej.15">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="producto_fecha_ingreso">Fecha de Salida</label>
                                        <input type="date" class="form-control" name="fecha_in" id="fecha_in">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="producto_marca" class="bmd-label-floating">Comentario</label>
                                        <input type="text" class="form-control input-barcode" name="coment" id="coment" maxlength="30" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-18">
                                    <div class="form-group">
                                        <label for="producto_marca" class="bmd-label-floating">DNI y Nombre del contacto a recepcionar</label>
                                        <input type="text" class="form-control input-barcode" name="firma" id="firma" maxlength="30" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" id="btnSave_despacho" name="btnSave_despacho" class="btn btn-primary" >Añadir Salida</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------------------------- Modal SALIDA PRODUCTO----------------------------------------------------------------->

    <!----------------------------------------------------------- Modal UPDATE----------------------------------------------------------------->
    <div class="modal fade" id="editpro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../../Controlador/ActualizarProducto.php" method="POST">


                        <input type="text" id="secuence" name="secuence" class="form-control" hidden>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Proveedor</label>
                                        <input type="text" class="form-control input-barcode" name="rsocial" id="rsocial" maxlength="97" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6" hidden>
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
                                        <select class="form-control" name="cat_id" id="cat_id" required>
                                            <option value="" selected="">Seleccione una categoria</option>
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
                                        <input type="text" class="form-control input-barcode" name="mar_id" id="mar_id" maxlength="97" required>
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
                                        <input type="number" class="form-control input-barcode" name="cant" id="cant" min="0">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------------FIN------------- Modal UPDATE----------------------------------------------------------------->

    <!-----------------------------------------------------------Llamar Modal ----------------------------------------------------------------->


    <script>
        $(document).ready(function() {
            var stock_test = document.getElementById("stock_ahora");
            var stock_agotado = document.getElementById("error");
            var add_btn = document.getElementById("btnSave_despacho");
            var warn_titl = document.getElementById("warn");
            $('.editProd').on('click', function() {
                

                $('#editpro').modal('show');
                //$('#editpro').modal('toggle')

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#secuence').val(data[0]);
                $('#rsocial').val(data[1]);
                $('#idecat').val(data[2]);
                $('#mar_id').val(data[3]);
                $('#pro_id').val(data[4]);
                $('#cant').val(data[5]);
                $('#date_in').val(data[6]);
            });

            $('.editSalida').on('click', function() {
                $('#salidaProducto').modal('show');
                //$('#salidaProducto').modal('toggle')
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#prod_cod').val(data[0]);
                $('#stock_ahora').val(data[5]);
                if (stock_test.value =="0") {
                    console.log("wops :c")
                    stock_test.disabled = true;
                    stock_agotado.style.display="block";
                    warn_titl.style.display = "block";
                    add_btn.disabled = true;
                }else{
                    console.log("yup")
                    stock_test.disabled = false;
                    add_btn.disabled = false;
                    stock_agotado.style.display="none";
                    warn_titl.style.display = "none";
                }
                $('#fecha_in').val(data[7]);
            });

        });
    </script>

    <!-----------------------------------------------------------Llamar Modal -------FIN---------------------------------------------------------->

    <!-- Modal -->

    <script type="text/javascript">
        function EnableDisable(txtCate) {
            //boton.
            var btnSearch = document.getElementById("btnCate");

            //input
            if (txtCate.value.trim() != "") {
                //habilitar = lleno.
                //console.log("oli");
                btnSearch.disabled = false;
            } else {
                //deshabilitar = vacio
                btnSearch.disabled = true;
            }
        };
    </script>





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
    <script src="http://systems.designlopers.com/SVI/vistas/js/ajax.js"></script>
    <script src="../resources/functions.js"></script>
</body>

</html>