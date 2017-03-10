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
    
    $query_login = "SELECT * FROM Usuarios WHERE MAIL ='".$mail."' AND PASS = '".$pass."'";
    $login_result = $conexion->query($query_login);
    if($login = $login_result->fetch()){
        $_SESSION['USER'] = $login['ID'];
        $_SESSION['NAME'] = $login['NOMBRE'];
        $_SESSION['MAIL'] = $login['MAIL'];
        $_SESSION['STATE'] = $login['PROVINCIA'];
        $devolver = 'PL000'; //Correcto
    } else{
        $devolver = 'PL002'; // Error al establecer sesion
    }
    
    return $devolver;
}


?>