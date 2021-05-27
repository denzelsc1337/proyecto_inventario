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
                    <i class="fas fa-user-tie fa-fw"></i> &nbsp; Usuarios
                </h3>
                <p class="text-justify">
                    En el módulo USUARIO podrá registrar nuevos usuarios en el sistema ya sea un administrador o un operador, también podrá ver la lista de usuarios registrados, actualizar datos de otros usuarios.
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs text-uppercase Gagalin">
                    <li>
                        <a class="active" href="">
                            <i class="fas fa-user-tie fa-fw"></i> &nbsp; Nuevo usuario
                        </a>
                    </li>
                    <li>
                        <a href="../Categoria/listaUsuario.php">
                            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios
                        </a>
                    </li>
                    <!-- <li>
                        <a href="">
                            <i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario
                        </a>
                    </li> -->
                </ul>
            </div>

            <div class="container-fluid">
                <form class="form-neon FormularioAjax" id="frmUser" autocomplete="off">
                    <input type="hidden" name="modulo_usuario" value="registrar">
                    <fieldset>
                        <legend class="Gagalin"><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="usuario_tipo_documento" class="bmd-label-floating">Tipo de documento &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <script type="text/javascript">
                                            function changeValue(dropdown) {
                                                var option = dropdown.options[dropdown.selectedIndex].value,
                                                    field = document.getElementById('iduser');
                                                    if (option == 'DUI') {
                                                        document.getElementById('iduser').value='';
                                                        field.maxLength = 15;
                                                    } else if  (option == 'DNI'){
                                                        document.getElementById('iduser').value='';
                                                        field.maxLength = 8;
                                                    } else if  (option == 'Cedula'){
                                                        document.getElementById('iduser').value='';
                                                        field.maxLength = 9;
                                                    } else if  (option == 'Licencia'){
                                                        document.getElementById('iduser').value='';
                                                        field.maxLength = 11;
                                                    } else if  (option == 'Pasaporte'){
                                                        document.getElementById('iduser').value='';
                                                        field.maxLength = 15;
                                                    } else if  (option == 'Otro'){
                                                        document.getElementById('iduser').value='';
                                                        field.maxLength = 20;
                                                    }
                                                    
                                            }
                                        </script>
                                        <select class="form-control" name="usuario_tipo_documento" id="usuario_tipo_documento" onchange="changeValue(this);">
                                            <option value="" selected="" disabled>Seleccione una opción</option>
                                            <option value="DUI">1 - DUI</option>
                                            <option value="DNI">2 - DNI</option>
                                            <option value="Cedula">3 - Cedula</option>
                                            <option value="Licencia">4 - Licencia</option>
                                            <option value="Pasaporte">5 - Pasaporte</option>
                                            <option value="Otro">6 - Otro</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="usuario_numero_documento" class="bmd-label-floating">Numero de documento &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" class="form-control" name="iduser" id="iduser" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="usuario_cargo" class="bmd-label-floating">Cargo &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <?php
                                        require_once('../../Controlador/controladorListar.php');
                                        ?>
                                        <select class="form-control" name="usuario_cargo" id="usuario_cargo">
                                            <option value="" selected="">Seleccione una opción</option>
                                            <?php
                                            foreach ($selectorTusu as $cboTusu) {
                                            ?>
                                                <option value="<?php echo $cboTusu[0]; ?>"><?php echo $cboTusu[1]; ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="usuario_nombre" class="bmd-label-floating">Nombres &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" class="form-control" name="nomuser" id="nomuser" maxlength="35">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="usuario_apellido" class="bmd-label-floating">Apellidos &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" class="form-control" name="usuario_apellido" id="usuario_apellido" maxlength="35">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="usuario_telefono" class="bmd-label-floating">Teléfono</label>
                                        <input type="text" class="form-control" name="usuario_telefono" id="usuario_telefono" maxlength="9">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <!-- <br><br><br> -->
                    <!-- <fieldset>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <legend class="Gagalin"><i class="fas fa-user-friends"></i> &nbsp; Genero</legend>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="usuario_genero_reg" value="Masculino" checked>
                                                <i class="fas fa-male fa-fw"></i> &nbsp; Masculino
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="usuario_genero_reg" value="Femenino">
                                                <i class="fas fa-female fa-fw"></i> &nbsp; Femenino
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <legend class="Gagalin"><i class="fas fa-barcode"></i> &nbsp; Configuración de lector de código de barras</legend>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="usuario_lector_reg" value="Habilitado" checked>
                                                            <i class="far fa-check-circle fa-fw"></i> &nbsp; Usar lector
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="usuario_lector_reg" value="Deshabilitado">
                                                            <i class="far fa-times-circle fa-fw"></i> &nbsp; No usar lector
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="usuario_tipo_codigo_reg" value="Barras" checked>
                                                            <i class="fas fa-barcode fa-fw"></i> &nbsp; Código barras
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="usuario_tipo_codigo_reg" value="SKU">
                                                            <i class="fas fa-barcode fa-fw"></i> &nbsp; Código SKU
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>-->
                    <!-- <fieldset>
                        <legend class="Gagalin"><i class="fas fa-cash-register"></i> &nbsp; Caja de ventas</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <select class="form-control" name="usuario_caja_reg">
                                            <option value="" selected="">Seleccione una opción</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset> -->
                    <br><br><br>
                    <fieldset>
                        <legend class="Gagalin"><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="usuario_usuario" class="bmd-label-floating">Nombre de usuario &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="text" class="form-control" name="username" id="username" maxlength="25">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="usuario_email" class="bmd-label-floating">Email</label>
                                        <input type="email" class="form-control" name="usuario_email" id="usuario_email" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="usuario_clave_1" class="bmd-label-floating">Contraseña &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="password" class="form-control" name="pass" id="pass" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="usuario_clave_2" class="bmd-label-floating">Repetir contraseña &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <input type="password" class="form-control" name="pass" id="pass" maxlength="50">
                                    </div>
                                </div>
                                <!-- <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="usuario_estado" class="bmd-label-floating">Estado de la cuenta &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                        <select class="form-control" name="usuario_estado_reg" id="usuario_estado">
                                            <option value="Activa" selected="">1 - Activa</option>
                                            <option value="Deshabilitada">2 - Deshabilitada</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-12 col-md-6" style="margin-top: 30px;">
                                    <label for="" class="bmd-label-floating">Estado De la Cuenta &nbsp;
                                        <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                    </label>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="user_estado" value="1" checked>
                                                    <i class="far fa-check-circle fa-fw"></i> &nbsp; Habilitado
                                                </label>
                                            </div>
                                            <div hidden class="radio">
                                                <label>
                                                    <input type="radio" name="user_estado" value="0">
                                                    <i class="far fa-times-circle fa-fw"></i> &nbsp; Deshabilitado
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6" style="margin-top: 30px;">
                                    <label for="" class="bmd-label-floating">Sexo de Usuario
                                        <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                    </label>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="user_setso" value="m" checked>
                                                    <i class="far fa-check-circle fa-fw"></i> &nbsp; Masculino
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="user_setso" value="f">
                                                    <i class="far fa-times-circle fa-fw"></i> &nbsp; Femenino
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br><br><br>

                    <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                        &nbsp; &nbsp;
                        <button id="btnSave_usr" type="submit" class="btn btn-raised btn-info btn-sm">
                            <i class="far fa-save"></i> &nbsp; GUARDAR</button>
                    </p>
                    <p class="text-center">
                        <small>Los campos marcados con &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp; son obligatorios</small>
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
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/printThis.js"></script>-->

    <script src="http://systems.designlopers.com/SVI/vistas/js/main.js"></script>
    <script src="../resources/functions.js"></script>
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/ajax.js"></script>  -->
</body>

</html>