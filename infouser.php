
<?php

    include("funciones_sql_generales.php");
    include("funciones_php_generales.php");

    if(!isset($_SESSION)) {
        session_start();
    }
    
    if(isset($_SESSION['USER'])) {

        include("funciones_sql_user.php");
        include("funciones_php_user.php");
        include("funciones_php_infouser.php");

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
				<?php echo pMostrarHeader();
                $ID = $_GET['id'];
                $datos = sGetDatosUsuario($ID);
                ?>
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
										<img src="images/users/<?php echo $_GET['id'] ?>.jpg" class="rounded img-responsive" alt="John Doe">
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
										<a href="#edit-pet" data-toggle="tab">Información</a>
                                    </li>
									<li >
										<a href="#overview" data-toggle="tab">Mascotas</a>
									</li>
									<li>
										<a href="#edit" data-toggle="tab">Valoración</a>
									</li>
								</ul>
								<div class="tab-content">
                                    <div id="edit-pet" class="tab-pane active">
                                        <!-- Información -->
										

									</div>
									<div id="overview" class="tab-pane">
										<!-- Mascotas -->
                                        <?php echo sGetMascotas(getId()); ?>
									</div>
									<div id="edit" class="tab-pane">
                                        <!-- Valoración -->
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

