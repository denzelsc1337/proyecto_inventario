<?php
require_once('../../config/security.php');
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

            <div class="full-box page-header ">
                <h3 class="text-left text-uppercase Gagalin">
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Despachos
                </h3>
                <p class="text-justify">
                    En el módulo Salida de Producto usted podrá registrar las despachos que servirán para tener un mejor registro de entradas.
                </p>
            </div>

            <div class="container-fluid Gagalin">
                <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
                    <li>
                        <a class="" href="../Producto/Productos.php">
                            <i class="fas fa-box fa-fw"></i> &nbsp; Ingreso de producto
                        </a>
                    </li>
                    <li>
                        <a href="../Producto/listaProductos.php">
                            <i class="fas fa-boxes fa-fw"></i> &nbsp; Productos en almacen
                        </a>
                    </li>
                    <li>
                    <li>
                        <a class="active" href="listaDespacho.php" class="Gagalin">
                            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Despachos
                        </a>
                    </li>
                    <!-- <li>
                        <a href="http://systems.designlopers.com/SVI/provider-search/">
                            <i class="fas fa-search fa-fw"></i> &nbsp; Buscar proveedor
                        </a>
                    </li> -->
                </ul>
                <nav class="navbar navbar-light bg-light justify-content-between">
                    <a class="navbar-brand"></a>

                    <form class="form-inline" method="POST" action="buscarDespacho.php">
                        <input class="form-control mr-sm-2" onkeyup="EnableDisable(this)" type="text" id="search" name="search" placeholder="Ingrese" aria-label="Search">
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
                                <th>Colegio</th>
                                <th>Categoria</th>
                                <th>Producto Entregado</th>
                                <th>Cantidad de Salida</th>
                                <th>Fecha de Salida</th>
                                <th>DNI Contacto</th>
                                <th>Nombre y Apellido Contacto</th>
                                <th>Comentario</th>
                                <th hidden>Editar</th>
                                <!-- <button id="btnEnble">Enable</button> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listSalida as $salidaOut) {
                            ?>
                                <tr class="text-center">
                                    <td hidden><?php echo $salidaOut[0] ?></td>
                                    <td><?php echo $salidaOut[1] ?></td>
                                    <td><?php echo $salidaOut[2] ?></td>
                                    <td><?php echo $salidaOut[3] ?></td>
                                    <td><?php echo $salidaOut[4] ?></td>
                                    <td><?php echo $salidaOut[5] ?></td>
                                    <td><?php echo $salidaOut[6] ?></td>
                                    <td><?php echo $salidaOut[7]/*if (empty($salidaOut[7])) ? echo "- - -" : echo $salidaOut[7]*/ ?></td>
                                    <td><?php echo $salidaOut[8] ?></td>

                                    <td hidden>
                                        <button type="button" class="btn btn-success editDesp" data-toggle="modal" data-target="#exampleModal">
                                            Actualizar
                                        </button>
                                        <!--                                         <button type="button" class="btn btn-success editDesp" data-toggle="modal" id="<?php //echo $salidaOut[0] 
                                                                                                                                                                    ?>" data-target="#exampleModal">
                                            Actualizar
                                        </button> -->
                                    </td>

                                </tr>
                        </tbody>
                    <?php
                            }
                    ?>
                    </table>
                </div>
        </section>
    </main>
    <!----------------------------------------------------------- Modal ----------------------------------------------------------------->
    <div class="modal fade" id="editDesp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Despacho</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../../Controlador/ActualizarDespacho.php" method="POST">
                        <input type="text" id="desp_id" name="desp_id" class="form-control" hidden>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6" hidden>
                                    <div class="form-group">
                                        <label>Encargado de Salida:</label>
                                        <?php
                                        require_once('../../Controlador/controladorListar.php');
                                        ?>
                                        <select class="form-control" name="usuario_cargo" id="usuario_cargo">
                                            <option value="" selected>Seleccione una opción</option>
                                            <?php
                                            foreach ($selectorUser as $cboUser) {
                                            ?>
                                                <option value="<?php echo $cboUser[0]; ?>"><?php echo $cboUser[1]; ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12" hidden>
                                    <div class="form-group">
                                        <label>Colegio a Entregar:</label>
                                        <select class="form-control" name="colegio_cod" id="colegio_cod">
                                            <option value="" selected="">Seleccione una opción</option>
                                            <?php
                                            foreach ($listColegioCod as $cboCole) {
                                            ?>
                                                <option value="<?php echo $cboCole[0]; ?>"><?php echo $cboCole[1]; ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-10" hidden>
                                    <div class="form-group">
                                        <label>Producto a salir:</label>
                                        <?php
                                        //require_once('../../Controlador/controladorListar.php');
                                        ?>
                                        <select class="form-control" name="prod_cod" id="prod_cod">
                                            <option value="" selected="">Seleccione una opción</option>
                                            <?php
                                            $dsbl = "";
                                            foreach ($selectorProd as $cboProd) {
                                                if ($cboProd[0] == 0) {
                                                    $dsbl = "disabled";   
                                            ?>
                                                <option value="<?php echo $cboProd[1]; ?>" <?php echo $dsbl ?> ><?php echo $cboProd[2]; ?></option>
                                            <?php 
                                                }else{
                                                    ?>
                                                <option value="<?php echo $cboProd[1]; ?>"><?php echo $cboProd[2]; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Cantidad de Salida</label>
                                        <input type="number" class="form-control input-barcode" name="cant_sal" id="cant_sal" maxlength="97">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Fecha de Salida</label>
                                        <input type="date" class="form-control" name="fecha_in" id="fecha_in">
                                    </div>
                                </div>

                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label>Comentario</label>
                                        <input type="text" class="form-control input-barcode" name="coment" id="coment" maxlength="30">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Recepcionista</label>
                                        <input type="text" class="form-control input-barcode" name="firma" id="firma" maxlength="30">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" id="actuDespacho" name="actuDespacho" class="btn btn-primary">Actualizar Cambios</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-----------------------------------------------------------Llamar Modal ----------------------------------------------------------------->


    <script>
        $(document).ready(function() {
            var stock_test = document.getElementById("prod_cod");
            var updt_btn = document.getElementById("actuDespacho");
            $('.editDesp').on('click', function() {

                $('#editDesp').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#desp_id').val(data[0]);
                $('#cant_sal').val(data[4]);
                $('#fecha_in').val(data[5]);
                $('#coment').val(data[8]);
                $('#firma').val(data[7]);
            });
        });
    </script>
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

    <!--     <script>
        $(document).ready(function() {
            let $col = document.querySelector('#prod_cod');
            let $despa_id = document.getElementById('#desp_id');


            $('#add').click(function() {
                $('#insert').val("Insert");
                $('#insert_form')[0].reset();
            });
            $(document).on('click', '.editData', function() {
                
                var desp_id = $(this).attr("id");
                console.log(desp_id)

                $.ajax({
                    url: "../../Controlador/getUpdateSalidaProd.php",
                    method: "POST",
                    data: {
                        desp_id: desp_id
                    },
                    dataType: "json",
                    success: function(data) {
                        const codDesp = desp_id
                        const sendDatos = {
                            'codDesp': codDesp
                        }
                        $('#usuario_cargo').val(data.id_usuario);
                        $('#colegio_cod').val(data.nom_colegio);
                        //$('#prod_cod').val(data.nom_producto);  
                        $('#cant_sal').val(data.cant_prod_des);
                        $('#fecha_in').val(data.fecha_des);
                        $('#coment').val(codDesp);
                        $('#firma').val(data.recepcionista);
                        $('#desp_id').val(data.secuence_det_des);
                        //$('#insert').val("Update");  
                        $('#updateData').modal('show');

                        cargarProd(sendDatos)
                    }
                });

            });

            function cargarProd(sendDatos) {
                $.ajax({
                    type: "POST",
                    url: "../../Controlador/Select.php",
                    data: sendDatos,
                    success: function(response) {
                        const producto = JSON.parse(response);
                        let template

                        producto.forEach(productos => {
                            template += `<option class="form-control" value="${productos.nom_product}">${productos.nom_product}</option>`;
                        })

                        $col.innerHTML = template;
                    }
                })
            }
        });
    </script> -->

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