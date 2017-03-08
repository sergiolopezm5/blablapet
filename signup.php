<?php 


if(!isset($_SESSION)) {
    session_start();
}
	
	## Añadimos las funciones propias de esta pagina
	include("funciones_sql_signup.php");
    include("funciones_php_signup.php");

?>

<!doctype html>
<html class="fixed sidebar-light">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Registrate - BlaBlaPet</title>
		<meta name="keywords" content="Registro BlaBlaPet" />
		<meta name="description" content="Registro BlaBlaPet">
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

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="assets/vendor/morris.js/morris.css" />

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
						<img src="assets/images/logo.png" height="35" alt="BlaBlaPet" />
					</a>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<span class="separator"></span>
                    <button type="submit" class="btn btn-primary">Inicia Sesión</button>
                    <span class="separator"></span>
                
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">

				<section class="body-sign">
                    <div class="center-sign">
                        
                        <a href="/" class="logo pull-left">
                            <img src="assets/images/logo.png" height="70" alt="BlaBlaPet" />
                        </a>

                        <div class="panel panel-sign">
                            <div class="panel-title-sign mt-xl text-right">
                                <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Registrate </h2>
                            </div>
                            <div class="panel-body">
                                
                                <?php echo pMostrarAlerta($codigo); ?>
                                
                                <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
                                    <div class="form-group mb-lg">
                                        <label>Nombre</label>
                                        <input name="name" type="text" class="form-control input-lg" />
                                    </div>

                                    <div class="form-group mb-lg">
                                        <label>E-mail</label>
                                        <input name="email" type="email" class="form-control input-lg" />
                                    </div>

                                    <div class="form-group mb-none">
                                        <div class="row">
                                            <div class="col-sm-6 mb-lg">
                                                <label>Contraseña</label>
                                                <input name="pwd" type="password" class="form-control input-lg" />
                                            </div>
                                            <div class="col-sm-6 mb-lg">
                                                <label>Confirmar contraseña</label>
                                                <input name="pwd_confirm" type="password" class="form-control input-lg" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-lg">
                                        <label>Provincia</label>
                                        <div class="input-group mb-lg">
                                            <input name="state" type="text" class="form-control input-lg" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-lg" type="button" data-toggle="tooltip" data-placement="bottom" title="Necesitamos tu Provincia para ponerte en conctacto con otras personas"><span class="icon"><i class="fa fa-question-circle"></i></span></button>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-lg">
                                        <label>Ciudad</label>
                                        <div class="input-group mb-lg">
                                            <input name="city" type="text" class="form-control input-lg" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-lg" type="button" data-toggle="tooltip" data-placement="bottom" title="Necesitamos tu Ciudad para ponerte en conctacto con otras personas"><span class="icon"><i class="fa fa-question-circle"></i></span></button>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="checkbox-custom checkbox-default">
                                                <input id="AgreeTerms" name="agreeterms" type="checkbox"/>
                                                <label for="AgreeTerms">Acepto los terminos de uso</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 text-right">
                                            <button type="submit" name="submit" class="btn btn-primary hidden-xs">Confirmar</button>
                                            <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Confirmar</button>
                                        </div>
                                    </div>

                                    <p class="text-center">¿Ya tienes una cuenta? <a href="pages-signin.html">Inicia Sesión!</a></p>

                                </form>
                            </div>
                        </div>
                        <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2017. All Rights Reserved.</p>
                    </div>
                    
                </section>
			</div>

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
		<script src="assets/vendor/jquery-ui/jquery-ui.js"></script>
		<script src="assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
		<script src="assets/vendor/jquery-appear/jquery-appear.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="assets/vendor/flot/jquery.flot.js"></script>
		<script src="assets/vendor/flot.tooltip/flot.tooltip.js"></script>
		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/jquery-sparkline/jquery-sparkline.js"></script>
		<script src="assets/vendor/raphael/raphael.js"></script>
		<script src="assets/vendor/morris.js/morris.js"></script>
		<script src="assets/vendor/gauge/gauge.js"></script>
		<script src="assets/vendor/snap.svg/snap.svg.js"></script>
		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

		<!-- Examples -->
		<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>

	</body>
</html>