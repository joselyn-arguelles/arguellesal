<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Login con PHP + MySQL + JQuery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <div class="error">
      <span>Datos de ingreso no válidos, inténtelo de nuevo  por favor</span>
    </div>
    <div class="main justify-content-center">
    <img src="https://scontent.fntr6-1.fna.fbcdn.net/v/t1.15752-9/174283197_474495253663023_8796239375335592318_n.png?_nc_cat=107&ccb=1-3&_nc_sid=ae9488&_nc_ohc=eM3BXX2Oo24AX8_e_6l&_nc_ht=scontent.fntr6-1.fna&oh=181c88d1bc5c70140850a36d760342aa&oe=60AE22B0" class="bg"> 
    <form class="form-container" action="" id="formlg">
        <input type="text" name="usuariolg"  placeholder="Usuario" required>
        <input type="password" name="passlg"  placeholder="Contraseña" required>
        <input type="submit" class="botonlg"  value="Iniciar Sesion" >
     </form>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
