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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap V4.3 -->
    <link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/bootstrap.min.css">

    <!-- Bootstrap Material Design V4.0 -->
    <!-- <link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/bootstrap-material-design.min.css"> -->


    <!-- Font Awesome V5.9.0 -->
    <link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/all.css">
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
                <?php
					$hide = "";
					if ($_SESSION['id_rol'] == '2') {
						$hide = "style='display:none;'";
					} ?>
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

                                <li <?php echo $hide?>>
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
            <!-- <a href="#" class="float-left show-nav-lateral">
                <i class="fas fa-bars"></i>
            </a>
            <a href="http://systems.designlopers.com/SVI/user-update/dEpjOG5JVWliYnFkMEdKd0NiK3FVUT09/">
                <i class="fas fa-user-cog"></i>
            </a>
            <a href="#" class="btn-exit-system">
                <i class="fas fa-power-off"></i>
            </a> -->


            <div class="full-box page-header">
                <h3 class="text-left text-uppercase Gagalin">
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Categorías
                </h3>
                <p class="text-justify">
                    En el módulo CATEGORÍA usted podrá registrar las categorías que servirán para agregar productos y también podrá ver los productos que pertenecen a una categoría determinada. Además de lo antes mencionado, puede actualizar los datos de las categorías o el estado de la categoria.
                </p>
            </div>

            <div class="container-fluid Gagalin">
                <ul class="full-box list-unstyled page-nav-tabs text-uppercase Gagalin">
                    <li>
                        <a href="Categoria.php">
                            <i class="fas fa-tags fa-fw"></i> &nbsp; Nueva categoría
                        </a>
                    </li>
                    <li>
                        <a class="active" href="listaCategorias.php">
                            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de categorías
                        </a>
                    </li>
                </ul>

                <nav class="navbar navbar-light bg-light justify-content-between">
                    <a class="navbar-brand"></a>

                    <form class="form-inline" method="POST" action="buscarCategoria.php">
                        <input class="form-control mr-sm-2" onkeyup="EnableDisable(this)" type="text" id="search" name="search" placeholder="Categoria o Nro.Categ." aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" id="btnCate" name="btnCate" disabled type="submit">Buscar</button>
                    </form>
                </nav>
            </div>

            <div class="container-fluid">

                <div class="table-responsive">
                    <?php
                    require_once('../../Controlador/controladorListar.php');
                    ?>
                    <table class="table table-dark table-sm">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th hidden>secuence</th>
                                <th>№ Categoria</th>
                                <th>Categoria</th>
                                <th>Habilitado/Deshabilitado</th>
                                <th>Editar</th>
                                <!-- <button id="btnEnble">Enable</button> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listaCategoria as $vistaCate) {
                            ?>
                                <tr class="text-center">
                                    <td hidden><?php echo $vistaCate[0] ?></td>
                                    <td><?php echo $vistaCate[1] ?></td>
                                    <td><?php echo $vistaCate[2] ?></td>
                                    <td>
                                        <?php
                                        $hide = "";
                                        if ($_SESSION['id_rol'] == '2') {
                                            $hide = "style='display:none;'";
                                        }
                                        if ($vistaCate[3] == 1) {
                                        ?>
                                            <input type="checkbox" name="categoria_estado" value="1" checked="" disabled>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php
                                        } else {
                                        ?>
                                            <input type="checkbox" name="categoria_estado" value="0" disabled>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#exampleModal">
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


                <!-- <p class="text-right">Mostrando categorías
                    <strong>1</strong> al <strong>15</strong> de un <strong>total de 18</strong>
                </p>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link"><i class="fas fa-angle-double-left"></i></a></li>
                        <li class="page-item"><a class="page-link active" href="">1</a></li>
                        <li class="page-item"><a class="page-link" href="">2</a></li>
                        <li class="page-item"><a class="page-link" href="">Siguiente</a></li>
                        <li class="page-item"><a class="page-link" href=""><i class="fas fa-angle-double-right"></i></a></li>
                    </ul>
                </nav> -->
            </div>
        </section>
    </main>
    <!-- <button name="btnUpdt"disabled>Update</button> -->
    <!-- Button trigger modal -->


    <!----------------------------------------------------------- Modal ----------------------------------------------------------------->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../../Controlador/ActualizarCategoria.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" id="secuence" name="secuence" class="form-control">
                        <input type="hidden" id="idcate" name="idcate" class="form-control">
                        <!--                                                                 <div class="form-group">
                                                                    <label>Id categoria</label>
                                                                    <input type="text" id="idcate" name="idcate" class="form-control" placeholder="test">
                                                                </div> -->

                        <div class="form-group">
                            <label>Nombre Categoria</label>
                            <input type="text" id="nomcate" name="nomcate" class="form-control" placeholder="test">
                        </div>

                        <div class="col-12 col-md-6" style="margin-top: 30px;">
                            <label for="" class="bmd-label-floating">Estado De la Categoria &nbsp;
                                <i class="fab fa-font-awesome-alt"></i> &nbsp;
                            </label>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="estadocate" value="1" checked>
                                            <i class="far fa-check-circle fa-fw"></i> &nbsp; Habilitado
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="estadocate" value="0">
                                            <i class="far fa-times-circle fa-fw"></i> &nbsp; Deshabilitado
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" name="actualizarData" class="btn btn-primary">Actualizar Cambios</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!----------------------------------------------------------- Modal ----------------------------------------------------------------->
       
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
                    let token = 'bWpkOUtraXlPWndlQzQyOGkzUG1vam04NmZLZ3VRUlQxT2RXak9jeGJzS2VvRVdmZ0JXbzl1MjZ2RDB3TzhZNDVVWHJEblV3bDhZbzVtSzhBbjBqUzJJQUlKQnduOHFRYm1KUjFPeWExYmNvZXdXVFgwdUlxKzlEc0w3aEpkNlA=';
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
    <script src="../resources/enableButtons.js"></script>

    <!-- Bootstrap V4.3 -->
    <script src="http://systems.designlopers.com/SVI/vistas/js/bootstrap.min.js"></script>

    <!-- SnackbarJS plugin -->
    <script src="http://systems.designlopers.com/SVI/vistas/js/snackbar.min.js"></script>

    <!-- Bootstrap Material Design V4.0 -->
    <script src="http://systems.designlopers.com/SVI/vistas/js/bootstrap-material-design.min.js"></script>


    <!-- printThis  -->
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/printThis.js"></script> -->

    <script src="http://systems.designlopers.com/SVI/vistas/js/main.js"></script>
    <!-- <script src="http://systems.designlopers.com/SVI/vistas/js/ajax.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.editbtn').on('click', function() {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#secuence').val(data[0]);
                $('#idcate').val(data[1]);
                $('#nomcate').val(data[2]);
                //$('#estadocate').val(data[1]);
                $('#estadocate').prop('checked', data[3]);
            });
        });
    </script>
</body>

</html>