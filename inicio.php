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
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styleprincipal.css">
</head>
<body>
<?php
  echo "<form id='head' method='post' action='cerrarsesion.php'>
     <label id='lblusu'>Bienvenido  ".$_SESSION['usuario']."</label>
     <input type='submit' id='cerrarsesion' name='cerrarsesion' value='CERRAR SESI&Oacute;N' size='50'>
     </form>";
     ?>
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
</body>
</html>

