
<?php

    include("funciones_sql_generales.php");
    include("funciones_php_generales.php");

    if(!isset($_SESSION)) {
        session_start();
    }
    
    if(isset($_SESSION['USER'])) {

        include("funciones_sql_user.php");
        include("funciones_php_user.php");

?>

<!doctype html>
<html class="fixed sidebar-light sidebar-left-collapsed">
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
				<?php echo pMostrarHeader() ?>
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
                
                <!-- start: sidebar -->
                <?php echo pMostrarSidebar(); ?>
				<!-- end: sidebar -->
				
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Perfil de Usuario</h2>
                        
					</header>

					<!-- start: page -->

					<div class="row">
						<div class="col-md-4 col-lg-3">
							<section class="panel">
								<div class="panel-body">
									<div class="thumb-info mb-md">
										<img src="images/users/<?php echo $_SESSION['USER'] ?>.jpg" class="rounded img-responsive" alt="John Doe">
										<div class="thumb-info-title">
											<span class="thumb-info-inner"><?php echo $datos[1] ?></span>
										</div>
									</div>


									<hr class="dotted short">

									<h6 class="text-muted">Sobre tí</h6>
									<p><?php echo $datos[7] ?></p>
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
										
                                        <form action="reg-mascota.php" class="form-horizontal" method="POST">
											<h4 class="mb-xlg">Nueva mascota</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">Nombre</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="nombremascota">
													</div>
												</div>
                                                <br>
                                                <br>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName">Animal</label>
													<div class="col-md-8">
														<select name="tipo">

                                                                <option value="Perro">Perro</option>

                                                                <option value="Gato">Gato</option>

                                                                <option value="0">Otros</option>

                                                        </select>
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
                                                     
												</div>
                                                <div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Agresividad</label>
													<div class="col-md-8">
														<select name="agresividad">

                                                                <option value="1">Muy tranquilo</option>

                                                                <option value="2">Tranquilo</option>

                                                                <option value="3">Normal</option>
                                                            
                                                                <option value="4">Agresivo</option>
                                                            
                                                                <option value="5">Muy agresivo</option>

                                                        </select>
													</div>
                                                  
												</div>
											</fieldset>
											<hr class="dotted tall">
											<h4 class="mb-xlg">Sobre tu mascota</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileBio">Mascota</label>
													<div class="col-md-8">
														<textarea class="form-control" rows="3" name="mascotaBio"></textarea>
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

										<form action="act-perfil.php" class="form-horizontal" method="POST">
											<h4 class="mb-xlg">Información Personal</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">Nombre</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="nombre"  value="<?php echo $datos[1]?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileMail">E-Mail</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="mail" value="<?php echo $datos[2]?>">
													</div>
												</div>
                                                <div class="form-group">
													<label class="col-md-3 control-label" for="profileFoto">Foto de perfil</label>
													<div class="col-md-8">
														<input type="file" name="pic" accept="image/*">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Provincia</label>
                                                    <div class="col-md-8">
                                                    <select name="provincia">
	                                                       <option value="A Coruña" <?php if($_SESSION['STATE'] == 'A Coruña') { echo 'selected="selected"';} ?>>A coruña</option>
                                                        <option value="Alava" <?php if($_SESSION['STATE'] == 'Alava') { echo 'selected="selected"';} ?>>Alava</option>
                                                        <option value="Albacete" <?php if($_SESSION['STATE'] == 'Albacete') { echo 'selected="selected"';} ?>>Albacete</option>
                                                        <option value="Alicante" <?php if($_SESSION['STATE'] == 'Alicante') { echo 'selected="selected"';} ?>>Alicante</option>
                                                        <option value="Almeria" <?php if($_SESSION['STATE'] == 'Almeria') { echo 'selected="selected"';} ?>>Almeria</option>
                                                        <option value="Asturias" <?php if($_SESSION['STATE'] == 'Asturias') { echo 'selected="selected"';} ?>>Asturias</option>
                                                        <option value="Avila" <?php if($_SESSION['STATE'] == 'Avila') { echo 'selected="selected"';} ?>>Avila</option>
                                                        <option value="Badajoz" <?php if($_SESSION['STATE'] == 'Badajoz') { echo 'selected="selected"';} ?>>Badajoz</option>
                                                        <option value="Baleares" <?php if($_SESSION['STATE'] == 'Baleares') { echo 'selected="selected"';} ?>>Baleares</option>
                                                        <option value="Barcelona" <?php if($_SESSION['STATE'] == 'Barcelona') { echo 'selected="selected"';} ?>>Barcelona</option>
                                                        <option value="Burgos" <?php if($_SESSION['STATE'] == 'Burgos') { echo 'selected="selected"';} ?>>Burgos</option>
                                                        <option value="Caceres" <?php if($_SESSION['STATE'] == 'Caceres') { echo 'selected="selected"';} ?>>Caceres</option>
                                                        <option value="Cadiz" <?php if($_SESSION['STATE'] == 'Cadiz') { echo 'selected="selected"';} ?>>Cadiz</option>
                                                        <option value="Cantabria" <?php if($_SESSION['STATE'] == 'Cantabria') { echo 'selected="selected"';} ?>>Cantabria</option>
                                                        <option value="Castellon" <?php if($_SESSION['STATE'] == 'Castellon') { echo 'selected="selected"';} ?>>Castellon</option>
                                                        <option value="Ceuta" <?php if($_SESSION['STATE'] == 'Ceuta') { echo 'selected="selected"';} ?>>Ceuta</option>
                                                        <option value="Cuidad Real" <?php if($_SESSION['STATE'] == 'Ciudad Real') { echo 'selected="selected"';} ?>>Ciudad Real</option>
                                                        <option value="Cordoba" <?php if($_SESSION['STATE'] == 'Cordoba') { echo 'selected="selected"';} ?>>Cordoba</option>
                                                        <option value="Cuenca" <?php if($_SESSION['STATE'] == 'Cuenca') { echo 'selected="selected"';} ?>>Cuenca</option>
                                                        <option value="Girona" <?php if($_SESSION['STATE'] == 'Girona') { echo 'selected="selected"';} ?>>Girona</option>
                                                        <option value="Granada" <?php if($_SESSION['STATE'] == 'Granada') { echo 'selected="selected"';} ?>>Granada</option>
                                                        <option value="Guadalajara" <?php if($_SESSION['STATE'] == 'Guadalajara') { echo 'selected="selected"';} ?>>Guadalajara</option>
                                                        <option value="Guipuzcoa" <?php if($_SESSION['STATE'] == 'Guipuzcoa') { echo 'selected="selected"';} ?>>Guipuzcoa</option>
                                                        <option value="Huelva" <?php if($_SESSION['STATE'] == 'Huelva') { echo 'selected="selected"';} ?>>Huelva</option>
                                                        <option value="Huesca" <?php if($_SESSION['STATE'] == 'Huesca') { echo 'selected="selected"';} ?>>Huesca</option>
                                                        <option value="Jaen" <?php if($_SESSION['STATE'] == 'Jaen') { echo 'selected="selected"';} ?>>Jaen</option>
                                                        <option value="La Rioja" <?php if($_SESSION['STATE'] == 'La Rioja') { echo 'selected="selected"';} ?>>La rioja</option>
                                                        <option value="Las Palmas" <?php if($_SESSION['STATE'] == 'Las Palmas') { echo 'selected="selected"';} ?>>Las palmas</option>
                                                        <option value="Leon" <?php if($_SESSION['STATE'] == 'Leon') { echo 'selected="selected"';} ?>>Leon</option>
                                                        <option value="Lleida" <?php if($_SESSION['STATE'] == 'Lleida') { echo 'selected="selected"';} ?>>Lleida</option>
                                                        <option value="Lugo" <?php if($_SESSION['STATE'] == 'Lugo') { echo 'selected="selected"';} ?>>Lugo</option>
                                                        <option value="Madrid" <?php if($_SESSION['STATE'] == 'Madrid') { echo 'selected="selected"';} ?>>Madrid</option>
                                                        <option value="Malaga" <?php if($_SESSION['STATE'] == 'Malaga') { echo 'selected="selected"';} ?>>Malaga</option>
                                                        <option value="Melilla" <?php if($_SESSION['STATE'] == 'Melilla') { echo 'selected="selected"';} ?>>Melilla</option>
                                                        <option value="Murcia" <?php if($_SESSION['STATE'] == 'Murcia') { echo 'selected="selected"';} ?>>Murcia</option>
                                                        <option value="Navarra" <?php if($_SESSION['STATE'] == 'Navarra') { echo 'selected="selected"';} ?>>Navarra</option>
                                                        <option value="Ourense" <?php if($_SESSION['STATE'] == 'Ourense') { echo 'selected="selected"';} ?>>Ourense</option>
                                                        <option value="Palencia" <?php if($_SESSION['STATE'] == 'Palencia') { echo 'selected="selected"';} ?>>Palencia</option>
                                                        <option value="Pontevedra" <?php if($_SESSION['STATE'] == 'Pontevedra') { echo 'selected="selected"';} ?>>Pontevedra</option>
                                                        <option value="Salamanca" <?php if($_SESSION['STATE'] == 'Salamanca') { echo 'selected="selected"';} ?>>Salamanca</option>
                                                        <option value="Santa cruz de teneriza" <?php if($_SESSION['STATE'] == 'Santa cruz de tenerife') { echo 'selected="selected"';} ?>>Santa cruz de tenerife</option>
                                                        <option value="Segovia" <?php if($_SESSION['STATE'] == 'Segovia') { echo 'selected="selected"';} ?>>Segovia</option>
                                                        <option value="Sevilla" <?php if($_SESSION['STATE'] == 'Sevilla') { echo 'selected="selected"';} ?>>Sevilla</option>
                                                        <option value="Soria" <?php if($_SESSION['STATE'] == 'Soria') { echo 'selected="selected"';} ?>>Soria</option>
                                                        <option value="Tarragona" <?php if($_SESSION['STATE'] == 'Tarragona') { echo 'selected="selected"';} ?>>Tarragona</option>
                                                        <option value="Teruel" <?php if($_SESSION['STATE'] == 'Teruel') { echo 'selected="selected"';} ?>>Teruel</option>
                                                        <option value="Toledo" <?php if($_SESSION['STATE'] == 'Toledo') { echo 'selected="selected"';} ?>>Toledo</option>
                                                        <option value="Valencia" <?php if($_SESSION['STATE'] == 'Valencia') { echo 'selected="selected"';} ?>>Valencia</option>
                                                        <option value="Valladolid" <?php if($_SESSION['STATE'] == 'Valladolid') { echo 'selected="selected"';} ?>>Valladolid</option>
                                                        <option value="Vizcaya" <?php if($_SESSION['STATE'] == 'Vizcaya') { echo 'selected="selected"';} ?>>Vizcaya</option>
                                                        <option value="Zamora" <?php if($_SESSION['STATE'] == 'Zamora') { echo 'selected="selected"';} ?>>Zamora</option>
                                                        <option value="Zaragoza" <?php if($_SESSION['STATE'] == 'Zaragoza') { echo 'selected="selected"';} ?>>Zaragoza</option>
                                                    </select>
                                                    </div>
												</div>
											</fieldset>
											<hr class="dotted tall">
											<h4 class="mb-xlg">Sobre tí</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileBio">Biografía</label>
													<div class="col-md-8">
														<textarea class="form-control" rows="3" name="profileBio"><?php echo $datos[7] ?></textarea>
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
											<h4 class="mb-xlg">Mis mascotas</h4>
											<?php echo sGetMascotas($ID); ?>

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

<?php } else {
        header("Location: index.php");
    } ?>

