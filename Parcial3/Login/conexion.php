<?php
$Usuario = $_POST['usuariolg'];
$Clave = $_POST['passlg'];


//conexion a la bd
$Conexion=mysqli_connect("localhost", "root", "", "arguelles");
$Consulta="SELECT * FROM usuarios WHERE usuario='$Usuario' and password='$Clave'";
$Resultado=mysqli_query($Conexion, $Consulta);


$Filas=mysqli_num_rows($Resultado);


if($Filas>0)
{
    session_start();
    $_SESSION['usuariolg'] = $Usuario;
    header("location:bienvenida.php");
}
else
{
    echo "Error con la autentificacion, Usuario/Clave invalida, intente de nuevo.";
}
mysqli_free_result($Resultado);
mysqli_close($Conexion);
?>
