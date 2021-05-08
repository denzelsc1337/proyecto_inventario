
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<title>SISTEMA INVENTARIO</title>

<!-- Normalize V8.0.1 -->
<link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/normalize.css">

<!-- Bootstrap V4.3 -->
<link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/bootstrap.min.css">

<!-- Bootstrap Material Design V4.0 -->
<link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/bootstrap-material-design.min.css">

<!-- Font Awesome V5.9.0 -->
<!-- <link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/all.css"> -->
<link rel="stylesheet" href="Vista/css/all.css">

<!-- Sweet Alerts V8.13.0 CSS file -->
<link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/sweetalert2.min.css">

<!-- Sweet Alert V8.13.0 JS file-->
<script src="http://systems.designlopers.com/SVI/vistas/js/sweetalert2.min.js" ></script>

<!-- General Styles -->
<link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/style.css">

<!-- jQuery V3.4.1 -->
<script src="http://systems.designlopers.com/SVI/vistas/js/jquery-3.4.1.min.js" ></script></head>
<body>
	<div class="login-container">
    <div class="login-content">
        <p class="text-center">
            <i class="fas fa-user-circle fa-5x"></i>
        </p>
        <p class="text-center Blogger">
        Inicia
        </p>
        <form method="POST" autocomplete="off" action = "Controlador/loginTest.php">
            <div class="form-group Blogger">
                <label for="UserName" class="bmd-label-floating"><i class="fas fa-user-secret"></i> &nbsp; Usuario</label>
                <input type="text" class="form-control" name="username" id="username"  pattern="[a-zA-Z0-9]{4,35}" maxlength="35" required="" >
            </div>
            <div class="form-group Blogger">
                <label for="UserPassword" class="bmd-label-floating"><i class="fas fa-key"></i> &nbsp; Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" maxlength="100" required="">
            </div>
            <button type="submit" class="btn-login text-center Gagalin" style="font-size: 25px;">LOG IN</button>
        </form>
    </div>
</div>
<!--=============================================
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

