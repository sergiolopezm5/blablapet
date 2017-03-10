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
        
         $text .= '<form action="editar-mascota.php?id='.$resultado[0].'" class="form-horizontal" method="get"><fieldset>
												
            
            <form class="form-horizontal" method="get">
            <div class="form-group">
            
            <label class="col-md-3 control-label" for="profileFirstName">'.$resultado['NOMBRE'].'</label>
					<input type="submit" />									
                </div>
									
                </fieldset></form><hr class="dotted tall">';
       
                                                        
                                                        
    }
                           
    return $text;
}
    
    

?>