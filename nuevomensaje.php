<?php

    include("funciones_sql_generales.php");
    include("funciones_php_generales.php");

    /*include("funciones_sql_mailbox.php");
    include("funciones_php_mailbox.php");*/


    sEnviarMensaje($_POST['idemisor'], $_POST['idreceptor'], $_POST['contenido']);

    /*echo $_POST['idemisor'];
    echo $_POST['idreceptor'];
    echo  $_POST['contenido'];*/

    header("Location: mailbox-inbox.php");

?>