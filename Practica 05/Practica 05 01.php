	


	<body>
	<?php 
		$registros = array(
			array("id" => 1, "nombre" => "Juan", "edad" => 25, "sexo" => "M"),
			array("id" => 2, "nombre" => "Luis", "edad" => 35, "sexo" => "M"),
			array("id" => 3, "nombre" => "Maria", "edad" => 55, "sexo" => "F"),
			array("id" => 4, "nombre" => "Claudia", "edad" => 19, "sexo" => "F"),
			array("id" => 5, "nombre" => "Blanca", "edad" => 89, "sexo" => "F"),
			array("id" => 6, "nombre" => "Pedro", "edad" => 56, "sexo" => "M"),
		);
	?>	
	<table border=1>
		<thead>    
	 <h1>Tabla de registros</h1>					
			<tr>				
				<td>ID</td>
				<td>Nombre</td>
				<td>Edad</td>
				<td>Sexo</td>
				<td>Detalle</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				for ($i=0; $i < count($registros); $i++) { 
					echo "<tr>";
						echo "<td>".$registros[$i]["id"]."</td>";
						echo "<td>".$registros[$i]["nombre"]."</td>";
						echo "<td>".$registros[$i]["edad"]."</td>";
						echo "<td>".$registros[$i]["sexo"]."</td>";
						echo "<td><a href='Practica 05 02.php?id=".$registros[$i]["id"]."'>Ver detalle</a></td>";
					echo "</tr>";
				}
			?>

			
		</tbody>
	</table>
	<h1>Nombre: Angel Isaias Amador Barraza</h1>
</body>
