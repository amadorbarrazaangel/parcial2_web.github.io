<html>
<head>


</head>
	<body>
<?php
	echo "<h1>Nombre:Amador Barraza Angel Isaias uwu</h1>";
	echo "<p>Mi primer programa en php</p>";
	echo "<br><br>";

		echo "<h1 style='color:blue;'>Lista de numeros</h1>";
		for ($i=0; $i <15; $i++) { 
		
			echo $i+1 . "<br>";
		}


  
	  for ($i=0; $i < 30; $i++)
 	 { 
		if($i % 2 == 0){
			echo "<div style='border: 1px solid black; padding:30px; width:30px; display:inline-flex; background-color:Green'>";
		}else{
		echo "<div style='border: 1px solid black; padding:30px; width:30px; display:inline-flex; background-color:red'>";
		}
		echo $i+1;
		
		echo "</div>";
	}
	echo "<h1>Nombre:Amador Barraza Angel Isaias uwu</h1>";
?>
</body>
</html>