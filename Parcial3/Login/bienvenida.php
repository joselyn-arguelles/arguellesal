
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Bienvenida</title>
</head>
<body>
    <h1>Bienvenido al sistema</h1>
    <?php 
	session_start();
      echo $_SESSION["usuariolg"];
    ?></h2>
    <br>
    <a href="Salir.php">Cerrar sesión</a>
</body>
</html>
