<?php 
	$username= $_POST['username'];
	$password = $_POST['password'];

	if ($username!=""){
		if ($password!=""){
			try{
				$conexion = new PDO('mysql:host=localhost;dbname=mandados', 'root', '');
				$sentencia = $conexion->prepare('SELECT COUNT(id) FROM cliente WHERE username=:username');
				$sentencia->bindParam(':username', $username);
				$sentencia->execute();
				$res = $sentencia->fetchColumn();
				if ($res>=1) {
		    		echo 'El Nombre de Usuario que desea registrar ya existe, elija otro porfavor.';
				} else {
		    		$sentencia = $conexion->prepare('INSERT INTO cliente (username, password) VALUES (:username, :password)');
					$sentencia->bindParam(':username', $username);
					$sentencia->bindParam(':password', $password);
					$sentencia->execute();
					echo "Usuario creado exitosamente.";
		    	}
				$con = null;
			}
			catch (Exception $e) {
		    	echo "Surgio un error. Consulta NO ejecutada.";
			}
		}else{
		echo "Ingrese la contraseña del usuario para crearlo.";
		}
	}else{
		echo "Ingrese el nombre de usuario para crearlo.";
	}
?>