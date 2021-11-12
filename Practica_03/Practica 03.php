<!doctype html>
 <html>
 <head>

   <head>
    
   </head>
  
<body style="background-image:url(gato.png); background-size: 200px,200px; color: white;">

   
     
 


<?php
	
     $nombre = $_GET["nombre"];
     $edad = $_GET["edad"];
    $correo = $_GET["correo"];
   $fecha_nacimiento = $_GET["fecha_nacimiento"];
   $sexo = $_GET["sexo"];
    $areas = $_GET["areas"];
	
	  echo"<br>";
	  echo"<br>";
	  echo"<br>";
	 echo "El  nombre del cliente:  " . $nombre;
	 echo "<br><br>";

	echo "La edad del cliente:  " . $edad;
	echo "<br><br>";

	echo "El  correo del cliente:  " . $correo;
	echo "<br><br>";

	echo "El  cumpleaños del cliente:  " . $fecha_nacimiento;
	echo "<br><br>";

	echo "El  sexo del cliente:  " . $sexo;
	echo "<br><br>";

	echo "Area preferencia:  "  ;
	for ($i=0; $i < count($areas) ; $i++) {
		echo $areas[$i] . "<br>"; 
	}	

	echo "<h2>Nombre: Amador Barraza Angel Isias </h2>"; 	
	
?>

  </body>
  </html>