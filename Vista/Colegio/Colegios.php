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

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

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
    <script src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
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
                    <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Male_4.png"
                        class="img-fluid" alt="Avatar">
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

                                <li <?php echo $hide ?>>
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
                <a href="../../config/logout.php" class="Blogger">Cerrar Sesión
                    <i class="fa fa-power-off"></i>
                </a>
            </nav>

            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left text-uppercase Gagalin">
                    <i class="fas fa-tags fa-fw"></i> &nbsp; Nuevo Colegio
                </h3>
                <p class="text-justify">
                    En el módulo COLEGIOS usted podrá registrar o actualizar los datos de los colegios y ver todos los colegios
                    registrados en el sistema.
                </p>
            </div>

            <div class="container-fluid Gagalin">
                <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
                    <li>
                        <a class="active Gagalin" href="Categoria.php">
                            <i class="fas fa-tags fa-fw"></i> &nbsp; Nuevo Colegio
                        </a>
                    </li>
                    <li>
                        <a class="" href="../Categoria/listaColegios.php">
                            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Colegios
                        </a>
                    </li>
                </ul>
            </div>

            <div class="container-fluid">
                <form id="frmCole" class="form-neon FormularioAjax" method="POST" autocomplete="off">

                    <fieldset>
                        <legend><i class="far fa-address-card"></i> &nbsp; Información del Colegio</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="categoria_nombre" class="bmd-label-floating">Codigo Modular &nbsp;
                                            <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                        </label>
                                        <input type="number" class="form-control" name="cod_mod" id="cod_mod"
                                            maxlength="6" required="">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="categoria_nombre" class="bmd-label-floating">Nro Ugel
                                            <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                        </label>
                                        <input type="text" class="form-control" name="cod_ugel" id="cod_ugel"
                                            maxlength="40" required>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="categoria_nombre" class="bmd-label-floating">Nombre Colegio
                                            <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                        </label>
                                        <input type="text" class="form-control" name="nom_cole" id="nom_cole"
                                            maxlength="40" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="categoria_nombre" class="bmd-label-floating">Direccion Colegio
                                            <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                        </label>
                                        <input type="text" class="form-control" name="dir_cole" id="dir_cole"
                                            maxlength="40" required>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="categoria_nombre" class="bmd-label-floating">Telefono Colegio
                                            <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                        </label>
                                        <input type="text" class="form-control" name="num_cole" id="num_cole"
                                            maxlength="9" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="categoria_nombre" class="bmd-label-floating">EMAIL Colegio
                                            <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                        </label>
                                        <input type="email" class="form-control" name="email_cole" id="email_cole"
                                            maxlength="40" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="categoria_nombre" class="bmd-label-floating">DEPARTAMENTO
                                            <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                        </label>
                                        <select class="form-control" name="dpto_cole" id="dpto_cole">
<!--                                         <input type="text" class="form-control" name="dpto_cole" id="dpto_cole"
                                            maxlength="40" required> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="categoria_nombre" class="bmd-label-floating">PROVINCIA
                                            <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                        </label>
                                        <select class="form-control" name="prov_cole" id="prov_cole">
                                        </select>
<!--                                         <input type="text" class="form-control" name="prov_cole" id="prov_cole"
                                            maxlength="40" required> -->
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="categoria_nombre" class="bmd-label-floating">DISTRITO
                                            <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                        </label>
                                        <select class="form-control" name="dsto_cole" id="dsto_cole">
                                        </select>
                                        <!-- <input type="text" class="form-control" name="dsto_cole" id="dsto_cole" maxlength="40" required> -->
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="categoria_nombre" class="bmd-label-floating">Director del Colegio
                                            <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                        </label>
                                        <input type="text" class="form-control" name="loc_cole" id="loc_cole"
                                            maxlength="40" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6" style="margin-top: 30px;">
                                    <label for="" class="bmd-label-floating">Nivel del Colegio &nbsp;
                                        <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                    </label>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="nivel_cole" value="Inicial" checked>
                                                    <i class="far fa-check-circle fa-fw"></i> &nbsp; Inicial
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="nivel_cole" value="Primaria">
                                                    <i class="far fa-check-circle fa-fw"></i> &nbsp; Primaria
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="nivel_cole" value="Secundaria">
                                                    <i class="far fa-check-circle fa-fw"></i> &nbsp; Secundaria
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="categoria_nombre" class="bmd-label-floating">Nivel del Colegio
                                            <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                        </label>
                                        <input type="text" class="form-control" name="nivel_cole" id="nivel_cole"
                                            maxlength="40" required>
                                    </div>
                                </div> -->




                                <!--                                 <div class="col-12 col-md-6" style="margin-top: 30px;">
                                    <label for="" class="bmd-label-floating">Estado De la Categoria &nbsp;
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
                                </div> -->
                                <!--                             <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="categoria_estado" class="bmd-label-floating">Estado de la categoría</label>
                                    <select class="form-control" name="categoria_estado_reg" id="categoria_estado">
                                        <option value="1" selected="" >Habilitada</option>
                                        <option value="0">Deshabilitada</option>
                                    </select>
                                </div>
                            </div> -->
                            </div>
                        </div>
                        <p class="text-center">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                        &nbsp; &nbsp;
                            <button id="btnAddCole" type="submit" class="btn btn-raised btn-info btn-sm">
                                <i class="far fa-save">
                                </i> &nbsp; GUARDAR
                            </button>
                        </p>

                    </fieldset>

                    <!--   <p class="text-center" style="margin-top: 40px;">
                    <button type="reset" class="btn btn-raised btn-secondary btn-sm">
                        <i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR
                    </button>
                    &nbsp; &nbsp;
                    <button type="submit" class="btn btn-raised btn-info btn-sm">
                        <i class="far fa-save">
                        </i> &nbsp; GUARDAR
                    </button>
                </p>
                <p class="text-center">
                    <small>Los campos marcados con &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp; son obligatorios</small>
                </p> -->
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
                let token =
                    'OHgwZ3RyMVNDQzZYb3l3VjFaZFlCVXN4KzRXZ0FyTXFyREhwTFZQaUpEV21mbEY1ekw1UDgwMU4rRk1rRm5sLzNUTlJPRWxmallMNkVKMUtCWXBnVkREZW9CbHBjNE5wek5UenZDYUEwWlRxekJwb09MZkpxNG5DWjQyWFVvVm4=';
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
    <script src="../resources/provincias.js"></script>
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/ajax.js"></script>  -->
</body>

</html>