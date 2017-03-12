<?php
include("funciones_sql_generales.php");
include("funciones_sql_dashboard.php");
include("funciones_php_dashboard.php");

		$nombre_funcion=htmlspecialchars(trim(addslashes(stripslashes(strip_tags($_POST['funcion'])))));
   		
	 //Vamos revisando las diferentes funciones que recibimos y ejecutando la casuística
	 
	 	switch($nombre_funcion){
			
			case "filtrarCuidadores":
				//$usuario = htmlspecialchars(trim(addslashes(stripslashes(strip_tags($_POST['usuario'])))));
				$provincia = htmlspecialchars(trim(addslashes(stripslashes(strip_tags($_POST['provincia'])))));
				$agresividad_max = htmlspecialchars(trim(addslashes(stripslashes(strip_tags($_POST['agresividad_max'])))));
				$tamano_max = htmlspecialchars(trim(addslashes(stripslashes(strip_tags($_POST['tamano_max'])))));
				echo pafiltrarCuidadores($provincia, $agresividad_max, $tamano_max);
				break;
		}

function pafiltrarCuidadores($provincia, $agresividad_max, $tamano_max){
	$devolver = '';
	$row = sGetCuidadoresFiltrado($provincia,$agresividad_max,$tamano_max);
	//print_r($row);
	//sacar array en PDO
	if(empty($row)){
		$devolver .= '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>¡Oucchhh!</strong> No tenemos cuidadores con estas características.
                    </div>';
	}else{
		foreach($row as $elemento) {
		$foto = 'images/users/'.$elemento["ID_USUARIO"].'.jpg';
			$devolver .='<div class="col-lg-3 col-sm-6">
							<div class="plan">
								<h3 style="background-image: url('.$foto.'); height:100px; margin-bottom:0px;"></h3>
								<h4>'.$elemento['NOMBRE'].'</h4>
								<a class="btn btn-lg btn-primary modal-basic" href="#modalEnviarMensaje">Contactar</a>
								<ul>
									<li><b>Provincia: </b>'.$elemento['PROVINCIA'].'</li>
									<li><b>Ciudad: </b>'.$elemento['CIUDAD'].'</li>
								</ul>
							</div>
						</div>';
		}
	}
	return $devolver;
	
}



?>