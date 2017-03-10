<?php

function sGetCuidadores(){
	$conexion = conectarDDBB();
	$sentencia = "SELECT ID_USUARIO,
					PRECIO_DIA,
					PRECIO_PASEO,
					AGRESIVIDAD_MAX,
					TAMANO_MAX,
					(SELECT NOMBRE FROM usuarios WHERE ID=cuidadores.ID_USUARIO)as NOMBRE,
					(SELECT PROVINCIA FROM usuarios WHERE ID=cuidadores.ID_USUARIO)as PROVINCIA,
					(SELECT URL_FOTO FROM usuarios WHERE ID=cuidadores.ID_USUARIO)as URL_FOTO,
					(SELECT BIOGRAFIA FROM usuarios WHERE ID=cuidadores.ID_USUARIO)as BIOGRAFIA
					FROM cuidadores";
    $ejecucion=$conexion->query($sentencia);

	//mysqli_close($conexion);  
	$conexion = null;
	return $ejecucion; 

}


?>