<?php
include_once('../../config/Conexion.php');
require_once('../../config/security.php');

$connect = mysqli_connect("localhost", "root", "", "inventario");

$search = $_POST['search'];

if (!$connect) {
    die('Could not connect: ' . mysqli_error());
}

$query = "SELECT * FROM colegios  WHERE
   cod_modu_colegio LIKE '%" . $search . "%' or nom_colegio LIKE '%" . $search . "%' ";

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
                                <!--                                 <li>
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
                                        <i class="fa fa-box fa-fw"></i> &nbsp; Ingreso de producto
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
                <a href="../config/logout.php" class="Blogger">Cerrar Sesión
                    <i class="fa fa-power-off"></i>
                </a>
            </nav>

            <!-- Page header -->

            <div class="full-box page-header ">
                <h3 class="text-left text-uppercase Gagalin">
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Colegios
                </h3>
                <p class="text-justify">
                    En el módulo COLEGIOS usted podrá registrar o actualizar los datos de los colegios y ver todos los colegios
                    registrados en el sistema.
                </p>
            </div>

            <div class="container-fluid Gagalin">
                <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
                    <li>
                        <a href="../Colegio/Colegios.php">
                            <i class="fas fa-shipping-fast fa-fw"></i> &nbsp; Nuevo Colegio
                        </a>
                    </li>
                    <li>
                        <a class="" href="../Categoria/listaColegios.php">
                            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Colegios
                        </a>
                    </li>
                </ul>
                <nav class="navbar navbar-light bg-light justify-content-between">
                    <a class="navbar-brand"></a>

                    <form class="form-inline" method="POST" action="buscarColegio.php">
                        <input class="form-control mr-sm-2" type="text" id="search" name="search" placeholder="Colegio o Nro.Modular" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>

                </nav>
            </div>

            <div class="container-fluid">

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
                                <th hidden>№ Colegio</th>
                                <th>Cod Modular</th>
                                <th hidden>UGEL</th>
                                <th>Colegio</th>
                                <th>Dirección</th>
                                <th hidden>Telefono</th>
                                <th hidden>Correo</th>
                                <th>Departamento</th>
                                <th>Provincia</th>
                                <th>Distrito</th>
                                <th>Director</th>
                                <th>Nivel</th>
                                <th>Editar</th>
                                <!-- <button id="btnEnble">Enable</button> -->
                            </tr>
                        </thead>
                        <tbody id="container">

                            <?php
                            if ($count >= 1) {

                                while ($fila = mysqli_fetch_array($result)) {
                            ?>
                                    <tr class="text-center">
                                        <td hidden><?php echo $fila['secuence_col'] ?></td>
                                        <td><?php echo $fila['cod_modu_colegio'] ?></td>
                                        <td hidden><?php echo $fila['ugel_colegio'] ?></td>
                                        <td><?php echo $fila['nom_colegio'] ?></td>
                                        <td><?php echo $fila['dir_colegio'] ?></td>
                                        <td hidden><?php echo $fila['tlf_colegio'] ?></td>
                                        <td hidden><?php echo $fila['mail_colegio'] ?></td>
                                        <td><?php echo $fila['depa_colegio'] ?></td>
                                        <td><?php echo $fila['prov_colegio'] ?></td>
                                        <td><?php echo $fila['dist_colegio'] ?></td>
                                        <td><?php echo $fila['director_colegio'] ?></td>
                                        <td><?php echo $fila['nivel_colegio'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success editCole" data-toggle="modal" data-target="#exampleModal">
                                                Actualizar
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
        </section>
    </main>
    <!----------------------------------------------------------- Modal ----------------------------------------------------------------->
    <div class="modal fade" id="editCole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Colegios</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../../Controlador/ActualizarColegios.php" method="POST">
                    <div class="modal-body">
                        <!--<div class="form-group">
                           <label>Id categoria</label>
                            <input type="text" id="idcate" name="idcate" class="form-control" placeholder="test">
                        </div> -->
                        <div class="container-fluid">
                            <div class="row">
                                <input type="hidden" id="secuence" name="secuence" class="form-control">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Codigo Modular</label>
                                        <input type="text" id="cod_mod" name="cod_mod" class="form-control" placeholder="test">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group ">
                                        <label>Ugel</label>
                                        <input type="text" id="cod_ugel" name="cod_ugel" class="form-control" placeholder="test">
                                    </div>
                                </div>

                                <div class="form-group col-12 col-md-12">
                                    <label>Nombre de colegio</label>
                                    <input type="text" id="nom_cole" name="nom_cole" class="form-control" placeholder="test">
                                </div>

                                <div class="form-group col-12 col-md-12">
                                    <label>Direccion</label>
                                    <input type="text" id="dir_cole" name="dir_cole" class="form-control" placeholder="test">
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label>Telefono</label>
                                    <input type="text" id="num_cole" name="num_cole" class="form-control" placeholder="test">
                                </div>

                                <div class="form-group col-12 col-md-12">
                                    <label>Correo</label>
                                    <input type="text" id="email_cole" name="email_cole" class="form-control" placeholder="test">
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label>Departamento</label>
                                    <input type="text" id="dpto_cole" name="dpto_cole" class="form-control" placeholder="test">
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label>Provincia</label>
                                    <input type="text" id="prov_cole" name="prov_cole" class="form-control" placeholder="test">
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label>Distrito</label>
                                    <input type="text" id="dsto_cole" name="dsto_cole" class="form-control" placeholder="test">
                                </div>

                                <div class="form-group col-12 col-md-12">
                                    <label>Director</label>
                                    <input type="text" id="loc_cole" name="loc_cole" class="form-control" placeholder="test">
                                </div>

                                <div class="form-group col-12 col-md-12">
                                    <label>Nivel</label>
                                    <input type="text" id="nivel_cole" name="nivel_cole" class="form-control" placeholder="test">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" name="actuCole" class="btn btn-primary">Actualizar Cambios</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-----------------------------------------------------------Llamar Modal ----------------------------------------------------------------->
    <script>
        $(document).ready(function() {
            $('.editCole').on('click', function() {

                $('#editCole').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#secuence').val(data[0]);
                $('#cod_mod').val(data[1]);
                $('#cod_ugel').val(data[2]);
                $('#nom_cole').val(data[3]);
                $('#dir_cole').val(data[4]);
                $('#num_cole').val(data[5]);
                $('#email_cole').val(data[6]);
                $('#dpto_cole').val(data[7]);
                $('#prov_cole').val(data[8]);
                $('#dsto_cole').val(data[9]);
                $('#loc_cole').val(data[10]);
                $('#nivel_cole').val(data[11]);
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


    <!-----------------------------------------------------------Llamar Modal ----------------------------------------------------------------->
    <script src="http://systems.designlopers.com/SVI/vistas/js/main.js"></script>
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/ajax.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-----------------------------------------------------------Llamar Modal ----------------------------------------------------------------->
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/ajax.js"></script> -->
</body>

</html>