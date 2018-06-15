<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Pacientes</title>
</head>
<body>
   <div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#miMenu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="frmadmin.php" class="navbar-brand">Bienvenido Administrador
				<?php
					session_start();
					echo $_SESSION['nombre'];
					?>
				</a>
			</div>		
			<div class="collapse navbar-collapse" id="miMenu">
				<ul class="nav navbar-nav">
					<li><a href="administradores.php">Administradores</a></li>
					<li><a href="doctores.php">Veterinarios</a></li>
					<li class="active"><a href="pacientes.php">Pacientes</a></li>	
					<li><a href="citas.php">Citas</a></li>	
					<li><a onclick="cambiar();" href="#">Cambiar contraseña</a></li>	
					<li><a href="php/cerrarsesion.php"><span class="label label-danger">CERRAR SESION </span></a></li>									
				</ul>
			</div>
		</div>
	</nav>
</div>

<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">LISTA DE PACIENTES</div>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>NOMBRE DE USUARIO</th>
					<th>DNI</th>
					<th>NOMBRE</th>	
					<th>MASCOTA</th>
					<th>SEXO</th>
					<th>EDAD</th>
					<th>RAZA</th>
					<th>SERVICIO</th>
					<th>TELEFONO</th>
					<th>DIRECCION</th>
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');
				     $result=mysqli_query($conexion,'SELECT nombre FROM usuarios where tipo="usuario"');
				     while ($usuarios=mysqli_fetch_array($result)){
						 $id=$usuarios['nombre'];
					 //////////////////////////////////////
					 $result2=mysqli_query($conexion,"SELECT * FROM datosusuario where idusuario='$id'");
					 $dato=mysqli_fetch_array($result2);
					 //////////////////////////////////////
					 echo "<tr><td id='id:$id' class='cam_editable'>".$usuarios['nombre']."</td>";
					 echo "<td id='dni:$id' class='cam_editable' contenteditable='true'>".$dato['dni']."</td>";
				     echo "<td id='nombre:$id' class='cam_editable' contenteditable='true'>".$dato['nombre']."</td>";
					 echo "<td id='mascota:$id' class='cam_editable' contenteditable='true'>".$dato['mascota']."</td>";
					 //////////////////////////////////////
					 echo "<td id='sexo:$id' class='cam_editable' contenteditable='true'>".$dato['sexo']."</td>";
					 echo "<td id='edad:$id' class='cam_editable' contenteditable='true'>".$dato['edad']."</td>";
					 echo "<td id='raza:$id' class='cam_editable' contenteditable='true'>".$dato['raza']."</td>";
					 echo "<td id='servicio:$id' class='cam_editable' contenteditable='true'>".$dato['servicio']."</td>";
					 echo "<td id='telefono:$id' class='cam_editable' contenteditable='true'>".$dato['telefono']."</td>";
					 echo "<td id='direccion:$id' class='cam_editable' contenteditable='true'>".$dato['direccion']."</td>";
					 ///////////////////////////////////////
				     echo"<td id='$id' button='true'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-minus'></span> Eliminar</button></td>";
					 echo"</tr>";
					 }
				?>
			</tbody>	
					
		</table>
	</div>
	</div>
	<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
	<button type="button" onclick="ventananuevo();" class="btn btn-success btn-lg" >
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar
    </button>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
	</div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nuevo Paciente</h4>
            </div>
            <form role="form"  id= "frmpaciente" name="frmpaciente" onsubmit="Registrarpaciente(); return false">
              <div class="col-lg-12">               

                <div class="form-group">
                  <label>Nombre de usuario</label>
                  <input  name="nombreusuario" class="form-control" required>
                </div>
                
                 <div class="form-group">
                  <label>dni</label>
                  <input  name="dni" class="form-control" required>
                </div>
                 
                <div class="form-group">
                  <label>nombre</label>
                  <input  name="nombre" class="form-control" required>
                </div>
                 
                <div class="form-group">
                  <label>mascota</label>
                  <input  name="mascota" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label>sexo</label>
                    <select name='sexo' class='form-control'>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </div>
                
                <div class="form-group">
                  <label>edad</label>
                  <input  name="edad"  class="form-control" required>
                </div>
                 
                 <div class="form-group">
                  <label>raza</label>
                  <input  name="raza" class="form-control" required>
                </div>
                
                 <div class="form-group">
                     <label>servicio</label>
                     <select name='servicio' class='form-control'>
                         <option value="baño_y_corte">Baño y corte</option>
                         <option value="atencion_medica">Atencion Medica</option>
                     </select>
                </div>
                 
                <div class="form-group">
                  <label>telefono</label>
                  <input  name="telefono" class="form-control" required>
                </div>
                 
                 <div class="form-group">
                     <label>direccion</label>
                     <input  name="direccion" class="form-control" required>
                 </div>

                <div class="form-group">
                  <label>password</label>
                  <input  name="password" id="p1" class="form-control" type="password"required>
                </div>
                
                <div class="form-group">
                  <label>repita password</label>
                  <input  name="password2" id="p2" class="form-control" type="password" required>
                </div>                         
                
                <button type="submit" class="btn btn-primary btn-lg" button='agregar'>
                  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Registrar
                </button>
              </div>
            </form>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
	
<!--//////////////////////////////////////////////////-->
 <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nuevo Paciente</h4>
            </div>
            <form role="form"  id= "frmcambiar" name="frmcambiar" onsubmit="cambiarpassword(); return false">
              <div class="col-lg-12">               

                <div class="form-group">
                  <label>vieja contraseña</label>
                  <input  name="password0" id="p" class="form-control" type="password"required>
                </div>
                <div class="form-group">
                  <label>nueva contraseña</label>
                  <input  name="password1" id="p3" class="form-control" type="password"required>
                </div>
                
                <div class="form-group">
                  <label>repita nueva password</label>
                  <input  name="password2" id="p4" class="form-control" type="password" required>
                </div> 
                 <button type="submit" class="btn btn-primary btn-lg" button='agregar'>
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Cambiar
                </button> 
              </div>
            </form>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
<!--//////////////////////////////////////////////////-->
<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/mainpaciente.js"></script>
<script type="text/javascript" src="js/change.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	
        function ventananuevo(){
          $('#modal').modal('show');

        }
	function cambiar(){
          $('#modal2').modal('show');

        }
    </script>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
</body>