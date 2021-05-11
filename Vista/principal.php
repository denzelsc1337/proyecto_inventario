	<?php
	require_once('../config/security.php');

	/*if(isset($_SESSION['user'])){
	    header('Location:Main.php');
	}*/

	?>
	<!DOCTYPE html>
	<html lang="es">

	<head>
		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<title>SISTEMA Inventario</title>

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
		<link rel="stylesheet" href="css/all.css">

		<!-- Sweet Alerts V8.13.0 CSS file -->
		<link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/sweetalert2.min.css">

		<!-- Sweet Alert V8.13.0 JS file-->
		<script src="http://systems.designlopers.com/SVI/vistas/js/sweetalert2.min.js"></script>

		<!-- General Styles -->
		<link rel="stylesheet" href="http://systems.designlopers.com/SVI/vistas/css/style.css">

		<!-- jQuery V3.4.1 -->
		<script src="http://systems.designlopers.com/SVI/vistas/js/jquery-3.4.1.min.js"></script>
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
						<img src="http://systems.designlopers.com/SVI/vistas/assets/avatar/Avatar_Male_4.png" class="img-fluid" alt="Avatar">
						<figcaption class="text-center Blogger">
							<?php echo $_SESSION['name']; ?><br><small class="Blogger"><?php echo $_SESSION['id_rol'] ?></small>
						</figcaption>
					</figure>
					<div class="full-box nav-lateral-bar">
					</div>
					<nav class="full-box nav-lateral-menu">
						<ul>
							<li>
								<a href="principal.php" class="Blogger">
									<i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard
								</a>
							</li>

							<li>
								<a href="" class="nav-btn-submenu Blogger">
									<i class="fas fa-briefcase fa-fw"></i> &nbsp; Administración <i class="fa fa-chevron-down"></i>
								</a>
								<ul>
									<li>
										<a href="Categoria/Categoria.php" class="Blogger">
											<i class="fa fa-tags fa-fw"></i> &nbsp; Categorías
										</a>
									</li>
									<li>
										<a href="Categoria/listaColegios.php" class="Blogger">
											<i class="fa fa-school fa-fw"></i> &nbsp; Colegios
										</a>
									</li>

									<li>
										<a href="Categoria/Usuario.php" class="Blogger">
											<i class="fa fa-user-tie fa-fw"></i> &nbsp; Usuarios
										</a>
									</li>
								</ul>
							</li>

							<li>
								<a href="#" class="nav-btn-submenu Blogger"><i class="fa fa-boxes fa-fw"></i> &nbsp; Productos <i class="fa fa-chevron-down"></i></a>
								<ul>
									<li>
										<a href="Producto/Productos.php" class="Blogger">
											<i class="fa fa-box fa-fw"></i> &nbsp; Nuevo producto
										</a>
									</li>
									<li>
										<a href="Producto/listaProductos.php" class="Blogger">
											<i class="fa fa-boxes fa-fw"></i> &nbsp; Productos en almacén
										</a>
									</li>
									<li>
										<a href="Producto/Producto-Categoria.php" class="Blogger">
											<i class="fab fa-shopify fa-fw"></i> &nbsp; Productos por categoría
										</a>
									</li>
									<li>
										<a href="Producto/Producto-Vencimiento.php" class="Blogger">
											<i class="fa fa-history fa-fw"></i> &nbsp; Productos por vencimiento
										</a>
									</li>
									<li>
										<a href="Producto/Producto-Stock.php" class="Blogger">
											<i class="fa fa-stopwatch-20 fa-fw"></i> &nbsp; Productos en stock mínimo
										</a>
									</li>
									<li>
										<a href="Producto/BuscarProducto.php" class="Blogger">
											<i class="fa fa-search fa-fw"></i> &nbsp; Buscar productos
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#" class="nav-btn-submenu Blogger"><i class="far fa-file-pdf fa-fw"></i> &nbsp; Reportes <i class="fa fa-chevron-down"></i></a>
								<ul>
									<li>
										<a href="Reporte/Reportes.php" class="Blogger">
											<i class="fa fa-hand-holding-usd fa-fw"></i> &nbsp; Reportes de ventas
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
					<h3 class="text-left Gagalin">
						<i class="fab fa-dashcube fa-fw"></i> &nbsp; DASHBOARD
					</h3>
					<p class="text-justify Blogger">
						¡Bienvenido <strong>
							<?php echo $_SESSION['name'] ?>

						</strong>! Este es el panel principal del sistema acá podrá encontrar atajos para acceder a los distintos listados de cada módulo del sistema.
					</p>
				</div>
				<div class="container-fluid">
					<div class="full-box tile-container">

						<!-- <a href="http://systems.designlopers.com/SVI/cashier-list/" class="tile">
					<div class="tile-tittle">Cajas</div>
					<div class="tile-icon">
						<i class="fa fa-cash-register fa-fw"></i>
						<p> - Registradas</p>
					</div>
				</a> -->
						<?php
						$hide = "";
						if ($_SESSION['id_rol'] == '2') {
							$hide = "style='display:none;'";
						} ?>
						<a href="#" class="tile">
							<div class="tile-tittle Gagalin">Proveedores</div>
							<div class="tile-icon">
								<i class="fa fa-shipping-fast fa-fw"></i>
								<p class="Blogger"> - Registrados</p>
							</div>
						</a>
						<a href="Categoria/Categoria.php" class="tile">
							<div class="tile-tittle Gagalin">Categorías</div>
							<div class="tile-icon">
								<i class="fa fa-tags fa-fw"></i>
								<?php

								?>
								<p class="Blogger"> - Registradas</p>
							</div>
						</a>
						<a href="#" class="tile" <?php echo $hide; ?>>
							<div class="tile-tittle Gagalin">Usuarios</div>
							<div class="tile-icon">
								<i class="fa fa-user-tie fa-fw"></i>
								<p class="Blogger"> - Registrados</p>
							</div>
						</a>

						<a href="#" class="tile">
							<div class="tile-tittle Gagalin">Productos</div>
							<div class="tile-icon">
								<i class="fa fa-boxes fa-fw"></i>
								<p class="Blogger"> - Registrados</p>
							</div>
						</a>
						<!-- <a href="http://systems.designlopers.com/SVI/client-list/" class="tile">
					<div class="tile-tittle">Clientes</div>
					<div class="tile-icon">
						<i class="fa fa-child fa-fw"></i>
						<p>22 Registrados</p>
					</div>
				</a> -->

						<!-- <a href="http://systems.designlopers.com/SVI/movement-list/" class="tile">
					<div class="tile-tittle">Movimientos</div>
					<div class="tile-icon">
						<i class="fa fa-money-check-alt fa-fw"></i>
						<p> &nbsp; </p>
					</div>
				</a> -->

						<!-- <a href="http://systems.designlopers.com/SVI/sale-list/" class="tile">
					<div class="tile-tittle">Ventas</div>
					<div class="tile-icon">
						<i class="fa fa-coins fa-fw"></i>
						<p> &nbsp; </p>
					</div>
				</a> -->

						<!-- <a href="http://systems.designlopers.com/SVI/return-list/" class="tile">
					<div class="tile-tittle">Devoluciones</div>
					<div class="tile-icon">
						<i class="fa fa-people-carry fa-fw"></i>
						<p> &nbsp; </p>
					</div>
				</a> -->

						<!-- <a href="http://systems.designlopers.com/SVI/shop-list/" class="tile">
					<div class="tile-tittle">Compras</div>
					<div class="tile-icon">
						<i class="fa fa-file-invoice-dollar fa-fw"></i>
						<p> &nbsp; </p>
					</div>
				</a> -->
						<!-- <a href="http://systems.designlopers.com/SVI/kardex/" class="tile">
					<div class="tile-tittle">Kardex</div>
					<div class="tile-icon">
						<i class="fa fa-pallet fa-fw"></i>
						<p> &nbsp; </p>
					</div>
				</a> -->
						<a href="#" class="tile">
							<div class="tile-tittle Gagalin">Reportes</div>
							<div class="tile-icon">
								<i class="far fa-file-pdf fa-fw"></i>
								<p class="Blogger"> &nbsp; </p>
							</div>
						</a>

					</div>
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

						let url = '../index.php';
						let token = 'SmtCUklpdGRpS3VMLzV2SmpRNy9JVHFvWVJBdGVHNUtCR2ZVMmZGbFh6NGxNdW9Qc3RNMU1VTWRSQm9RdmQvY1BCQ3YrWVh5ZlVSSFBIbTBXQjRnS3VpUEhFdnNDZU9OWWVOQWUwYmJ5a2hGTlNYU2hjc25jWFpUbXo3Q1pDc1I=';
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
		<script src="http://systems.designlopers.com/SVI/vistas/js/printThis.js"></script>

		<script src="http://systems.designlopers.com/SVI/vistas/js/main.js"></script>
		<script src="http://systems.designlopers.com/SVI/vistas/js/ajax.js"></script>
	</body>

	</html>
