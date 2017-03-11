<?php

function sGetDatosUsuario($ID)
{
     $conexion = conectarDDBB();
    
    $query1 = $conexion->query("SELECT * FROM usuarios WHERE ID = '".$ID."'");
	$resultado1 = $query1->fetch();
    return $resultado1;
    
}

function sGetMascotas($ID)
{
    $conexion = conectarDDBB();
    $text = "";
    $query = $conexion->query("SELECT * FROM mascotas WHERE ID_USUARIO = '".$ID."'");
    if($query->rowCount() == 0){
		$text .= '<br><div class="alert alert-info">
                        <strong>¡Uppss!</strong> Este usuario no tiene mascotas.
                    </div>';
	}else {
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
    }
    return $text;
}
    

function sGetDatosComentarios($ID) {
    
	$conexion = conectarDDBB();
	$sentencia = 'SELECT Puntuaciones.*, Usuarios.NOMBRE FROM Puntuaciones INNER JOIN Usuarios ON Usuarios.ID = Puntuaciones.ID_USUARIO WHERE Puntuaciones.ID_CUIDADOR = '.$ID;
    $ejecucion=$conexion->query($sentencia);
	//mysqli_close($conexion);  
	$conexion = null;
	return $ejecucion; 

}
    

?>