<?php

function pMostrarCuidadores() {
    $devolver = '';
	
	$row = sGetCuidadores();

	while($datos=$row->fetch(PDO::FETCH_ASSOC)){//sacar array en PDO

        $foto = 'images/users/'.$datos["ID_USUARIO"].'.jpg';
        $devolver .='<div class="col-lg-3 col-sm-6">
                        <div class="plan">
                            <h3 style="background-image: url('.$foto.'); height:100px; margin-bottom:0px;"></h3>
                            <h4>'.$datos['NOMBRE'].'</h4>
                            <a class="btn btn-lg btn-primary " href="infouser.php?id='.$datos["ID_USUARIO"].'">Contactar</a>
                            <ul>
                                <li><b>Provincia: </b>'.$datos['PROVINCIA'].'</li>
                                <li><b>Ciudad: </b>'.$datos['CIUDAD'].'</li>
                            </ul>
                        </div>
                    </div>';	
	}	
    
    return $devolver;
}

function pMostrarModalContactar() {
    $devolver = '<div id="modalEnviarMensaje" class="modal-block modal-block-primary mfp-hide">
                    <section class="panel">
                        <header class="panel-heading">
                            <h2 class="panel-title">Contactar</h2>
                        </header>
                        <div class="panel-body">
                            '.pFormEnviarMensaje(1,$_SESSION['USER']).'
                        </div>
                    </section>
                </div>';
    return $devolver;
}

?>