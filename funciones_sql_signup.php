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
        $pdo = new PDO('mysql:host=localhost:3306;dbname=movies', 'root','root');
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    return $pdo;

}

function sInsertarNuevoUsuario($name, $mail, $pass, $state, $city)
{
	$conexion = conectarDDBB();
	$sentencia = "INSERT INTO Usuarios (Nombre, Mail, Pass, Provincia, Ciudad) VALUES ('".$name."', '".$mail."., '".sha1($pass)."', '".$state."', '".$city."')";
	//echo $sentencia;
	$pdo->query($sentencia);
        
	if($ejecucion) {
        $devolver = 'PR000'; //Nuevo usuario con exito
    } else  {
        $devolver = 'PR003'; //Error al crear el nuevo usuario
    }
    
    ##Cerrar conexion DDBB
	$conexion = null; 
    
	return $devolver;  
}

?>