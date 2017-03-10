<?php

function pMostrarCuidadores() {
    $devolver = '';
	
	$row = sGetCuidadores();

	while($datos=$row->fetch(PDO::FETCH_ASSOC)){//sacar array en PDO

		  
        $devolver .='<div class="col-lg-3 col-sm-6">
                        <div class="plan">
                            <h3>'.$datos['NOMBRE'].'<span>$59</span></h3>
                            <a class="btn btn-lg btn-primary" href="#">Sign up</a>
                            <ul>
                                <li><b>10GB</b> Disk Space</li>
                                <li><b>100GB</b> Monthly</li>
                                <li><b>20</b> Email Accounts</li>
                            </ul>
                        </div>
                    </div>';	
	}	
    
    return $devolver;
}

?>