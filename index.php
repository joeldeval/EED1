<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header("Location: principal.php");
}
?>
<!DOCTYPE  html>
<html>
	<head>
	<link rel="shortcut icon" href="favicon.png" />
		<meta charset="utf-8">
<<<<<<< HEAD
		<title>EED | Inicio</title>

=======
		<title>EED CUTonala</title>
>>>>>>> 4dbad3a54cfd805894b1b7fc2ed2a36ae22a705f
		
		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/social-icons.css" type="text/css" media="screen" />
		<!--[if IE 8]>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie8-hacks.css" />
		<![endif]-->
		<!-- ENDS CSS -->	
		
		<!-- GOOGLE FONTS 
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>-->
		
		<!-- JS -->
		<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		
		<!-- Isotope -->
		<script src="js/jquery.isotope.min.js"></script>
		
		<!--[if IE]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
	      		/* EXAMPLE */
	      		//DD_belatedPNG.fix('*');
	    	</script>
		<![endif]-->
		<!-- ENDS JS -->
		
		
		<!-- Nivo slider -->
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<script src="js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- ENDS Nivo slider -->
		
		<!-- tabs -->
		<link rel="stylesheet" href="css/tabs.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/tabs.js"></script>
  		<!-- ENDS tabs -->
  		
  		<!-- prettyPhoto -->
		<script type="text/javascript" src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
		<link rel="stylesheet" media="screen" href="css/superfish-left.css" /> 
		<script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script>
		<script type="text/javascript" src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
		<link rel="stylesheet" href="js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
		<script type="text/javascript" src="js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="css/jquery.tweet.css" media="all"  type="text/css"/> 
		<script src="js/tweet/jquery.tweet.js" type="text/javascript"></script> 
		<!-- ENDS Tweet -->
		
		<!-- Fancybox -->
		<link rel="stylesheet" href="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<!-- ENDS Fancybox -->
		
		

	</head>
	
	<body class="home">

			<!-- HEADER -->
			<div id="header">
				<!-- wrapper-header -->
				<div class="wrapper">
					<a href="http://www.cutonala.udg.mx"><img id="logo" src="images/dummylogo.png" alt="Nova" /></a>
					<img id="logo1" src="images/logo1.png">
					<br/>
		
					<?php
  echo "<form id='head' method='post' action='cerrarsesion.php'>
     <label id='lblusu'>Bienvenido  ".$_SESSION['usuario']."</label><br/>
     <input type='submit' id='cerrarsesion' name='cerrarsesion' value='CERRAR SESI&Oacute;N' size='50'>
     </form>";
     ?><div class="top-search">
						<form  method="get" id="searchform" action="#">
							<div>
								<input type="text" value="Search..." name="s" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
								<input type="submit" id="searchsubmit" value=" " />
							</div>
						</form>
					</div>
					<!-- search -->
				
					<!-- ENDS search -->
				</div>
				<!-- ENDS wrapper-header -->					
			</div>
			<!-- ENDS HEADER -->
			
			
			<!-- Menu -->
			<div id="menu">
			
			
			
				<!-- ENDS menu-holder -->
				<div id="menu-holder">
					<!-- wrapper-menu -->
					<div class="wrapper">
						<!-- Navigation -->
						<ul id="nav" class="sf-menu">
							<li class="current-menu-item"><a href="index.php">Inicio<span class="subheader">Bienvenido</span></a>
							
								</li>
							<li><a href="alumnos.php">Alumnos<span class="subheader">votantes</span></a>
								<ul>
									
									<li><a href="porvotar.php"><span>Por Votar</span></a></li>
									<li><a href="votaron.php"><span>Votaron</span></a></li>
									
								</ul>
							</li>
							<li><a href="totaldevotos.php">Votos<span class="subheader">Total</span></a>
							</li>
                            
                            
                            	<!-- sedes -->
                            <li><a href="alumnos.php">Sede<span class="subheader">Alterna</span></a>
								<ul>
									
									<li><a href="Sede_casaculturaI/Casa_cultura_I.php"><span>Casa Cultura I</span></a></li>
									<li><a href="votaron.php"><span>Casa Cultura II</span></a></li>
                                    <li><a href="votaron.php"><span>Sillitas</span></a></li>
                                    <li><a href="votaron.php"><span>Santa Paula</span></a></li>
									
								</ul>
							</li>
                            
                            
                           	<!-- carreras --> 
                            
							<li><a href="alumnos.php">Carrera<span class="subheader">Licenciatura</span></a>
								<ul>
									
									<li><a href="porvotar.php"><span>Lic. Salud Publica</span></a></li>
									<li><a href="votaron.php"><span>Lic. Medico cirujano y partero</span></a></li>
                                    <li><a href="votaron.php"><span>Ing. Nanotecnologia</span></a></li>
                                     <li><a href="votaron.php"><span>Ing. Energia</span></a></li>
                                     <li><a href="votaron.php"><span>Ing. Ciencias Computacionales</span></a></li>
                                    <li><a href="votaron.php"><span>Lic. Gerontologia</span></a></li>
                                     <li><a href="votaron.php"><span>Lic. Estudios Liberales</span></a></li>
                                      <li><a href="votaron.php"><span>Lic. Diseño de Artesanias</span></a></li>
                                       <li><a href="votaron.php"><span>Lic. Contaduria Publica</span></a></li>
                                        <li><a href="votaron.php"><span>Lic. Administracion de Negocios</span></a></li>
                                         <li><a href="votaron.php"><span>Lic. Abogado</span></a></li>
                                          <li><a href="votaron.php"><span>Lic. Gerontologia</span></a></li>
									
								</ul>
							</li>

 	<!-- Grado y grupo --> 

<li><a href="alumnos.php">Grado y Grupo<span class="subheader">Aulas</span></a>
								<ul>
									
									<li><a href="porvotar.php"><span>1ero A</span></a></li>
									<li><a href="votaron.php"><span>1ero B</span></a></li>
                                    <li><a href="votaron.php"><span>2do A</span></a></li>
                                    <li><a href="votaron.php"><span>2do B</span></a></li>
                                     <li><a href="votaron.php"><span>3ero A</span></a></li>
                                      <li><a href="votaron.php"><span>3ero B</span></a></li>
                                       <li><a href="votaron.php"><span>4to A</span></a></li>
                                        <li><a href="votaron.php"><span>4to B</span></a></li>
									
								</ul>
							</li>
                            
                            
                           <li><a href="alumnos.php">Turno<span class="subheader">Matutino Vespertino</span></a>
								<ul>
									
									<li><a href="porvotar.php"><span>Matutino</span></a></li>
									<li><a href="votaron.php"><span>Vespertino</span></a></li>
									
								</ul>
							</li> 
                            
                            
						</ul>

							<div id="bottom">
				<!-- wrapper-bottom -->
				
					
					<!-- Social -->
					<ul class="social ">
						<li><a href="https://www.facebook.com/centrouniversitariodetonala" class="poshytip  facebook" title="ME GUSTA"></a></li>
						<li><a href="https://www.youtube.com/watch?v=LEso6YsTM_Y" class="poshytip youtube" title="Ve Nuestros Videos"></a></li>
					</ul>
					<!-- ENDS Social -->
				
				<!-- ENDS wrapper-bottom -->
			</div>
				
						<!-- Navigation -->
					</div>
					<!-- wrapper-menu -->
				</div>
				<!-- ENDS menu-holder -->

			</div>
			<!-- ENDS Menu -->
<<<<<<< HEAD
=======
			
>>>>>>> 4dbad3a54cfd805894b1b7fc2ed2a36ae22a705f
			<div id= "tabla">
              <table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
<td><font face="verdana"><b>CODIGO</b></font></td>
<td><font face="verdana"><b>NOMBRE</b></font></td>
<td><font face="verdana"><b>APELLIDOP</b></font></td>
<td><font face="verdana"><b>APELLIDOM</b></font></td>
<td><font face="verdana"><b>VOTO</b></font></td>
<td><font face="verdana"><b>MESA</b></font></td>
</tr>
                <?php  
		include ("conexion.php");
  $link = @mysql_connect("localhost", "root","")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("cutonala", $link)
      or die ("Error al conectar a la base de datos.");

  $query ="SELECT Nombre,Codigo,Ap_Paterno,Ap_Materno,voto " .
<<<<<<< HEAD
      "FROM estudiante, urnas WHERE Estudiante.id=id_Estudiante";
	 
  $result1 = mysql_query($query) or die (mysql_error());
  
  //consulta alumnos que NO votaron 
  $result2 = mysql_query("select count(voto) from urnas where voto=0") or die (mysql_error()); 
  $numero = 0;
  $sinvotar = mysql_fetch_row($result2);
   echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Nu Alumnos sin votar: " . $sinvotar[0] . 
      "</b></font></td></tr>";
	  
	  //consulta alumnos que votaron 
  $result3 = mysql_query("select count(voto) from urnas where voto=1") or die (mysql_error()); 
  $votar = mysql_fetch_row($result3);
   echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Nu Alumnos votaron: " . $votar[0] . 
      "</b></font></td></tr>";
	  
	  
=======
      "FROM estudiante, urnas where urnas.id_Estudiante=estudiante.id ";
  $result1 = mysql_query($query) or die (mysql_error()); ;
  $numero = 0;
>>>>>>> 4dbad3a54cfd805894b1b7fc2ed2a36ae22a705f
  while($row = mysql_fetch_array($result1))
  {
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" .        $row["Codigo"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Nombre"] . "</font></td>";
	echo "<td width=\"25%\"><font face=\"verdana\">" .        $row["Ap_Paterno"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" .        $row["Ap_Materno"] . "</font></td>";
<<<<<<< HEAD
    echo "<td width=\"25%\"><font face=\"verdana\">" .        $row["voto"] . "</font></td>";
=======
                  
>>>>>>> 4dbad3a54cfd805894b1b7fc2ed2a36ae22a705f
       

    $numero++;
  }
  echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Numero registros: " . $numero . 
      "</b></font></td></tr>";
<<<<<<< HEAD
	  
	 
  
  mysql_free_result($result1);
  mysql_free_result($result2);
  mysql_free_result($result3);
=======
  
  mysql_free_result($result1);
>>>>>>> 4dbad3a54cfd805894b1b7fc2ed2a36ae22a705f
  mysql_close($link);
?>
              </p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
			</div>
			</table>
<<<<<<< HEAD
			
			
=======
>>>>>>> 4dbad3a54cfd805894b1b7fc2ed2a36ae22a705f

	<!-- Slider -->
			<div id="slider-block">
				<div id="slider-holder">
					<div id="slider">
						<a href="http://www.cutonala.udg.mx"><img src="images/cutonala1.png" title="¡Visita la página del Centro Universitario de Tonalá!" alt="" /></a>
						
						<a href="index.php"><img id="eedinicio" src="images/EEDlogo1.jpg" title="Elección Electoral Democrática" alt="" /></a>
						
					</div>
				</div>
			</div>
			<!-- ENDS Slider -->
			
			<!-- MAIN -->
			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper">
					
					<!-- headline -->
					<div class="clear"></div>
					
					<!-- ENDS headline -->
					
					<!-- content -->
					</div>
				<!-- ENDS wrapper-main -->
			</div>
			<!-- ENDS MAIN -->
			
			<!-- Twitter -->
			<div id="twitter">
				<div class="wrapper">
					<a href="#" id="prev-tweet"></a>
					<a href="#" id="next-tweet"></a>
					<img id="bird" src="img/bird.png" alt="Tweets" />
					<div id="tweets">
						<ul class="tweet_list"></ul>
					</div>
				</div>
			</div>
			<!-- ENDS Twitter -->
<div id="footer">
				<!-- wrapper-footer -->
				<div class="wrapper">
					<!-- footer-cols -->
					<ul id="footer-cols">
						<li class="col">
							<h6>Páginas</h6>
							<ul>
								<li class="page_item"><a href="index.html">¿Quiénes somos?</a></li>
											
							    <li class="page_item"><a href="mision.html">Propósito</a></li>
								<li class="page_item"><a href="blog.html">Blog</a></li>
								<li class="page_item"><a href="gallery.html">Galería</a></li>
								<li class="page_item"><a href="contact.html">Contacto</a></li>

							</ul>
				
						</li>
						
					
						
						
					</ul>
					<!-- ENDS footer-cols -->
				</div>
				<!-- ENDS wrapper-footer -->
			</div>
			
			
		
			<!-- Bottom -->
			<div id="bottom">
				<!-- wrapper-bottom -->
				<div class="wrapper">
					<div id="bottom-text">Universidad de Guadalajara © Derechos reservados ©1997-2012.</div>
					<!-- Social -->
					<ul class="social ">
						<li><a href="http://www.facebook.com" class="poshytip  facebook" title="Become a fan"></a></li>
						<li><a href="https://www.youtube.com/watch?v=LEso6YsTM_Y" class="poshytip youtube" title="View our videos"></a></li>
					</ul>
					<!-- ENDS Social -->
					<div id="to-top" class="poshytip" title="To top"></div>
				</div>
				<!-- ENDS wrapper-bottom -->
			</div>
			<!-- ENDS Bottom -->
	
	</body>
</html>

