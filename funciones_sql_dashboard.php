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
					(SELECT CIUDAD FROM usuarios WHERE ID=cuidadores.ID_USUARIO)as CIUDAD,
					(SELECT BIOGRAFIA FROM usuarios WHERE ID=cuidadores.ID_USUARIO)as BIOGRAFIA
					FROM cuidadores";
    $ejecucion=$conexion->query($sentencia);
	//mysqli_close($conexion);  
	$conexion = null;
	return $ejecucion; 

}
function sGetCuidadoresFiltrado($provincia,$agresividad_max,$tamano_max){
	$conexion = conecta();
	$sentencia = "SELECT ID_USUARIO,
					PRECIO_DIA,
					PRECIO_PASEO,
					AGRESIVIDAD_MAX,
					TAMANO_MAX,
					(SELECT NOMBRE FROM usuarios WHERE ID=cuidadores.ID_USUARIO)as NOMBRE,
					(SELECT PROVINCIA FROM usuarios WHERE ID=cuidadores.ID_USUARIO )as PROVINCIA,
					(SELECT URL_FOTO FROM usuarios WHERE ID=cuidadores.ID_USUARIO)as URL_FOTO,
					(SELECT CIUDAD FROM usuarios WHERE ID=cuidadores.ID_USUARIO)as CIUDAD,
					(SELECT BIOGRAFIA FROM usuarios WHERE ID=cuidadores.ID_USUARIO)as BIOGRAFIA
					FROM cuidadores
WHERE
					(SELECT PROVINCIA FROM usuarios WHERE ID=cuidadores.ID_USUARIO )='$provincia' AND
					AGRESIVIDAD_MAX <= '$agresividad_max' AND
					TAMANO_MAX <= '$tamano_max'";
    $ejecucion=$conexion->query($sentencia);
	$devolver=array();
	while($datos=$ejecucion->fetch_array()){

		$devolver[]=$datos;
	}	
	mysqli_close($conexion);  
	return $devolver; 

}

?>