<?php
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
	while($datos=$row->fetch(PDO::FETCH_ASSOC)){//sacar array en PDO

        $devolver .='<div class="col-lg-3 col-sm-6">
                        <div class="plan">
                            <h3>'.$datos['NOMBRE'].'<span>'.$datos['URL_FOTO'].'</span></h3>
                            <a class="btn btn-lg btn-primary modal-basic" href="#modalEnviarMensaje">Contactar</a>
                            <ul>
                                <li><b>Provincia: </b>'.$datos['PROVINCIA'].'</li>
                                <li><b>Ciudad: </b>'.$datos['CIUDAD'].'</li>
                            </ul>
                        </div>
                    </div>';	
	}	
	
	return $devolver;
	
}



?>