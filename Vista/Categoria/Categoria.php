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

         <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
    </head>
    <body>
      <!-- Main container -->
      <main class="full-box main-container">
          <!-- Nav lateral -->
          <section class="full-box nav-lateral">
            <div class="full-box nav-lateral-bg show-nav-lateral"></div>
            <div class="full-box nav-lateral-content scroll">
                <figure class="full-box nav-lateral-avatar">
                    <i class="far fa-times-circle show-nav-lateral"></i>
                    <img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Female_4.png" class="img-fluid" alt="Avatar">
                    <figcaption class="text-center Blogger" style="font-size: 22px;">
                        <?php echo $_SESSION['name']; ?><br><small class="Blogger"><?php echo $_SESSION['id_rol'] ?></small>
                    </figcaption>
                </figure>
                <div class="full-box nav-lateral-bar">
                </div>
                <nav class="full-box nav-lateral-menu">
                    <ul>
                        <li>
                            <a href="../principal.php" class="Blogger">
                                <i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard
                            </a>
                        </li>

                        <li>
                            <a href="" class="nav-btn-submenu Blogger">
                                <i class="fas fa-briefcase fa-fw"></i> &nbsp; Administración <i class="fa fa-chevron-down"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="Categoria.php" class="Blogger">
                                        <i class="fa fa-tags fa-fw"></i> &nbsp; Nueva categoría
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="Blogger">
                                        <i class="fa fa-shipping-fast fa-fw"></i> &nbsp; Nuevo proveedor
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="Blogger">
                                        <i class="fa fa-user-tie fa-fw"></i> &nbsp; Nuevo usuario
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu Blogger"><i class="fa fa-boxes fa-fw"></i> &nbsp; Productos <i class="fa fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="#" class="Blogger">
                                        <i class="fa fa-box fa-fw"></i> &nbsp; Nuevo producto
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="Blogger">
                                        <i class="fa fa-boxes fa-fw"></i> &nbsp; Productos en almacén
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="Blogger">
                                        <i class="fab fa-shopify fa-fw"></i> &nbsp; Productos por categoría
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="Blogger">
                                        <i class="fa fa-history fa-fw"></i> &nbsp; Productos por vencimiento
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="Blogger">
                                        <i class="fa fa-stopwatch-20 fa-fw"></i> &nbsp; Productos en stock mínimo
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="Blogger">
                                        <i class="fa fa-search fa-fw"></i> &nbsp; Buscar productos
                                    </a>
                                </li>
                            </ul>
                        </li>

                            <!-- <li>
                                    <a href="#" class="nav-btn-submenu"><i class="fa fa-shopping-basket fa-fw"></i> &nbsp; Compras <i class="fa fa-chevron-down"></i></a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-bag fa-fw"></i> &nbsp; Nueva compra
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file-invoice-dollar fa-fw"></i> &nbsp; Compras realizadas
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search-dollar fa-fw"></i> &nbsp; Buscar compra
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->

                            <!-- <li>
                        <a href="#" class="nav-btn-submenu"><i class="fa fa-hand-holding-usd fa-fw"></i> &nbsp; Ventas <i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/sale-new/">
                                    <i class="fa fa-cart-plus fa-fw"></i> &nbsp; Nueva venta
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/sale-new/wholesale/">
                                    <i class="fa fa-parachute-box fa-fw"></i> &nbsp; Venta por mayoreo
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/sale-list/">
                                    <i class="fa fa-coins fa-fw"></i> &nbsp; Ventas realizadas
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/sale-pending/">
                                    <i class="fab fa-creative-commons-nc fa-fw"></i> &nbsp; Ventas pendientes
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/sale-search-date/">
                                    <i class="fa fa-search-dollar fa-fw"></i> &nbsp; Buscar venta (Fecha)
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/sale-search-code/">
                                    <i class="fa fa-search-dollar fa-fw"></i> &nbsp; Buscar venta (Código)
                                </a>
                            </li>
                        </ul>
                    </li> -->

                            <!-- <li>
                        <a href="#" class="nav-btn-submenu"><i class="fa fa-wallet fa-fw"></i> &nbsp; Movimientos en cajas <i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/movement-new/">
                                    <i class="far fa-money-bill-alt fa-fw"></i> &nbsp; Nuevo movimiento
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/movement-list/">
                                    <i class="fa fa-money-check-alt fa-fw"></i> &nbsp; Movimientos realizados
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/movement-search/">
                                    <i class="fa fa-search-dollar fa-fw"></i> &nbsp; Buscar movimientos
                                </a>
                            </li>
                        </ul>
                    </li> -->

                            <!--                 <li>
                        <a href="#" class="nav-btn-submenu"><i class="fa fa-truck-loading fa-fw"></i> &nbsp; Devoluciones <i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/return-list/">
                                    <i class="fa fa-people-carry fa-fw"></i> &nbsp; Devoluciones realizadas
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/return-search/">
                                    <i class="fa fa-dolly-flatbed fa-fw"></i> &nbsp; Buscar devoluciones
                                </a>
                            </li>
                        </ul>
                    </li> -->

                            <!--                 <li>
                        <a href="#" class="nav-btn-submenu"><i class="fa fa-warehouse fa-fw"></i> &nbsp; Kardex <i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/kardex/">
                                    <i class="fa fa-pallet fa-fw"></i> &nbsp; Kardex general
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/kardex-search/">
                                    <i class="fa fa-search fa-fw"></i> &nbsp; Buscar kardex
                                </a>
                            </li>
                            <li>
                                <a href="http://systems.designlopers.com/SVI/kardex-product/">
                                    <i class="fa fa-luggage-cart fa-fw"></i> &nbsp; Kardex por producto
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="#" class="nav-btn-submenu Blogger"><i class="far fa-file-pdf fa-fw"></i> &nbsp; Reportes <i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="#" class="Blogger">
                                    <i class="fa fa-hand-holding-usd fa-fw"></i> &nbsp; Reportes de ventas
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
                    <a href="../../config/logout.php" class="Blogger">Cerrar Sesión
                        <i class="fa fa-power-off"></i>
                    </a>
            </nav>
       <!-- <nav class="full-box navbar-info">
        <a href="#" class="float-left show-nav-lateral">
            <i class="fas fa-bars"></i>
        </a>
        <a href="http://systems.designlopers.com/SVI/user-update/dEpjOG5JVWliYnFkMEdKd0NiK3FVUT09/">
            <i class="fas fa-user-cog"></i>
        </a>
        <a href="#" class="btn-exit-system">
            <i class="fas fa-power-off"></i>
        </a> -->
    </nav><div class="full-box page-header">
        <h3 class="text-left text-uppercase">
            <i class="fas fa-tags fa-fw"></i> &nbsp; Nueva categoría
        </h3>
        <p class="text-justify">
            En el módulo CATEGORÍA usted podrá registrar las categorías que servirán para agregar productos y también podrá ver los productos que pertenecen a una categoría determinada. Además de lo antes mencionado, puede actualizar los datos de las categorías, realizar búsquedas de categorías o eliminarlas si así lo desea.
        </p></div>

        <div class="container-fluid">
            <ul class="full-box list-unstyled page-nav-tabs text-uppercase">
                <li>
                    <a class="active" href="Categoria.php">
                        <i class="fas fa-tags fa-fw"></i> &nbsp; Nueva categoría
                    </a>
                </li>
                <li>
                    <a href="listaCategorias.php">
                        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de categorías
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-search fa-fw"></i> &nbsp; Buscar categoría
                    </a>
                </li>
            </ul>
        </div>

        <div class="container-fluid">
         <form id="frmAjax" class="form-neon FormularioAjax" method="POST">

            <fieldset>
                <legend><i class="far fa-address-card"></i> &nbsp; Información de la categoría</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="categoria_nombre" class="bmd-label-floating">Codigo de Categoria &nbsp;
                                    <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                </label>
                                <input type="number"  class="form-control" name="cod_cate" id="cod_cate" maxlength="40">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="categoria_nombre" class="bmd-label-floating">Nombre de la categoría &nbsp;
                                    <i class="fab fa-font-awesome-alt"></i> &nbsp;
                                </label>
                                <input type="text" class="form-control" name="categoria_nombre" id="categoria_nombre" maxlength="40">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <label for="categoria_nombre" class="bmd-label-floating">Estado De la Categoria &nbsp;
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
                                                <input type="radio" name="categoria_estado" value="0" >
                                                <i class="far fa-times-circle fa-fw"></i> &nbsp; Deshabilitado
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <button id="btnSave">
                        <i>
                        </i> &nbsp; GUARDAR
                    </button>
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
<!-- <script>
    let btn_salir=document.querySelector('.btn-exit-system');

    btn_salir.addEventListener('click', function(e){
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

        let url='http://systems.designlopers.com/SVI/ajax/loginAjax.php';
        let token='bWpkOUtraXlPWndlQzQyOGkzUG1vam04NmZLZ3VRUlQxT2RXak9jeGJzS2VvRVdmZ0JXbzl1MjZ2RDB3TzhZNDVVWHJEblV3bDhZbzVtSzhBbjBqUzJJQUlKQnduOHFRYm1KUjFPeWExYmNvZXdXVFgwdUlxKzlEc0w3aEpkNlA=';
        let usuario='OFh3MUpva29KdER0ZHNqc0pkTGlmdz09';

        let datos = new FormData();
        datos.append("token", token);
        datos.append("usuario", usuario);
        datos.append("modulo_login", "cerrar_sesion");

        fetch(url,{
            method: 'POST',
            body: datos
        })
        .then(respuesta => respuesta.json())
        .then(respuesta =>{
          return alertas_ajax(respuesta);
      });
    }
});
});
</script> --><!--=============================================
=            Include JavaScript files           =
==============================================-->
<!-- popper -->
<script src="http://systems.designlopers.com/SVI/vistas/js/popper.min.js" ></script>

<!-- Bootstrap V4.3 -->
<script src="http://systems.designlopers.com/SVI/vistas/js/bootstrap.min.js" ></script>

<!-- SnackbarJS plugin -->
<script src="http://systems.designlopers.com/SVI/vistas/js/snackbar.min.js" ></script>


<script src="http://systems.designlopers.com/SVI/vistas/js/bootstrap-material-design.min.js" ></script>
<script>
$(document).ready(function() {
$('body').bootstrapMaterialDesign();
});
</script>
<!-- Frontend Logic -->
<!-- refresh here -->
    <script src="../resources/functions.js"></script>
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#btnSave').click(function(){
            var _data=$('#frmAjax').serialize();
            $.ajax({
                type:"POST",
                url:"../../Controlador/AddCategoria.php",
                data: _data,
                success:function(r){
                    if (r==1) {
                        alert("Add successfully");
                        event.returnValue=false;
                        document.getElementById("categoria_nombre").value = "";
                        document.getElementById("cod_cate").value = "";
                    }else{
                        alert("something went wrong :c");
                    }
                }
            });
            return false;
        });
    });
</script> -->
<!-- refresh here -->
</body>
</html>
