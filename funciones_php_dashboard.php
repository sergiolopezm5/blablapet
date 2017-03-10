<?php

function pMostrarCuidadores() {
    $devolver = '';
	
	$row = sGetCuidadores();

	while($datos=$row->fetch(PDO::FETCH_ASSOC)){//sacar array en PDO

		  
        $devolver .='<div class="col-lg-3 col-sm-6">
                        <div class="plan">
                            <h3>'.$datos['NOMBRE'].'<span>'.$datos['URL_FOTO'].'</span></h3>
                            <a class="btn btn-lg btn-primary" href="#modalEnviarMensaje">Contactar</a>
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