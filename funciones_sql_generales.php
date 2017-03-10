<?php

function conectarDDBB() 
{
    try {
        $pdo = new PDO('mysql:host=localhost:3306;dbname=BlaBlaPet', 'root','root');
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    return $pdo;

}

function sGetDatosNotificacion($codigo_notificacion) 
{
    $conexion = conectarDDBB();

    // Construimos la sentencia en base a lo que viene en el array
    $sentencia="SELECT DESCRIPCION, TIPO_NOTIFICACION FROM Notificaciones WHERE CODIGO_NOTIFICACION = '$codigo_notificacion'";
    $resultado=$conexion->query($sentencia);

    $fila=$resultado->fetch();
    $devolver['TIPO_NOTIFICACION'] = $fila['TIPO_NOTIFICACION'];
    $devolver['DESCRIPCION'] = $fila['DESCRIPCION'];
    
    $conexion = null; 
    return $devolver;
    
}

?>