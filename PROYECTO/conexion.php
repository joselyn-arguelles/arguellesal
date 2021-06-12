<?php
$Usuario = $_POST['usuariolg'];
$Clave = $_POST['passlg'];
 
$Conexion=mysqli_connect("localhost", "root", "", "arguelles");
$Consulta="SELECT * FROM usuarios WHERE usuario='$Usuario' and password='$Clave'";
$Resultado=mysqli_query($Conexion, $Consulta);


$Filas=mysqli_num_rows($Resultado);


if($Filas>0)
{
    header("location:bienvenida.php");
}
else
{
    header("location:error.php");
}

mysqli_free_result($Resultado);
mysqli_close($Conexion);
?>