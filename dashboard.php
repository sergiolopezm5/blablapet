<?php

    include("funciones_sql_generales.php");
    include("funciones_php_generales.php");

    if(!isset($_SESSION)) {
        session_start();
    }
    
    if(isset($_SESSION['USER'])) {

        include("funciones_sql_dashboard.php");
        include("funciones_php_dashboard.php");


?>

<!doctype html>
<html class="fixed sidebar-light  sidebar-left-collapsed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Inicio - BlaBlaPet</title>
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

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="assets/images/logo.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<ul class="notifications">
                        
						<?php echo pMostrarNotificacionesMensajes(); ?>
                        
						<?php echo pMostrarNotificacionesAlerta(); ?>
                        
					</ul>
			
					<span class="separator"></span>
			
                    <!-- Info Usuario -->
					<?php echo pMostrarInfoUsuario(); ?>
                    <!-- Info Usuario -->
                    
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
                
				<!-- start: sidebar -->
                <?php echo pMostrarSidebar(); ?>
				<!-- end: sidebar -->
                
				<script>
                    // Maintain Scroll Position
                    if (typeof localStorage !== 'undefined') {
                        if (localStorage.getItem('sidebar-left-position') !== null) {
                            var initialPosition = localStorage.getItem('sidebar-left-position'),
                                sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                            sidebarLeft.scrollTop = initialPosition;
                        }
                    }
                </script>
                
                
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Light Sidebar Layout</h2>
                        
					</header>

					<!-- start: page -->
				<!-- Formulario para el filtrado de resultados -->
                    <div class="row">
						<div class="col-md-4 col-lg-3">
							<section class="panel"> 
								<div class="panel-body">
                                    
                                        <div class="form-group mb-lg">
                                
                                            <label>Provincia</label>
                                            <select name="state" id="state" class="form-control mb-md">
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

                                        <div class="form-group mb-lg">
                                            <label>Tamaño</label>
                                            <select name="size" id="size" class="form-control mb-md">
                                                <option value="3">S</option>
                                                <option value="5">M</option>
                                                <option selected="selected" value="10">L</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-lg">
                                            <label>E-mail</label>
                                            <select name="agre" id="agre" class="form-control mb-md">
                                                <option value="1">Muy tranquilo</option>
                                                <option value="3">Tranquilo</option>
                                                <option value="5">Normal</option>
                                                <option value="7">Agresivo</option>
                                                <option selected="selected" value="10">Muy agresivo</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-lg">
                                            <button name="submit" onclick="filtrarCuidadores()" class="btn btn-primary hidden-xs">Filtrar</button>
                                        </div>
                                    
								</div>
							</section>

						</div>
                       <!-- start: page -->
                        <div class="col-md-8 col-lg-8">
                        <div class="pricing-table" id="pricing-table">
							<?php echo pMostrarCuidadores(); ?>
						</div>
                        <?php echo pMostrarModalContactar(); ?>   
                    </div>

					</div>

					<!-- end: page -->

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
		<script src="assets/javascripts/ui-elements/examples.modals.js"></script>
		<script src="dashboard.js"></script>

	</body>
</html>

<?php } else {
        header("Location: index.php");
    } ?>