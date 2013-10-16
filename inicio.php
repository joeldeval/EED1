<!DOCTYPE html>
<?php 
session_start();
if(!isset($_SESSION['usuario'])){
	header('Location: principal.php');
}
?>
<html>
<head>
    <link rel="shortcut icon" href="favicon2.png" />
	<title>INICIO</title>
</head>
<body>
	BIENVENIDO!
</body>
</html>