<?php

    session_start();
    include("funciones_sql_generales.php");
    $ID_USUARIO = $_SESSION['USER'];
    $NOMBRE = $_POST['nombremascota'];
    $TIPO = $_POST['tipo'];
    $RAZA = "";
    $TAMANO = $_POST['tamano'];
    $AGRESIVIDAD = $_POST['agresividad'];
    $BIO = $_POST['mascotaBio'];

	$conexion = conectarDDBB();

        
        $sentencia = "INSERT INTO mascotas (ID_USUARIO, NOMBRE, TIPO, RAZA, TAMANO, AGRESIVIDAD, BIOGRAFIA) VALUES ('".$ID_USUARIO."', '".$NOMBRE."', '".$TIPO."', '".$RAZA."', '".$TAMANO."', '".$AGRESIVIDAD."', '".$BIO."')";
        $ejecucion = $conexion->query($sentencia);

        $conexion = null; 
        


    header("Location: user_profile.php");

?>