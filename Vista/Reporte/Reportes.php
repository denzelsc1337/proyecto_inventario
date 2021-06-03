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
					<?php
						if ($_SESSION['sexo'] == 'm') {
					?>
						<img src="https://cooperativadepica.cl/wp-content/uploads/2018/07/avatar2.png" class="img-fluid" alt="Avatar">
					<?php
						}elseif ($_SESSION['sexo'] == 'f') {
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
                    <i class="fas fa-file-invoice fa-fw"></i> &nbsp; Reportes
                </h3>
                <p class="text-justify">
                    En el módulo REPORTES podrá ver, generar e imprimir reportes.
                </p>
            </div>

            <div class="container-fluid">
                <div class="container-fluid">
                    <h4 class="text-center">Generar reporte de inventario personalizado</h4>
                    <div class="form-neon">
                        <div class="container-fluid">
                            <div class="row justify-content-md-center">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="orden_reporte_inventario" class="bmd-label-floating">Reportes por &nbsp;<i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <script type="text/javascript">
                                            function changeValue(dropdown) {
                                                var option = dropdown.options[dropdown.selectedIndex].value;

                                                    if (option == 'RxNow') {
                                                        field_1 = document.getElementById('nomcoleN').style.display="block";
                                                        field_2 = document.getElementById('fechaN').style.display="block";
                                                    }else{
                                                        field_1 = document.getElementById('nomcoleN').style.display="none";
                                                        field_2 = document.getElementById('fechaN').style.display="none";
                                                    }
                                                    
                                            }
                                        </script>
                                        <select class="form-control" name="orden_reporte_inventario" id="orden_reporte_inventario" onchange="changeValue(this);" > 
                                            <option value="RxStock" selected="">Por Stock</option>
                                            <option value="RxCategoria">Por Categoria</option>
                                            <option value="RxVencimiento">Por Vencimiento</option>
                                            <option value="RxEntrada">Por Ingresos</option>
                                            <option value="RxDespacho">Por Despacho</option>
                                            <!-- <option value="RxNow">Por uwu</option> -->
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4" id="nomcoleN" style="display: none;">
                                    <div class="form-group">
                                        <label for="usuario_nombre" class="bmd-label-floating">Nombres &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" class="form-control" name="nomcole" id="nomcole" maxlength="35">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4" id="fechaN" style="display: none;">
                                    <div class="form-group">
                                        <label for="usuario_apellido" class="bmd-label-floating">Apellidos &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="date" class="form-control" name="fecha" id="fecha" maxlength="35">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p class="text-center" style="margin-top: 40px;">
                                        <button type="button" class="btn btn-raised btn-info" onclick="generar_reporte_inventario()"><i class="far fa-file-pdf"></i> &nbsp; GENERAR REPORTE</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="../resources/reportes.js"></script>
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