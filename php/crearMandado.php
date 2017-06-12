<?php 
	$username= $_POST['username'];
	$descripcion = $_POST['descripcion'];

	if ($username!=""){
		if ($descripcion!=""){
			try{
				$conexion = new PDO('mysql:host=localhost;dbname=mandados', 'root', '');
		    	$sentencia = $conexion->prepare('INSERT INTO mandado (UsernameCliente, Descripcion) VALUES (:username, :descripcion)');
				$sentencia->bindParam(':username', $username);
				$sentencia->bindParam(':descripcion', $descripcion);
				$sentencia->execute();
				echo "Mandado registrado exitosamente.";
				$con = null;
			}
			catch (Exception $e) {
		    	echo "Surgio un error. Consulta NO ejecutada.";
			}
		}else{
		echo "Ingrese la descripcion de su pedido para registrarlo.";
		}
	}else{
		echo "Ingrese el nombre de usuario para crearlo.";
	}
?>