<?php

function sGetDatosUsuario($ID)
{
     $conexion = conectarDDBB();
    
    $query1 = $conexion->prepare('SELECT * FROM usuarios WHERE ID like :id');
	$query1 ->execute(array(':id' => $ID ));
	$resultado1 = $query1->fetch();
    return $resultado1;
    
}


function sGetMascotas($ID)
{
    $conexion = conectarDDBB();
    $text = "";
    $query = $conexion->prepare('SELECT * FROM mascotas WHERE ID_USUARIO like :id');
    $query -> execute(array(':id' => $ID));
    while($resultado = $query->fetch()){

         $text .= '<br>
                    <div class="row">
                        <div class="form-group col-md-4" style="display:inline-table;">
                            <img class="img-circle" src="images/pets/'.$resultado['ID'].'.jpg" style="height:150px;width:150px;">								
                        </div>
                        <div class="col-md-8">
                            <h4 style="">Nombre: <b>'.$resultado['NOMBRE'].'</b></h4>	
                            '.$resultado['BIOGRAFIA'].'
                        </div>
                    </div>';
                                     
    }
                           
    return $text;
}
    
    

?>