<?php


function sGetDatosUsuario($ID)
{
     $conexion = conectarDDBB();
    
    $query1 = $conexion->prepare('SELECT * FROM usuarios WHERE ID like :id');
	$query1 ->execute(array(':id' => $ID ));
	$resultado1 = $query1->fetch();
    return $resultado1;
    
}

?>