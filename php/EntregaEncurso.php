<?php 
	$username= $_POST['username'];
	$descripcion = $_POST['descripcion'];

	if ($username!=""){
		if ($descripcion!=""){
			try{
				$conexion = new PDO('mysql:host=localhost;dbname=mandados', 'root', '');
		    	$sentencia = $conexion->prepare("update  mandado set Estatus='ENCURSO'  where idMandado=".$descripcion);
				$sentencia->bindParam(':username', $username);
				$sentencia->bindParam(':descripcion', $descripcion);
				$sentencia->execute();
				echo "Mandado Vinculado exitosamente.";
				$con = null;
			}
			catch (Exception $e) {
		    	echo "Surgio un error. Consulta NO ejecutada."." Ingrese un clave valida";
			}
		}else{
		echo "Ingrese la descripcion de su pedido para registrarlo.";
		}
	}else{
		echo "Ingrese el nombre de usuario para crearlo.";
	}
?>