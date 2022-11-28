<?php
session_start();

$Usesion=(isset($_SESSION['usuarios']))?$_SESSION['usuarios']:"";
if($Usesion == null || $Usesion='' ){
echo '<script>alert("Debe de iniciar sesión para comenzar"); window.location="../../index.php";</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Zona Admin</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../Estilos/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../Estilos/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../Estilos/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../Estilos/css/bootstrap.min.css">
	<link rel="stylesheet" href="../Estilos/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../Estilos/css/demo.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- Importante libreria -->
</head>
<body>
	<div class="wrapper overlay-sidebar">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="nuevo.php" class="logo">
				<img  style="margin-top:-8px;" src="../Estilos/img/dbicon.png" alt="" width="100" height="100" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle sidenav-overlay-toggler">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<img src="" width="1000" height="40" alt=""><!-- adjuntar imagen -->
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						
					

						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" target="_blank" href="reportes.php">
												<div class="quick-actions-item">
													<i class="icon-printer"></i>
													<span class="text">Generar Reportes</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="listado_programas.php">
												<div class="quick-actions-item">
													<i class="flaticon-database"></i>
													<span class="text">Registrar Nuevo Programa</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="listado_fichas.php">
												<div class="quick-actions-item">
													<i class="flaticon-pen"></i>
													<span class="text">Registrar Nueva Ficha</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="icon-home"></i>
													<span class="text">Nueva area de pasantia</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="listado_ambiente.php">
												<div class="quick-actions-item">
													<i class="fas fa-briefcase  "></i>
													<span class="text">Nuevo ambiente</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file"></i>
													<span class="text">Create New Invoice</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
								<i class="fas fa-user" style="color:white;font-size:22px;margin-top:7px;"></i>
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../Estilos/img/logo_Sena.png" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4 style="color:black;"><?php echo $_SESSION['usuarios'] ?></h4>
												<p class="text-muted"></p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">Mi perfil</a>
												<a class="btn btn-xs btn-danger btn-sm" href="cerrar.php">Cerrar</a>
											</div>
										</div>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
						<i class="fas fa-user" style="color:black;font-size:30px;margin-top:7px;"></i>

						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<h4><?php echo $_SESSION['usuarios'] ?></h4>
									<span class="user-level">Administrator</span>
								</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a  href="nuevo.php" class="" >
								<i class="fas fa-home"></i>
								<p>Menu Principal</p>
								<span class=""></span>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Opciones de Menu</h4>
						</li>
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-th-list"></i>
								<p>Consultas</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="listado_instructor.php">
											<span class="sub-item">Consultar instructor</span>
										</a>
									</li>
									<li>
										<a href="listado_pasantes.php">
											<span class="sub-item">Consultar aprendiz</span>
										</a>
									</li>
									<li>
										<a href="listado_programas.php">
											<span class="sub-item">Consultar Programa</span>
										</a>
									</li>
									<li>
										<a href="listado_fichas.php">
											<span class="sub-item">Consultar Fichas</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Reportes</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="registro_area_instructor.php">
											<span class="sub-item">Imprimir Reportes</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
            <div class="content">