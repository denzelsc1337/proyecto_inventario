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
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Usuarios
                </h3>
                <p class="text-justify">
                    En el módulo USUARIO podrá registrar nuevos usuarios en el sistema ya sea un administrador o un operador, también podrá ver la lista de usuarios registrados, actualizar datos de otros usuarios.
                </p>
            </div>

            <div class="container-fluid Gagalin">
                <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
                    <li>
                        <a href="../Categoria/Usuario.php">
                            <i class="fas fa-user-tie fa-fw"></i> &nbsp; Nuevo usuario
                        </a>
                    </li>
                    <li>
                        <a class="active" href="../Categoria/listaUsuario.php">
                            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios
                        </a>
                    </li>
                    <!-- <li>
                        <a href="http://systems.designlopers.com/SVI/user-search/">
                            <i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario
                        </a>
                    </li> -->
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
                                <!-- <th>  -  </th> -->
                                <th>Cod. Usuario</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Tipo Usuario</th>
                                <th>Usuario</th>
                                <th>Contraseña</th>
                                <th>E-mail</th>
                                <th>Celular</th>
                                <th>Estado</th>
                                <th>Editar</th>
                                <!-- <button id="btnEnble">Enable</button> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listaUsuario as $vistaUsu) {
                            ?>
                                <tr class="text-center">
                                    <td hidden><?php echo $vistaUsu[0] ?></td>
                                    <td><?php echo $vistaUsu[1] ?></td>
                                    <td><?php echo $vistaUsu[2] ?></td>
                                    <td><?php echo $vistaUsu[3] ?></td>
                                    <td><?php echo $vistaUsu[4] ?></td>
                                    <td><?php echo $vistaUsu[5] ?></td>
                                    <td><?php echo $vistaUsu[6] ?></td>
                                    <td><?php echo $vistaUsu[7] ?></td>
                                    <td><?php echo $vistaUsu[8] ?></td>
                                    <!-- <td>
                                        <a class="btn btn-info" href="http://systems.designlopers.com/SVI/product-category/1/">
                                            <i class="fab fa-shopify fa-fw"></i>
                                        </a>
                                    </td> -->
                                    <td>
                                        <?php
                                        $hide = "";
                                        if ($_SESSION['id_rol'] == '2') {
                                            $hide = "style='display:none;'";
                                        }
                                        if ($vistaUsu[9] == 1) {
                                        ?>
                                            <input type="checkbox" name="usuario_estado" value="1" checked="" disabled>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php
                                        } else {
                                        ?>
                                            <input type="checkbox" name="usuario_estado" value="0" disabled>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#exampleModal" <?php echo $hide; ?>>
                                            Actualizar
                                        </button>
                                    </td>
                                </tr>
                        </tbody>
                    <?php
                            }
                    ?>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <!----------------------------------------------------------- Modal ----------------------------------------------------------------->
    <div class="modal fade" id="editusu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuarios</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../../Controlador/ActualizarUsuario.php" method="POST">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <input type="text" class="form-control" name="secuence" id="secuence">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Numero de documento</label>
                                        <input type="text" class="form-control" name="iduser" id="iduser" maxlength="8">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Cargo</label>
                                        <input class="form-control" name="usuario_cargo" id="usuario_cargo">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label>Nombres</label>
                                        <input type="text" class="form-control" name="nomuser" id="nomuser" maxlength="35">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label>Apellidos</label>
                                        <input type="text" class="form-control" name="usuario_apellido" id="usuario_apellido" maxlength="35">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label>Teléfono</label>
                                        <input type="text" class="form-control" name="usuario_telefono" id="usuario_telefono" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="usuario_email" id="usuario_email" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Nombre de usuario</label>
                                        <input type="text" class="form-control" name="username" id="username" maxlength="25">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control" name="pass" id="pass" maxlength="100">
                                    </div>
                                </div>

                                <div class="col-12 col-md-12" style="margin-top: 30px;">
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
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="user_estado" value="0">
                                                    <i class="far fa-times-circle fa-fw"></i> &nbsp; Deshabilitado
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" name="actualizarDataUsu" class="btn btn-primary">Actualizar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!----------------------------------------------------------- Modal ----------------------------------------------------------------->
    <!-----------------------------------------------------------Llamar Modal ----------------------------------------------------------------->
    <script>
        $(document).ready(function() {
            $('.editbtn').on('click', function() {

                $('#editusu').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#secuence').val(data[0]);
                $('#iduser').val(data[1]);
                $('#nomuser').val(data[2]);
                $('#usuario_apellido').val(data[3]);
                $('#usuario_cargo').val(data[4]);
                $('#username').val(data[5]);
                $('#pass').val(data[6]);
                $('#usuario_email').val(data[7]);
                $('#usuario_telefono').val(data[8]);
                $('#user_estado').prop('checked', data[9]);
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