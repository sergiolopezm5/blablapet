<?php

    session_start();
    include("funciones_sql_generales.php");
    $ID_USUARIO = $_SESSION['USER'];

    $NOMBRE = $_POST['nombre'];
    $MAIL = $_POST['mail'];
    $PROVINCIA = $_POST['provincia'];
    $BIOGRAFIA = $_POST['profileBio'];

	$conexion = conectarDDBB();
                        
                        
                        
    $destino = "images/";
    $destino = $destino.basename($_FILES['pic']['name']); 
        
    //if(move_uploaded_file($_FILES['pic']['tmp_name'], $destino)) 
       
     
//{ 
        
        $sentencia = "UPDATE usuarios SET NOMBRE = ".$NOMBRE.", MAIL = ".$MAIL.", PROVINCIA = ".$PROVINCIA.", BIOGRAFIA = ".$BIOGRAFIA."";
        $ejecucion = $conexion->query($sentencia);

        $conexion = null; 
        
        header("Location: user_profile.php");

  
//}
   

?>