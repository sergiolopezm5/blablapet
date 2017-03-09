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

?>