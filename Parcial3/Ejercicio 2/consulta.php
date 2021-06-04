<?php

$servidor = "localhost";
$Usuario = "root";
$Clave = "";
$db = "arguelles";

try
{
    $conexion = new PDO("mysql:host=$servidor;dbname=$db", $Usuario, $Clave);
}
catch(PDOException $error){
    echo "Ha ocurrido un error al conectar a " + $db;
    echo $error->getMessage();
    exit();
}

$cadenaConsulta = "SELECT * FROM CATALOGOBANCOS";
$consulta = $conexion->prepare($cadenaConsulta);
$consulta->execute();

while($registro = $consulta->fetch()){
    echo $registro['id_banco'].'//'.
         $registro['razon_social'].'//'.
         $registro['rfc'].'//'.
         $registro['colonia'].'//'.
         $registro['calle'].'//'.
         $registro['numero_domicilio'].'//'.
         $registro['telefono'].'<br>';
}
$consulta->closeCursor();
?>