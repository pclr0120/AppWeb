<?php 
	$username= $_POST['username'];
	$password = $_POST['password'];

	if ($username!=""){
		if ($password!=""){
			try{
				$conexion = new PDO('mysql:host=localhost;dbname=mandados', 'root', '1234');
				$sentencia = $conexion->prepare('SELECT COUNT(id) FROM cliente WHERE username=:username AND password=:password');
				$sentencia->bindParam(':username', $username);
				$sentencia->bindParam(':password', $password);
				$sentencia->execute();
				$res = $sentencia->fetchColumn();
				if ($res>=1) {
		    		echo 'Usuario y contraseña correctos.';
				} else {
		    		echo 'El usuario o la contraseña estan incorrectos. Revise los datos ingresados.';
		    	}
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