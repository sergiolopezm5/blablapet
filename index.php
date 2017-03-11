<?php 

    ## Añadimos las funciones generales
    include("funciones_sql_generales.php");
    include("funciones_php_generales.php");


if(!isset($_SESSION)) {
    session_start();
}
	
	## Añadimos las funciones propias de esta pagina
	include("funciones_sql_signup.php");
    include("funciones_php_signup.php");

    ## Añadimos las funciones para el inicio de sesion
	include("funciones_sql_login.php");

?>


<!doctype html>
<html class="fixed sidebar-light">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>BlaBlaPet</title>
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
        
        <!--[if lte IE 8]><script src="assets/home/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/home/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/home/assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/home/assets/css/ie9.css" /><![endif]-->

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
                    <a class="mb-xs mt-xs mr-xs btn btn-primary" href="signup.php">Registrate</a>
                    <a class="mb-xs mt-xs mr-xs modal-basic btn btn-primary" href="#modalForm">Inicia Sesión</a>
                    <span class="separator"></span>
                
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			 <?php echo pMostrarModalLogin(); ?>

                <!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen" style="height:715px;">
				<div class="content">
					<header>
						<h2>Hola.</h2>
					</header>
					<p>Bienvenido a <strong>BlaBlaPet</strong>, la nueva forma de adopción y cuidado de mascotas.</p>
					<footer>
						<a href="#one" class="button style2 down">Siguiente</a>
					</footer>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen" style="height:736px;">
				<div class="content box style2">
					<header>
						<h2>¿Qué hacemos?</h2>
					</header>
					<p>Somos el puente entre el dueño actual y el futuro dueño. Con el fin de poner en contacto a ambos para que la adaptación de la mascota en su nuevo hogar sea la mejor posible.</p>
				</div>
				<a href="#two" class="button style2 down anchored">Siguiente</a>
			</section>

		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen" style="height:736px;">
				<div class="content box style2">
					<header>
						<h2>¿Qué nos motiva?</h2>
					</header>
					<p>Miles de mascotas son abandonadas al año. Ofrecemos la posibilidad de encontrar a alguien que se haga cargo de tu mascota para no recurrir a la via facil: el abandono. </p>
				</div>
				<a href="#work" class="button style2 down anchored">Siguiente</a>
			</section>

		<!-- Three -->
			<section id="two" class="main style2 left dark fullscreen" style="height:736px;">
				<div class="content box style2">
					<header>
						<h2>¿Qué nos motiva?</h2>
					</header>
					<p>Miles de mascotas son abandonadas al año. Ofrecemos la posibilidad de encontrar a alguien que se haga cargo de tu mascota para no recurrir a la via facil: el abandono. </p>
				</div>
				<a href="#work" class="button style2 down anchored">Siguiente</a>
			</section>

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content">
					<header>
						<h2>¿Quiénes somos?</h2>
						<p>Somos estudiantes de Ingeniería Telemática en la UPCT y, sobretodo, amantes de los animales.</p>
					</header>

					

				</div>
			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content">
					<header>
						<h2> ¡ Únete ! </h2>
					</header>
					<div class="box">
					<h3> ¿Tú mascota necesita despejarse? Dale un paseo </h3>
						<form method="post" action="signup.php">
							<div class="field half first"><input type="text" name="name" placeholder="Dinos tu ciudad" /></div>
							
							<ul class="actions">
                                <li><button type="submit" class="btn btn-primary">Buscar</button></li>
							</ul>
						</form>
					</div>
					<br>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="actions">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
					</ul>

			</footer>
				
			

		</section>
        
        <!-- Scripts -->
        <script src="assets/home/assets/js/jquery.min.js"></script>
        <script src="assets/home/assets/js/jquery.poptrox.min.js"></script>
        <script src="assets/home/assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/home/assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/home/assets/js/skel.min.js"></script>
        <script src="assets/home/assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/home/assets/js/main.js"></script>

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
        <script src="assets/javascripts/ui-elements/examples.modals.js"></script>

	</body>
</html>