<?php
if(!empty($_POST)){
	$conexion=(mysqli_connect("localhost","root",""));
    mysqli_select_db($conexion,'hospital') or die ("no se encuentra la bd");	
	$nombreusuario=$_POST['nombreusuario'];
	$dni=$_POST['dni'];
	$nombre=$_POST['nombre'];
	$mascota=$_POST['mascota'];
    $sexo=$_POST['sexo'];
	$edad=$_POST['edad'];
	$raza=$_POST['raza'];
	$servicio=$_POST['servicio'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$password=$_POST['password'];
	$tipo='usuario';
	$consultardni="SELECT * FROM datosusuario where dni='$dni'";
	$resultadodni=mysqli_query($conexion,$consultardni);
	$busquedadni=mysqli_fetch_array($resultadodni);
//	echo $busquedadni;
	$consultarusuario="SELECT * FROM usuarios where nombre='$nombreusuario'";
	$resultadousuario=mysqli_query($conexion,$consultarusuario);	
	$busquedausuario=mysqli_fetch_array($resultadousuario);
//	echo $busquedausuario;	
	if(empty($busquedacedula)&&empty($busquedausuario)){		
		$insertar="INSERT INTO usuarios (nombre, password, tipo) VALUES ('$nombreusuario', '$password', '$tipo')";
        mysqli_query($conexion,$insertar) or die ("NO se pudo insertar usuario");
		$insertar="INSERT INTO datosusuario (idusuario, dni, nombre, mascota, sexo, edad, raza, servicio, telefono, direccion, cita) VALUES ('$nombreusuario', '$dni', '$nombre', '$mascota', '$sexo', '$edad', '$raza', '$servicio','$telefono', '$direccion', 0)";
        mysqli_query($conexion,$insertar) or die ("NO se pudo insertar datos personales");
        mysqli_close($conexion);
			echo"true";
		}else{
		    if (!empty($busquedadni)){
				echo "el dni ya esta registrado";
			}
		    if (!empty($busquedausuario)){
				echo "el nombre de usuario ya existe";
			}	
		}
}
?>