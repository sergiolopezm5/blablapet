<?php

function sObtenerMensajesRecibidos($id){
    $text = '';
    $conexion = conectarDDBB();
    $query1 = $conexion->prepare('SELECT ID_EMISOR, MENSAJE, FECHA, ESTADO FROM Mensajes WHERE ID_RECEPTOR like :id ORDER BY FECHA DESC LIMIT 0,9');
	$query1 ->execute(array(':id' => $id  ));
	while($resultado = $query1->fetch()){
        $text .= pMostrarListaMensajes($resultado['ID_EMISOR'], $resultado['MENSAJE'], $resultado['FECHA'], $resultado['ESTADO'] );
    }
    return $text;
}

function sObtenerMensajesEnviados($id){
    $conexion = conectarDDBB();
    $query2 = $conexion->prepare('SELECT ID_RECEPTOR, MENSAJE, FECHA, ESTADO FROM Mensajes WHERE ID_EMISOR like :id ORDER BY FECHA DESC LIMIT 0,9');
	$query2 ->execute(array(':id' => $id  ));
	while($resultado = $query2->fetch()){
        return pMostrarListaMensajes($resultado['ID_RECEPTOR'], $resultado['MENSAJE'], $resultado['FECHA'], $resultado['ESTADO'] );
    }
}

function sEnviarMensaje($idemisor, $idreceptor, $asunto, $contenido){
	   $conexion = conectarDDBB();
    
    $query3 = $conexion->prepare('SELECT ID_RECEPTOR, MENSAJE, FECHA, ESTADO FROM Mensajes WHERE ID_RECEPTOR like :id ORDER BY FECHA DESC LIMIT 0,9');
	$query3 ->execute(array(':id' => $_SESSION['usuario']  ));
	while($resultado = $query3->fetch()){
        return pMostrarListaMensajes($resultado['ID_RECEPTOR'], $resultado['MENSAJE'], $resultado['FECHA'], $resultado['ESTADO'] );
    }
}

function sNumMensajesNuevos($iduser){
    $conexion = conectarDDBB();
    
    $query4 = $conexion->prepare('SELECT COUNT(*) FROM Mensajes WHERE ESTADO like 1 and ID_RECEPTOR like :id');
	$query4 ->execute(array(':id' => $iduser  ));
	$resultado4 = $query4->fetch();
    return $resultado4[0];
}

function sObtenerMensaje($idmensaje){
    $conexion = conectarDDBB();
    $query5 = $conexion->prepare('SELECT * FROM Mensajes WHERE ID like :id ');
	$query5 ->execute(array(':id' => $idmensaje  ));
    $resultado5 = $query5->fetch();
    return $resultado5;
}




?>