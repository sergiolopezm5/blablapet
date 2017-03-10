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
        
        echo "Entra en el bucle";
        print_r($resultado);
         $text .= '<fieldset>
												
            
            
            <div class="form-group" onclick="editarMascota('.$resultado['ID'].')">
            
            <label class="col-md-3 control-label" for="profileFirstName">'.$resultado['NOMBRE'].'</label>
												
                </div>
											
                </fieldset>';
       
                                                        
                                                        
    }
                           
    return $text;
}
    
    

?>