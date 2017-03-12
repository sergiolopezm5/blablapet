<?php

function pGetComentarios($ID)
{
    
    $devolver = '';
	
	$row = sGetDatosComentarios($ID);

	while($datos=$row->fetch(PDO::FETCH_ASSOC)){//sacar array en PDO

        $devolver .='<br>
                    <div class="row">
                        <div class="form-group col-md-4" style="display:inline-table;width:100px;">
                            <img class="img-circle" src="images/users/'.$datos['ID_USUARIO'].'.jpg" style="height:100px;width:100px;">								
                        </div>
                        <div class="col-md-8 demo-icon-hover">
                            <h4><b>'.$datos['NOMBRE'].'</b>&nbsp&nbsp&nbsp '.pEstrellas($datos['PUNTUACION']).' </h4>	
                            '.$datos['COMENTARIO'].'.
                        </div>
                    </div>';	
	}	
    
    return $devolver;
}

function pEstrellas($n) {
    $devolver = '';
    for($i = 0; $i < $n; $i++) {
        $devolver .='<span class="glyphicon glyphicon-star" style="font-size:14px;color:#FFCE54;"></span>';
    }
    return $devolver;
}
    
?>