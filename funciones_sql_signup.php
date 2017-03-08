<?php

if(isset($_POST['submit'])) {
    if(empty($_POST['name']) || empty($_POST['pwd']) || empty($_POST['pwd_confirm']) || empty($_POST['mail']) || empty($_POST['state']) || empty($_POST['city'])) {
        
        $codigo = 'PR001'; //No dejar caracteres en blanco
        
    } else { 
        
        if($_POST['pwd'] == $_POST['pwd_confirm']) {
            
            $codigo = sInsertarNuevoUsuario($_POST['name'], $_POST['mail'], $_POST['pwd'], $_POST['state'], $_POST['city']);
            
        } else {
            
            $codigo = 'PR002'; //Las contraseñas no coinciden
            
        }
        
    }
} 

function conectarDDBB() 
{
    try {
        $pdo = new PDO('mysql:host=localhost:3306;dbname=BlaBlaPet', 'root','root');
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    return $pdo;

}

function sInsertarNuevoUsuario($name, $mail, $pass, $state, $city)
{
	$conexion = conectarDDBB();
    $usuario = sConsultarUsuarioRegistrado($mail);
    
    if($usuario == 1) {
        
        $sentencia = "INSERT INTO Usuarios (NOMBRE, MAIL, PASS, PROVINCIA, CIUDAD) VALUES ('".$name."', '".$mail."', '".sha1($pass)."', '".$state."', '".$city."')";
        //echo $sentencia;
        $ejecucion = $conexion->query($sentencia);

        if($ejecucion) {
            $devolver = 'PR000'; //Nuevo usuario con exito
            //Redirigir a la pagina de añadir tu mascota

        } else  {
            $devolver = 'PR003'; //Error al crear el nuevo usuario
            //Redirigir a la misma pagina sacando el error

        }

        ##Cerrar conexion DDBB
        $conexion = null; 
        
    } else {
        $devolver = $usuario;
    }
    
	return $devolver;  
}

function sConsultarUsuarioRegistrado($mail) 
{
    $conexion = conectarDDBB();
    
    $sentencia = "SELECT COUNT(*) FROM Usuarios WHERE MAIL = '".$mail."'";
    $ejecucion = $conexion->query($sentencia);
    $resultado = $ejecucion->fetch();
        
	if($resultado[0] == 0) {
        $devolver = 1; //Nuevo usuario con exito
    } else  {
        $devolver = 'PR004'; //Usuario ya esta en la DDBB
    }
    
    return $devolver;
}

?>