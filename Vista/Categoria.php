
    <?php
    require_once('../../config/security.php');

    /*if(isset($_SESSION['user'])){
        header('Location:Main.php');
    }*/

    ?>

    <!-- Page content -->
    <section class="full-box page-content scroll">
       <nav class="full-box navbar-info">
        <a href="#" class="float-left show-nav-lateral">
            <i class="fas fa-bars"></i>
        </a>
        <a href="http://systems.designlopers.com/SVI/user-update/dEpjOG5JVWliYnFkMEdKd0NiK3FVUT09/">
            <i class="fas fa-user-cog"></i>
        </a>
        <a href="#" class="btn-exit-system">
            <i class="fas fa-power-off"></i>
        </a>
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
            <form class="form-neon FormularioAjax" action="http://systems.designlopers.com/SVI/ajax/categoriaAjax.php" method="POST" data-form="save" autocomplete="off">
                <input type="hidden" name="modulo_categoria" value="registrar">
                <fieldset>
                    <legend><i class="far fa-address-card"></i> &nbsp; Información de la categoría</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="categoria_nombre" class="bmd-label-floating">Nombre de la categoría &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                    <input type="text" pattern="[a-zA-Z0-99áéíóúÁÉÍÓÚñÑ ]{3,40}" class="form-control" name="categoria_nombre_reg" id="categoria_nombre" maxlength="40">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="categoria_ubicacion" class="bmd-label-floating">Pasillo o ubicación de la categoría &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;</label>
                                    <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{3,100}" class="form-control" name="categoria_ubicacion_reg" id="categoria_ubicacion" maxlength="100">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="categoria_estado" class="bmd-label-floating">Estado de la categoría</label>
                                    <select class="form-control" name="categoria_estado_reg" id="categoria_estado">
                                        <option value="Habilitada" selected="" >Habilitada</option>
                                        <option value="Deshabilitada">Deshabilitada</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <p class="text-center" style="margin-top: 40px;">
                    <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                    &nbsp; &nbsp;
                    <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                </p>
                <p class="text-center">
                    <small>Los campos marcados con &nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp; son obligatorios</small>
                </p>
            </form>
        </div>      </section>
    </main>
    <script>
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
</script><!--=============================================
=            Include JavaScript files           =
==============================================-->
<!-- popper -->
<script src="http://systems.designlopers.com/SVI/vistas/js/popper.min.js" ></script>

<!-- Bootstrap V4.3 -->
<script src="http://systems.designlopers.com/SVI/vistas/js/bootstrap.min.js" ></script>

<!-- SnackbarJS plugin -->
<script src="http://systems.designlopers.com/SVI/vistas/js/snackbar.min.js" ></script>

<!-- Bootstrap Material Design V4.0 -->
<script src="http://systems.designlopers.com/SVI/vistas/js/bootstrap-material-design.min.js" ></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

<!-- printThis  -->
<script src="http://systems.designlopers.com/SVI/vistas/js/printThis.js" ></script>

<script src="http://systems.designlopers.com/SVI/vistas/js/main.js" ></script>
<script src="http://systems.designlopers.com/SVI/vistas/js/ajax.js" ></script>
</body>
</html>