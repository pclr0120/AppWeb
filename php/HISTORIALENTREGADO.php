<?php 
	$username= $_POST['username'];
	$password = $_POST['password'];

	if ($username!=""){
		if ($password!=""){
			try{
				$conexion = new PDO('mysql:host=localhost;dbname=mandados', 'root', '');
				echo "<h2>Historial de mandados.</h2>";
		    	echo '<table class="table table-striped">';  
		    	echo "<thead>";  
				echo "<tr>";  
				echo "<th>Clave del Mandado</th>";  
				echo "<th>Nombre del usuario</th>";  
				echo "<th>Descripcion detallada del mandado</th>";  
				echo "<th>Fecha</th>";  
				echo "<th>Estatus</th>"; 
				echo "</tr>"; 
		    	echo "</thead>"; 
		    	echo "<tbody>";    
				foreach($conexion->query('SELECT * FROM Mandado where Estatus="ENTREGADO"' ) as $row){
 					echo "<tr>";  
					echo "<th>",$row['IdMandado'],"</th>";  
					echo "<th>",$row['UsernameCliente'],"</th>";  
					echo "<th>",$row['Descripcion'],"</th>";  
					echo "<th>",$row['Fecha'],"</th>";  
					echo "<th>",$row['Estatus'],"</th>";  
					echo "</tr>"; 
				}
		    	echo "</tbody>";  
				echo "</table>";
				$con = null;
			}
			catch (Exception $e) {
		    	echo "Surgio un error. Consulta NO ejecutada.";
			}
		}else{
		echo "Ingresa la contraseña del usuario para iniciar sesion.";
		}
	}else{
		echo "Ingresa el nombre de usuario para iniciar sesion.";
	}
?>