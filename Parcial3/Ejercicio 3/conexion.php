<?php
    $servidor = "localhost";
    $usuario = "root";
    $pass = "";
    $db = "arguelles";
    
    try
    {
        $conexion = new PDO("mysql:host=$servidor;dbname=$db", $usuario, $pass);
    }
    catch(PDOException $error){
        echo "Ha ocurrido un error al conectar a ".$db;
        echo $error->getMessage();
        exit();
    }
?>