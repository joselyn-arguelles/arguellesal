<?php
try {
    include "conexion.php";
    $conexion->query("SET NAMES 'UTF8'");
    $consulta = $conexion->prepare("SELECT * from catalogobancos");
    $consulta -> execute();
    if (!$consulta) {
        echo 'Error al ejecutar la consulta';
    }else {
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultado);
    }
} catch (PDOException $ex) {
    echo $ex -> getMessage();
}
?>