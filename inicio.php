<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header("Location: principal.php");
}
?>

<!DOCTYPE html>

<html>
<head>
    <link rel="shortcut icon" href="favicon2.png" />
	<title>INICIO</title>
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="styleinicio.css">
=======
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styleprincipal.css">
>>>>>>> 25487a230d6a60d934f3af47924b6f21c67271d0
</head>
<body>
<?php
  echo "<form id='head' method='post' action='cerrarsesion.php'>
     <label id='lblusu'>Bienvenido  ".$_SESSION['usuario']."</label>
     <input type='submit' id='cerrarsesion' name='cerrarsesion' value='CERRAR SESI&Oacute;N' size='50'>
     </form>";
     ?>
<<<<<<< HEAD

<fieldset id="cabecera">

 <form action="validar.php" method="post">

      <a href="http://www.udg.mx" title="Ir a Universidad De Guadalajara"><img src="logo.png" alt="GIF" id="logoUDG"></a>
        <label>Eleccion Estudiantil Democratica del Centro Universitario de Tonala</label>
        
     
        </form>

        </fieldset>
=======
<fieldset id="cabecera">
 <form action="validar.php" method="post">

      <a href="http://www.udg.mx" title="Ir a Universidad De Guadalajara"><img src="logo.png" alt="GIF" id="logoUDG"></a>
       <p>Elección Estudiantil Democrática</p>
          <a href="http://www.cutonala.udg.mx" title="Ir a CUTonal&aacute;">

  <img src="dummylogo.png" alt="GIF" id="logocutonala">
</a>
     
        </form>
        </fieldset>
        <fieldset id="central">
       
      
   <img src="EEDlogo1.png" id="logoeed">
    </fieldset>
>>>>>>> 25487a230d6a60d934f3af47924b6f21c67271d0
</body>
</html>

