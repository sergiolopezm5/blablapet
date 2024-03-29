<?php

function getUserId(){
    if(isset($_SESSION['USER'])) {
        return $_SESSION['USER']; 
    }else {
     header("Location: dashboard.php");
    }
}

function sObtenerMensajesRecibidos(){
    
    $text = '';
    $conexion = conectarDDBB();
    $query1 = $conexion->prepare('SELECT ID, ID_EMISOR, MENSAJE, FECHA, ESTADO FROM Mensajes WHERE ID_RECEPTOR like :id ORDER BY FECHA DESC LIMIT 0,9');
	$query1 ->execute(array(':id' => getUserId()  ));

	while($resultado = $query1->fetch()){
        $text .= pMostrarListaMensajes($resultado['ID'], $resultado['ID_EMISOR'], $resultado['MENSAJE'], $resultado['FECHA'], $resultado['ESTADO'] );
    }
    $conexion = null;
    return $text;
}

function sObtenerMensajesEnviados(){
    $text = '';
    $conexion = conectarDDBB();
    $query2 = $conexion->prepare('SELECT ID, ID_RECEPTOR, MENSAJE, FECHA, ESTADO FROM Mensajes WHERE ID_EMISOR like :id ORDER BY FECHA DESC LIMIT 0,9');
	$query2 ->execute(array(':id' =>  getUserId()  ));

	while($resultado = $query2->fetch()){
       $text .=  pMostrarListaMensajes($resultado['ID'], $resultado['ID_RECEPTOR'], $resultado['MENSAJE'], $resultado['FECHA'], $resultado['ESTADO'] );
    }
    $conexion = null;
    return $text;
}

function sEnviarMensaje($idemisor, $idreceptor, $contenido){
	$conexion = conectarDDBB();
    $query3 = $conexion->prepare('INSERT INTO `mensajes` ( `ID_EMISOR`, `ID_RECEPTOR`, `MENSAJE`, `ESTADO`) VALUES ( :idemisor, :idreceptor, :contenido,  1);');
	$query3 ->execute(array(':idemisor' => $idemisor, ':idreceptor' => $idreceptor, ':contenido' => $contenido,     ));
	$resultado = $query3->fetch();
}

function sNumMensajesNuevos(){
    $conexion = conectarDDBB();
    
    $query4 = $conexion->prepare('SELECT COUNT(*) FROM Mensajes WHERE ESTADO like 1 and ID_RECEPTOR like :id');
	$query4 ->execute(array(':id' =>  getUserId()   ));
	$resultado4 = $query4->fetch();
    $conexion = null;
    return $resultado4[0];
}

function sObtenerMensaje($IDMENSAJE){
    $conexion = conectarDDBB();
    $query5 = $conexion->prepare('SELECT * FROM Mensajes WHERE ID like :id ');
	$query5 ->execute(array(':id' =>  $IDMENSAJE ));
    $resultado5 = $query5->fetch();
    $conexion = null;
    return $resultado5;
}

function sMensajeLeido($IDMENSAJE){
    $conexion = conectarDDBB();
    $query5 = $conexion->prepare(' UPDATE `Mensajes` SET `ESTADO` = 0 WHERE `mensajes`.`ID` = :id ');
	$query5 ->execute(array(':id' =>  $IDMENSAJE ));
    $resultado5 = $query5->fetch();
    $conexion = null;
    return $resultado5[0];
   
}


?>