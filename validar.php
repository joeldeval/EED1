<html>
  <head>
  
  
  </head>
  <body>
    
<?php
   
    $Usuario = $_POST['txtusuario'];
    $Contra = $_POST['txtcontra'];
if( ($Usuario == "joel" && $Contra == "joel")){
	session_start();
	$_SESSION["usuario"] = $Usuario;
<<<<<<< HEAD
	header("Location: index.php");
=======
	header("Location: inicio.php");
>>>>>>> 25487a230d6a60d934f3af47924b6f21c67271d0
      }else{
	header("Location: principal.php");
  echo "INCORRECTO";
	}
?>
 
   	
</body>

</html>
