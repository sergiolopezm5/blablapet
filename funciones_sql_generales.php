<?php

function conectarDDBB() 
{
    try {
        $pdo = new PDO('mysql:host=localhost:3306;dbname=BlaBlaPet', 'root');
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

function sGetNombreUsuario($ID)
{
    $conexion = conectarDDBB();
    
    $query1 = $conexion->prepare('SELECT NOMBRE FROM usuarios WHERE ID like :id');
	$query1 ->execute(array(':id' => $ID ));
	$resultado1 = $query1->fetch();
    return $resultado1[0];
}

function conecta(){ //Jaime PC
  $usuario = 'root';
   $pwd = '';
    $conexion = mysqli_connect("localhost", $usuario, $pwd, "blablapet");
    if (mysqli_connect_errno()) {
    printf("La conexión falló: %s\n", mysqli_connect_error());
    exit();
    }
    $conexion->set_charset("utf8");
    /* Imprimir el juego de caracteres en uso */
     return $conexion;
}

?>