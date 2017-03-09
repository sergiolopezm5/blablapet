<?php


if(isset($_SESSION['ID'])) {
    header("Location: dashboard.php");
}else {
    if(isset($_POST['submit-login'])) {
        if(empty($_POST['email-login']) || empty($_POST['pass-login'])) {
            
            $codigo = 'PL001'; //No dejar caracteres en blanco
            
        } else {
            
            $codigo = sComprobarUsuarioRegistrado($_POST['email-login'],sha1($_POST['pass-login']));
            if($codigo == 'PL000') {
               header("Location: dashboard.php"); 
            }
        }
    } 
}

function sComprobarUsuarioRegistrado($mail, $pass) 
{
    $conexion = conectarDDBB();
    
    $sentencia = "SELECT ID, NOMBRE, MAIL FROM Usuarios WHERE MAIL = '".$mail."' AND PASS = '".$pass."'";
    $ejecucion = $conexion->query($sentencia);
        
	if($login = $ejecucion->fetch(PDO::FETCH_ASSOC)){
        $_SESSION['ID'] = $login['ID'];
        $_SESSION['NOMBRE'] = $login['NOMBRE'];
        $_SESSION['MAIL'] = $login['MAIL'];
        $devolver = 'PL000'; //Iniciada la sesion con exito
    } else {
        $devolver = 'PL002'; //Error al iniciar sesion
    }
    
    return $devolver;
}


?>