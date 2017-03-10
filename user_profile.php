
<?php

    include("funciones_sql_generales.php");
    include("funciones_php_generales.php");

    session_start();

    
    
?>

<!doctype html>
<html class="fixed sidebar-light">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Perfil de usuario - Blablapet</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="assets/images/logo.png" height="35" alt="Blablapet" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Buscar Oferta...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<span class="separator"></span>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
                
                <!-- start: sidebar -->
                <?php echo pMostrarSidebar(); 
                      echo pMostrarInfoUsuario();
                ?>
				<!-- end: sidebar -->
				
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Perfil de usuario</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
							</ol>
					
							<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

					<div class="row">
						<div class="col-md-4 col-lg-3">

							<section class="panel">
								<div class="panel-body">
									<div class="thumb-info mb-md">
										<img src="assets/images/!logged-user.jpg" class="rounded img-responsive" alt="John Doe">
										<div class="thumb-info-title">
											<span class="thumb-info-inner">John Doe</span>
											<span class="thumb-info-type">CEO</span>
										</div>
									</div>


									<hr class="dotted short">

									<h6 class="text-muted">Sobre tí</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis vulputate quam. Interdum et malesuada</p>
									<hr class="dotted short">


								</div>
							</section>


						</div>
						<div class="col-md-8 col-lg-6">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li class="active">
										<a href="#overview" data-toggle="tab">Registrar mascota</a>
									</li>
									<li>
										<a href="#edit" data-toggle="tab">Actualizar perfil</a>
									</li>
                                    <li>
										<a href="#edit-pet" data-toggle="tab">Editar mascota</a>
                                    </li>
								</ul>
								<div class="tab-content">
									<div id="overview" class="tab-pane active">
										
                                        <form class="form-horizontal" method="get">
											<h4 class="mb-xlg">Nueva mascota</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">Nombre</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="nombremascota">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName">Animal</label>
													<div class="col-md-8">
														<select name="tipo">

                                                                <option value="1">Perro</option>

                                                                <option value="2">Gato</option>

                                                                <option value="3">Otros</option>

                                                        </select>
													</div>
                                                    <div class="col-md-8">
														<input type="text" class="form-control" id="tipo-mascota"  style="visibility: hidden;">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Tamano</label>
													<div class="col-md-8">
                                                        <select name="tamano">

                                                                <option value="1">S</option>

                                                                <option value="2">M</option>

                                                                <option value="3">L</option>

                                                        </select>
													</div>
                                                     <div class="col-md-8">
														<input type="text" class="form-control" id="tamano" style="visibility: hidden;">
                                                     </div>
												</div>
                                                <div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Agresividad</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="agresividad">
													</div>
												</div>
											</fieldset>
											<hr class="dotted tall">
											<h4 class="mb-xlg">Sobre tu mascota</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileBio">Mascota</label>
													<div class="col-md-8">
														<textarea class="form-control" rows="3" id="mascotaBio"></textarea>
													</div>
												</div>
											</fieldset>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button type="submit" class="btn btn-primary">Registrar</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>
											</div>

										</form>
									</div>
									<div id="edit" class="tab-pane">

										<form class="form-horizontal" method="get">
											<h4 class="mb-xlg">Información Personal</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">Nombre</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="nombre">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName">Apellidos</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="apellido">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Nick Usuario</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="usuario">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Provincia</label>
                                                    <div class="col-md-8">
                                                    <select name="provincia">
	                                                       <option value='0'>(Seleccionar)</option>
	                                                       <option value='2'>Álava</option>
	                                                       <option value='3'>Albacete</option>
	                                                       <option value='4'>Alicante/Alacant</option>
	                                                       <option value='5'>Almería</option>
	                                                       <option value='6'>Asturias</option>
	                                                       <option value='7'>Ávila</option>
	                                                       <option value='8'>Badajoz</option>
	                                                       <option value='9'>Barcelona</option>
	                                                       <option value='10'>Burgos</option>
	                                                       <option value='11'>Cáceres</option>
	                                                       <option value='12'>Cádiz</option>
	                                                       <option value='13'>Cantabria</option>
	                                                       <option value='14'>Castellón</option>
	                                                       <option value='15'>Ceuta</option>
                                                           <option value='16'>Ciudad Real</option>
	                                                       <option value='17'>Córdoba</option>
	                                                       <option value='18'>Cuenca</option>
	                                                       <option value='19'>Girona</option>
	                                                       <option value='20'>Las Palmas</option>
	                                                       <option value='21'>Granada</option>
	                                                       <option value='22'>Guadalajara</option>
	                                                       <option value='23'>Guipúzcoa</option>
	                                                       <option value='24'>Huelva</option>
	                                                       <option value='25'>Huesca</option>
	                                                       <option value='26'>Islas Baleares</option>
	                                                       <option value='27'>Jaén</option>
	                                                       <option value='28'>A Coruña</option>
	                                                       <option value='29'>La Rioja</option>
	                                                       <option value='30'>León</option>
	                                                       <option value='31'>Lleida</option>
	                                                       <option value='32'>Lugo</option>
	                                                       <option value='33'>Madrid</option>
	                                                       <option value='34'>Málaga</option>
	                                                       <option value='35'>Melilla</option>
	                                                       <option value='36'>Murcia</option>
	                                                       <option value='37'>Navarra</option>
	                                                       <option value='38'>Ourense</option>
	                                                       <option value='39'>Palencia</option>
	                                                       <option value='40'>Pontevedra</option>
	                                                       <option value='41'>Salamanca</option>
	                                                       <option value='42'>Segovia</option>
	                                                       <option value='43'>Sevilla</option>
	                                                       <option value='44'>Soria</option>
	                                                       <option value='45'>Tarragona</option>
	                                                       <option value='46'>Santa Cruz de Tenerife</option>
	                                                       <option value='47'>Teruel</option>
	                                                       <option value='48'>Toledo</option>
	                                                       <option value='49'>Valencia</option>
	                                                       <option value='50'>Valladolid</option>
	                                                       <option value='51'>Vizcaya</option>
	                                                       <option value='52'>Zamora</option>
	                                                       <option value='53'>Zaragoza</option>
                                                    </select>
                                                    </div>
													<div class="col-md-8">
														<input type="text" class="form-control" id="provincia">
													</div>
												</div>
											</fieldset>
											<hr class="dotted tall">
											<h4 class="mb-xlg">Sobre tí</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileBio">Biografía</label>
													<div class="col-md-8">
														<textarea class="form-control" rows="3" id="profileBio"></textarea>
													</div>
												</div>
											</fieldset>
											<hr class="dotted tall">
											<h4 class="mb-xlg">Cambiar Contraseña</h4>
											<fieldset class="mb-xl">
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPassword">Nueva contraseña</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileNewPassword">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repetir nueva contraseña</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileNewPasswordRepeat">
													</div>
												</div>
											</fieldset>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button type="submit" class="btn btn-primary">Actualizar</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>
											</div>

										</form>

									</div>
                                    <div id="edit-pet" class="tab-pane">

										<form class="form-horizontal" method="get">
											<h4 class="mb-xlg">Personal Information</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">First Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileFirstName">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName">Last Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileLastName">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Address</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileAddress">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Company</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileCompany">
													</div>
												</div>
											</fieldset>
											<hr class="dotted tall">
											<h4 class="mb-xlg">About Yourself</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileBio">Biographical Info</label>
													<div class="col-md-8">
														<textarea class="form-control" rows="3" id="profileBio"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-xs-3 control-label mt-xs pt-none">Public</label>
													<div class="col-md-8">
														<div class="checkbox-custom checkbox-default checkbox-inline mt-xs">
															<input type="checkbox" checked="" id="profilePublic">
															<label for="profilePublic"></label>
														</div>
													</div>
												</div>
											</fieldset>
											<hr class="dotted tall">
											<h4 class="mb-xlg">Change Password</h4>
											<fieldset class="mb-xl">
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPassword">New Password</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileNewPassword">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repeat New Password</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="profileNewPasswordRepeat">
													</div>
												</div>
											</fieldset>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button type="submit" class="btn btn-primary">Submit</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
			
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/autosize/autosize.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>