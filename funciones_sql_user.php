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
    $query = $conexion->prepare('SELECT * FROM mascotas WHERE ID_USUARIO like: id');
    $query -> execute(array(':id' => $ID));
    while($resultado = $query->fetch()){
        
         $text .= '<fieldset>
												
            
            
            <div class="form-group" onclick="editarMascota('.$resultado[0].')">
            
            <label class="col-md-3 control-label" for="profileFirstName">'.$resultado[2].'</label>
            
                <div class="col-md-8">
            
                <input type="text" class="form-control" id="profileFirstName">
                
                </div>
												
                </div>
											
                </fieldset>';
       
                                                        
                                                        
    }
                           
    return $text;
}
    
    

?>